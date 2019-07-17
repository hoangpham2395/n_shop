<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BaseController;
use App\Repositories\AdminRepository;

class DashboardController extends BaseController 
{
	public function __construct(AdminRepository $adminRepository) 
	{
		$this->setRepository($adminRepository);
		parent::__construct();
	}

	public function index() 
	{
		return view('backend.dashboard.index');
	}
}