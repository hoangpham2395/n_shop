<?php
namespace App\Repositories;

use App\Repositories\Base\BaseRepository;
use App\Model\Entities\Category;

class CategoryRepository extends BaseRepository 
{
	public function model() 
	{
		return Category::class;
	}
}