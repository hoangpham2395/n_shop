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
		if (!empty($params['page'])) {
			unset($params['page']);
		}

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

	public function getListForHome() 
	{
		return $this->getModel()->orderBy('id', 'DESC')->limit(8)->get();
	}

	public function getListNewForHome() 
	{
		return $this->getModel()
			->where('is_new', '=', getConstant('PRODUCT_IS_NEW', 1))
			->orderBy('id', 'DESC')->limit(8)->get();
	}

	public function getListSaleForHome() 
	{
		return $this->getModel()
		->where('price_sale', '!=', null)
		->orderBy('id', 'DESC')->limit(8)->get();
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

	public function queryGetList($params = []) {
		if (!empty($params['page'])) {
			unset($params['page']);
		}

		$sort = array_get($params, 'sort', 0);
		$sortField = 'id';
		$sortType = 'DESC';

		switch ($sort) {
			case 1:
				$sortField = 'product_name'; $sortType = 'ASC';
				break;
			case 2:
				$sortField = 'product_name'; $sortType = 'DESC';
				break;
			case 3:
				$sortField = 'price'; $sortType = 'ASC';
				break;
			case 4:
				$sortField = 'price'; $sortType = 'DESC';
				break;
			
			default:
				$sortField = 'id'; $sortType = 'DESC';
				break;
		}
		
		return $this->getModel()
		->where(function($q) use($params) {
			if (!empty($params['product_code'])) {
				$q = $q->where('product_code', 'LIKE', '%'. $params['product_code'] .'%');
			}

			if (!empty($params['product_name'])) {
				$q = $q->where('product_name', 'LIKE', '%'. $params['product_name'] .'%');
			}

			if (!empty($params['min_price'])) {
				$q = $q->where('price', '>=', $params['min_price']);
			}

			if (!empty($params['max_price'])) {
				$q = $q->where('price', '<=', $params['max_price']);
			}
			return $q;
		})
		->orderBy($sortField, $sortType);
	}

	public function getListForFrontend($params = []) 
	{
		return $this->queryGetList($params)->paginate(getConfig('paginate.frontend.default', 12));
	}

	public function getListByCategory($categoryIds = [], $params = []) 
	{
		return $this->queryGetList($params)
		->where(function ($q) use ($categoryIds) {
			if (!empty($categoryIds)) {
				$q = $q->whereIn('category_id', $categoryIds);
			}
		})
		->paginate(getConfig('paginate.frontend.default', 12));
	}

	public function getListNewForFrontend($params = []) 
	{
		return $this->queryGetList($params)
			->where('is_new', '=', getConstant('PRODUCT_IS_NEW', 1))
			->paginate(getConfig('paginate.frontend.default', 12));
	}

	public function getListSaleForFrontend($params = []) 
	{
		return $this->queryGetList($params)
			->where('price_sale', '!=', null)
			->paginate(getConfig('paginate.frontend.default', 12));
	}
}