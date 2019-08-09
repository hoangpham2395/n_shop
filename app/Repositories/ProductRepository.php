<?php
namespace App\Repositories;

use App\Repositories\Base\BaseRepository;
use App\Model\Entities\Product;

class ProductRepository extends BaseRepository 
{
	public function model() 
	{
		return Product::class;
	}

	public function getListForBackend($params = []) 
	{
		return $this->getModel()->where(function($q) use($params) {
			if (!empty($params['category_id'])) {
				$q = $q->where('category_id', $params['category_id']);
			}
			unset($params['category_id']);

			if (!empty($params['min_price'])) {
				$q = $q->where('price', '>=', $params['min_price']);
			}
			unset($params['min_price']);

			if (!empty($params['max_price'])) {
				$q = $q->where('price', '<=', $params['max_price']);
			}
			unset($params['max_price']);

			foreach ($params as $field => $value) {
				$q = $q->where($field, 'LIKE', '%'.$value.'%');
			}
		})
		->orderBy('id', 'DESC')
		->paginate(getConfig('paginate.backend.default', 20));
	}

	public function getListForFrontend($params = []) 
	{
		return $this->getModel()
		// ->where(function($q) use($params) {
		// 	if (!empty($params['category_id'])) {
		// 		$q = $q->where('category_id', $params['category_id']);
		// 	}
		// 	unset($params['category_id']);

		// 	if (!empty($params['min_price'])) {
		// 		$q = $q->where('price', '>=', $params['min_price']);
		// 	}
		// 	unset($params['min_price']);

		// 	if (!empty($params['max_price'])) {
		// 		$q = $q->where('price', '<=', $params['max_price']);
		// 	}
		// 	unset($params['max_price']);

		// 	foreach ($params as $field => $value) {
		// 		$q = $q->where($field, 'LIKE', '%'.$value.'%');
		// 	}
		// })
		->orderBy('id', 'DESC')
		->paginate(getConfig('paginate.frontend.default', 12));
	}

	public function getListForHome() 
	{
		return $this->getModel()->orderBy('id', 'DESC')->limit(8)->get();
	}

	public function findBySlug($productSlug) 
	{
		return $this->getModel()->where('product_slug', '=', $productSlug)->first();
	}

	public function getListForDetail($id, $categoryId)
	{
		return $this->getModel()
			->where('category_id', '=', $categoryId)
			->where('id', '!=', $id)
			->orderBy('id', 'DESC')
			->limit(8)->get();
	}
}