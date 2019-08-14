<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Base\BaseController;
use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Input;
use App\Repositories\CategoryRepository;

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
		$products = $this->getRepository()->getListForFrontend(Input::all());
		return view('frontend.products.index', compact('products'));
	}

	public function sale() 
	{
		$products = $this->getRepository()->getListForFrontend(Input::all());
		return view('frontend.products.index', compact('products'));
	}
}