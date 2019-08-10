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

	public function getListForBackend($params = []) 
	{
		// Pagination
		if (!empty($params['page'])) {
			unset($params['page']);
		}
		
		return $this->getModel()->where(function($q) use($params) {
			if (!empty($params['category_name'])) {
				$q = $q->where('category_name', 'LIKE', '%'. $params['category_name'] .'%');
			}

			if (!empty($params['category_type'])) {
				if ($params['category_type'] == getConfig('type_parent_category')) {
					$q = $q->where('category_parent', '=', null);
				} else {
					$q = $q->where('category_parent', '!=', null);
				}
			}
		})
		->orderBy('id', 'DESC')
		->paginate(getConfig('paginate.backend.default', 20));
	}

	public function getListParentCategories() 
	{
		return $this->getModel()->where('category_parent', '=', null)->pluck('category_name', 'id')->toArray();
	}

	public function findBySlug($categorySlug) 
	{
		return $this->getModel()->where('category_slug', '=', $categorySlug)->first();
	}
}