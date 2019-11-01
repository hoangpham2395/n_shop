<?php
namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;
use Storage;

/**
 * Class BaseController
 * @package App\Http\Controllers\Base
 */
class BaseController extends Controller
{
	protected $_repository;
	protected $_alias;
	protected $_request;
	protected $_title;
	protected $_viewData = [];

	public function __construct()
	{
		$this->setAlias(!empty($this->getRepository()) ? $this->getRepository()->getModel()->getTable() : '');
	}

	public function getRepository()
	{
		return $this->_repository;
	}

	public function setRepository($repository)
	{
		$this->_repository = $repository;
	}

	public function setAlias($alias)
	{
		$this->_alias = $alias;
	}

	public function getAlias()
	{
		return $this->_alias;
	}

	public function setTitle($title)
    {
        $this->_title = $title;
    }

    public function getTitle()
    {
        return !empty($this->_title) ? $this->_title : env('APP_NAME');
    }

    public function setViewData($data = [])
    {
        $this->_viewData = array_merge($this->_viewData, $data);
    }

    public function getViewData()
    {
        return $this->_viewData;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
	{
		$dataSearch = Input::all();
		$entities = $this->getRepository()->getListForBackend($dataSearch);
		return view('backend.'. $this->getAlias() .'.index', compact('entities'));
	}

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
	{
		return view('backend.'. $this->getAlias() .'.create');
	}

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeBase()
	{
		$data = $this->_getFormData();

		DB::beginTransaction();

		try {
			$this->getRepository()->create($data);
			DB::commit();
			return redirect()->route('backend.'. $this->getAlias() .'.index')->with(['success' => getMessage('create_success')]);
		} catch (\Exception $e) {
			logError($e);
			DB::rollBack();
		}
		return redirect()->route('backend.'. $this->getAlias() .'.index')->withErrors(new MessageBag(['create_failed' => getMessage('create_failed')]));
	}

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
     */
    public function show($id)
	{
		$entity = $this->getRepository()->findById($id);

		if (empty($entity)) {
			return abort('404');
		}

		return view('backend.'. $this->getAlias() .'.show', compact('entity'));
	}

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
     */
    public function edit($id)
	{
		$entity = $this->getRepository()->findById($id);

		if (empty($entity)) {
			return abort('404');
		}

		return view('backend.'. $this->getAlias() .'.edit', compact('entity'));
	}

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function updateBase($id)
	{
		$entity = $this->getRepository()->findById($id);

		if (empty($entity)) {
			return abort('404');
		}

		$data = $this->_getFormData(false);

		DB::beginTransaction();

		try {
			$this->getRepository()->update($id, $data);
			DB::commit();
			return redirect()->route('backend.'. $this->getAlias() .'.index')->with(['success' => getMessage('update_success')]);
		} catch (\Exception $e) {
			logError($e);
			DB::rollBack();
		}
		return redirect()->route('backend.'. $this->getAlias() .'.index')->withErrors(new MessageBag(['update_failed' => getMessage('update_failed')]));
	}

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function destroy($id)
	{
		$entity = $this->getRepository()->findById($id);

		if (empty($entity)) {
			return abort('404');
		}

		try {
			$this->getRepository()->destroy($id);
			return redirect()->route('backend.'. $this->getAlias() .'.index')->with(['success' => getMessage('delete_success')]);
		} catch (\Exception $e) {
			logError($e);
		}
		return redirect()->route('backend.'. $this->getAlias() .'.index')->withErrors(new MessageBag(['delete_failed' => getMessage('delete_failed')]));
	}

	public function render($view = null, $data = [], $mergeData = [])
    {
        $data = array_merge($this->getViewData(), $data);
        $data['title'] = $this->getTitle();
        return view($view, $data, $mergeData);
    }

    /**
     * @param bool $isStore
     * @param bool $forAdmin
     * @return array
     */
    protected function _getFormData($isStore = true, $forAdmin = true)
	{
		$data = Input::all();

		// Filter data
		if (!empty($data['_method'])) {
			unset($data['_method']);
		}

		if (!empty($data['_token'])) {
			unset($data['_token']);
		}

		$adminId = backendGuard()->check() ? backendGuard()->user()->id : getConstant('ADMIN_ID_DEFAULT');

		if (!$forAdmin) {
		    return $data;
        }

		if ($isStore) {
			$data['ins_id'] = $adminId;
		} else {
			$data['upd_id'] = $adminId;
		}

		return $data;
	}

    /**
     * @return int
     */
    public function getNextInsertId()
    {
    	try {
    		$statement = DB::select("SHOW TABLE STATUS LIKE '". $this->getRepository()->getModel()->getTable() ."'");
            $nextId = $statement[0]->Auto_increment;
            return $nextId;
    	} catch (\Exception $e) {
    		logError($e);
    		return 0;
    	}
    }

    /**
     * @param $request
     * @param $fileField
     * @return string|void
     */
    protected function _uploadFile($request, $fileField)
    {
        // Check exist
        if (!$request->hasFile($fileField)) {
            return '';
        }

        $id = !empty($request->get('id')) ? $request->get('id') : $this->getNextInsertId();

        // Upload file to tmp folder
        try {
        	$fileOriginalName = $request->file($fileField)->getClientOriginalName();
        	$contentFile = file_get_contents($request->file($fileField)->getRealPath());
        	$newFileName = '/'. $this->getAlias() .'/'. date('Y') .'/'. date('m') .'/'. date('d') .'/'. $id .'_'. $fileOriginalName;

            Storage::disk('media')->put($newFileName, $contentFile);

            return '/media'. $newFileName;
        } catch(\Exception $e) {
        	logError($e);
        	return '';
        }
    }

    /**
     * @param $urlFile
     */
    protected function _deleteFile($urlFile)
    {
    	try {
    		if (empty($urlFile) || !file_exists(public_path($urlFile))) {
    			return;
    		}

        	Storage::disk('public_path')->delete($urlFile);
    	} catch (\Exception $e) {
    		logError($e);
    	}
    }
}
