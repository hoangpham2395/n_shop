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

	public function getListParentCategories() 
	{
		return $this->getModel()->where('category_parent', '=', null)->pluck('category_name', 'id')->toArray();
	}
}