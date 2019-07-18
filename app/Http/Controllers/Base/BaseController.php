<?php
namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\FormRequest as Request;
use Illuminate\Support\MessageBag;

class BaseController extends Controller 
{
	protected $_repository;
	protected $_alias;

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

	public function __construct() 
	{
		$this->setAlias($this->getRepository()->getModel()->getTable());
	}

	public function index() 
	{
		$dataSearch = Input::all();
		$entities = $this->getRepository()->getListForBackend($dataSearch);
		return view('backend.'. $this->getAlias() .'.index', compact('entities'));
	}

	public function create() 
	{
		return view('backend.'. $this->getAlias() .'.create');
	}

	public function store(Request $request) 
	{
		$data = array_merge($request->all(), $this->_prepareStore());

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

	public function edit($id) 
	{
		$entity = $this->getRepository()->findById($id);

		if (empty($entity)) {
			return abort('404');
		}

		return view('backend.'. $this->getAlias() .'.edit', compact('entity'));
	}

	public function update(Request $request, $id) 
	{
		$entity = $this->getRepository()->findById($id);

		if (empty($entity)) {
			return abort('404');
		}

		$data = array_merge($request->all(), $this->_prepareUpdate());

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

	protected function _prepareStore() 
	{
		$insId = backendGuard()->check() ? backendGuard()->user()->id : getConstant('ADMIN_ID_DEFAULT'); 

		return [
			'ins_id' => $insId,
		];
	}

	protected function _prepareUpdate() 
	{
		$updId = backendGuard()->check() ? backendGuard()->user()->id : getConstant('ADMIN_ID_DEFAULT'); 

		return [
			'upd_id' => $updId,
		];
	}
}