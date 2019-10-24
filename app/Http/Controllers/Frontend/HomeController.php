<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Base\BaseController;
use App\Repositories\ProductRepository;

/**
 * Class HomeController
 * @package App\Http\Controllers\Frontend
 */
class HomeController extends BaseController
{
	public function __construct(ProductRepository $productRepository)
	{
		$this->setRepository($productRepository);
		parent::__construct();
	}

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
	{
		$products = $this->getRepository()->getListIsSelling();
		$newProducts = $this->getRepository()->getListNewForHome();
		$saleProducts = $this->getRepository()->getListSaleForHome();
		return view('frontend.home.index', compact('products', 'newProducts', 'saleProducts'));
	}
}
