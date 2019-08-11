<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Base\BaseController;
use App\Repositories\ProductRepository;

class HomeController extends BaseController 
{
	public function __construct(ProductRepository $productRepository) 
	{
		$this->setRepository($productRepository);
		parent::__construct();
	}

	public function index() 
	{
		$products = $this->getRepository()->getListForHome();
		return view('frontend.home.index', compact('products'));
	}
}