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
}