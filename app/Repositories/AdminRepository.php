<?php
namespace App\Repositories;

use App\Repositories\Base\BaseRepository;
use App\Model\Entities\Admin;

class AdminRepository extends BaseRepository 
{
	public function model() 
	{
		return Admin::class;
	}

	public function getListForBackend($params = []) 
	{
		// Serve pagination
		if (isset($params['page'])) {
			unset($params['page']);
		}

		// Get data
		return $this->getModel()->where(function($q) use($params) {
			if (!empty($params['name'])) {
				$q = $q->where('name', 'LIKE', '%'. $params['name'] .'%');
			}
			if (!empty($params['email'])) {
				$q = $q->where('email', 'LIKE', '%'. $params['email'] .'%');
			}
			if (!empty($params['role_type'])) {
				$q = $q->where('role_type', $params['role_type']);
			}
		})
		->orderBy('id', 'desc')
		->paginate(getConfig('paginate.backend.admin', 10));
	}
}