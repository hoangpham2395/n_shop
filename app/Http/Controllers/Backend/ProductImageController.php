<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BaseController;
use App\Repositories\ProductRepository;
use App\Repositories\ProductImageRepository;
use App\Http\Requests\Backend\ProductRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;

class ProductImageController extends BaseController 
{
	protected $_productRepository;

	public function setProductRepository($productRepository) 
	{
		$this->_productRepository = $productRepository;
	}

	public function getProductRepository () 
	{
		return $this->_productRepository;
	}

	public function __construct
	(
		ProductImageRepository $productImageRepository,
		ProductRepository $productRepository
	) 
	{
		$this->setRepository($productImageRepository);
		$this->setProductRepository($productRepository);
		parent::__construct();
	}

	public function uploadImage($id) 
	{
		$product = $this->getProductRepository()->findById($id);
		if (empty($product)) {
			return abort('404');
		}

		$entities = $product->productImages;
		return view('backend.product_image.form', compact('product', 'entities'));
	}

	public function postUploadImage() 
	{

	}
}