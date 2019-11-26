<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BaseController;
use App\Repositories\AdminRepository;
use App\Http\Requests\Backend\AdminRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;

/**
 * Class AdminController
 * @package App\Http\Controllers\Backend
 */
class AdminController extends BaseController
{
    /**
     * AdminController constructor.
     * @param AdminRepository $adminRepository
     */
    public function __construct(AdminRepository $adminRepository)
	{
		$this->setRepository($adminRepository);
		parent::__construct();
	}

    /**
     * @return string
     */
    public function request()
	{
		return AdminRequest::class;
	}

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
     */
    public function index()
	{
		if (!$this->_checkPermission()) {
			return abort('404');
		}

		return parent::index();
	}

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
     */
    public function create()
	{
		if (!$this->_checkPermission()) {
			return abort('404');
		}

		return parent::create();
	}

    /**
     * @param AdminRequest $request
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function store(AdminRequest $request)
	{
		if (!$this->_checkPermission()) {
			return abort('404');
		}

		return $this->storeBase();
	}

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
     */
    public function edit($id)
	{
		$entity = $this->getRepository()->findById($id);

		if (empty($entity) || (!$this->_checkPermission() && !$entity->isOwner())) {
			return abort('404');
		}

		return view('backend.admin.edit', compact('entity'));
	}

    /**
     * @param AdminRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function update(AdminRequest $request, $id)
	{
		$entity = $this->getRepository()->findById($id);

		if (empty($entity) || (!$this->_checkPermission() && !$entity->isOwner())) {
			return abort('404');
		}

		$data = $this->_getFormData(false);

		// Filter data
		if ($entity->isOwner()) {
			$data['role_type'] = $entity->role_type;
		}

		if (empty($data['password'])) {
			unset($data['password']);
		} else {
		    $data['password'] = bcrypt($data['password']);
        }

		unset($data['confirm_password']);

		// Update
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

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|void
     */
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

    /**
     * @return mixed
     */
    protected function _checkPermission()
	{
		return backendGuard()->user()->isSuperAdmin();
	}
}
