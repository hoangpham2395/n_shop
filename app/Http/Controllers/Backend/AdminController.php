<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BaseController;
use App\Repositories\AdminRepository;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\Backend\StoreAdminRequest;
use App\Http\Requests\Backend\UpdateAdminRequest;
use Illuminate\Support\Facades\DB;

class AdminController extends BaseController 
{
	public function __construct(AdminRepository $adminRepository) 
	{
		$this->setRepository($adminRepository);
		parent::__construct();
	}

	public function index() 
	{
		if (!$this->_checkPermission()) {
			return abort('404');
		}

		$dataSearch = Input::all();
		$entities = $this->getRepository()->getListForBackend($dataSearch);
		return view('backend.admin.index', compact('entities'));
	}

	public function create() 
	{
		if (!$this->_checkPermission()) {
			return abort('404');
		}

		return view('backend.admin.create');
	}

	public function store(StoreAdminRequest $request) 
	{
		if (!$this->_checkPermission()) {
			return abort('404');
		}

		$data = $request->all();

		DB::beginTransaction();

		try {
			$this->getRepository()->create($data);
			DB::commit();
			return redirect()->route('backend.admin.index')->with(['success' => getMessage('create_success')]);
		} catch (\Exception $e) {
			logError($e);
			DB::rollBack();
		}
		return redirect()->route('backend.admin.index')->withErrors(new MessageBag(['create_failed' => getMessage('create_failed')]));
	}

	public function edit($id) 
	{
		$entity = $this->getRepository()->findById($id);

		if (empty($entity) || (!$this->_checkPermission() && !$entity->isOwner())) {
			return abort('404');
		}

		return view('backend.admin.edit', compact('entity'));
	}

	public function update(UpdateAdminRequest $request, $id) 
	{
		$entity = $this->getRepository()->findById($id);

		if (empty($entity) || (!$this->_checkPermission() && !$entity->isOwner())) {
			return abort('404');
		}

		$data = $request->all();

		if ($entity->isOwner()) {
			$data['role_type'] = $entity->role_type;
		}

		DB::beginTransaction();

		try {
			$this->getRepository()->update($id, $data);
			DB::commit();
			return redirect()->route('backend.admin.index')->with(['success' => getMessage('update_success')]);
		} catch (\Exception $e) {
			logError($e);
			DB::rollBack();
		}
		return redirect()->route('backend.admin.index')->withErrors(new MessageBag(['update_failed' => getMessage('update_failed')]));
	}

	public function destroy($id) 
	{
		$entity = $this->getRepository()->findById($id);

		if (empty($entity) || !$this->_checkPermission() || $entity->isOwner()) {
			return abort('404');
		}

		try {
			$this->getRepository()->destroy($id);
			return redirect()->route('backend.admin.index')->with(['success' => getMessage('delete_success')]);
		} catch (\Exception $e) {
			logError($e);
		}
		return redirect()->route('backend.admin.index')->withErrors(new MessageBag(['delete_failed' => getMessage('delete_failed')]));
	}

	protected function _checkPermission() 
	{
		return backendGuard()->user()->isSuperAdmin();
	}
}