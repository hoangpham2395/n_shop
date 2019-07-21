<?php
namespace App\Repositories;

use App\Repositories\Base\BaseRepository;
use App\Model\Entities\ProductOption;

class ProductOptionRepository extends BaseRepository 
{
	public function model() 
	{
		return ProductOption::class;
	}
}