<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Base\BaseController;
use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Input;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use Session;

class ProductsController extends BaseController
{
	protected $_categoryRepository;

	public function getCategoryRepository()
	{
		return $this->_categoryRepository;
	}

	public function setCategoryRepository($categoryRepository)
	{
		$this->_categoryRepository = $categoryRepository;
	}

	public function __construct(ProductRepository $productRepository, CategoryRepository $categoryRepository)
	{
		$this->setRepository($productRepository);
		$this->setCategoryRepository($categoryRepository);
		parent::__construct();
	}

	public function index()
	{
		$products = $this->getRepository()->getListForFrontend(Input::all());
		return view('frontend.products.index', compact('products'));
	}

	public function category($categorySlug)
	{
		$category = $this->getCategoryRepository()->findBySlug($categorySlug);
		if (empty($category)) {
			abort('404');
		}
		$categoryName = $category->category_name;
		$subCategories = $category->subCategories;
		$categoryIds = [$category->id];

		if (!empty($subCategories)) {
			foreach ($subCategories as $subCategories) {
				$categoryIds[] = $subCategories->id;
			}
		}

		$products = $this->getRepository()->getListByCategory($categoryIds, Input::all());

		return view('frontend.products.category', compact('products', 'categoryName'));
	}

	public function detail($productSlug)
	{
		$product = $this->getRepository()->findBySlug($productSlug);
		if (empty($product)) {
			abort('404');
		}

		$otherProducts = $this->getRepository()->getListForDetail($product->id, $product->category_id);

		return view('frontend.products.detail', compact('product', 'otherProducts'));
	}

	public function new()
	{
		$products = $this->getRepository()->getListNewForFrontend(Input::all());
		return view('frontend.products.new', compact('products'));
	}

	public function sale()
	{
		$products = $this->getRepository()->getListSaleForFrontend(Input::all());
		return view('frontend.products.sale', compact('products'));
	}

	public function cart()
	{
		return view('frontend.products.cart');
	}

	public function addToCart(Request $request)
	{
		$data = $request->all();
		$id = array_get($data, 'id');
		$quantity = (int) array_get($data, 'quantity', 1);

		$product = $this->getRepository()->findById($id);
		if (empty($product)) {
			return response()->json([
				'status' => false,
				'message' => getMessage('product_not_exist'),
			]);
		}

		$productsCart = Session::has('products_cart') ? Session::get('products_cart') : [];
		$productsCart[$product->id] = $product->toArray();
		$productsCart[$product->id]['quantity'] = $quantity;
		$productsCart[$product->id]['size'] = array_get($data, 'size');
		$productsCart[$product->id]['color'] = array_get($data, 'color');
		Session::put('products_cart', $productsCart);

		return response()->json([
			'status' => true,
			'message' => 'Success',
			'data' => $product->toArray(),
			'html' => view('layouts.frontend.header_cart')->render(),
			'count' => count($productsCart),
		]);
	}

	public function updateCart(Request $request)
	{
		$data = $request->all();
		$products = array_get($data, 'products', []);
		if (empty($products)) {
			return response()->status([
				'status' => false,
				'message' => getMessage('update_cart_failed'),
			]);
		}

		foreach ($products as $item) {
			$id = array_get($item, 'id');
			$quantity = (int) array_get($item, 'quantity');
			$product = $this->getRepository()->findById($id);
			if (empty($product)) {
				return response()->json([
					'status' => false,
					'message' => getMessage('product_not_exist'),
				]);
			}

			$productsCart = Session::has('products_cart') ? Session::get('products_cart') : [];
			$productsCart[$product->id] = $product->toArray();
			$productsCart[$product->id]['quantity'] = $quantity;
			Session::put('products_cart', $productsCart);
		}

		return response()->json([
			'status' => true,
			'message' => 'Success',
			'data' => $products,
			'html' => view('layouts.frontend.header_cart')->render(),
			'count' => count($productsCart),
		]);
	}

	public function removeItemCart(Request $request) {
		$data = $request->all();
		$id = array_get($data, 'id');

		$product = $this->getRepository()->findById($id);
		if (empty($product)) {
			return response()->json([
				'status' => false,
				'message' => getMessage('product_not_exist'),
			]);
		}

		$productsCart = Session::has('products_cart') ? Session::get('products_cart') : [];
		if (!empty($productsCart[$product->id])) {
			unset($productsCart[$product->id]);
		}
		Session::put('products_cart', $productsCart);

		return response()->json([
			'status' => true,
			'message' => 'Success',
			'data' => $product->toArray(),
			'html' => view('layouts.frontend.header_cart')->render(),
			'count' => count($productsCart),
		]);
	}
}
