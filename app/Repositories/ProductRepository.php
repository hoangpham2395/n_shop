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
}