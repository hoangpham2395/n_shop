<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Base\BaseController;
use App\Repositories\ProductRepository;
use App\Repositories\SettingImageSlideRepository;

/**
 * Class HomeController
 * @package App\Http\Controllers\Frontend
 */
class HomeController extends BaseController
{
    protected $_settingImageSlideRepository;

    public function getSettingImageSlideRepository()
    {
        return $this->_settingImageSlideRepository;
    }

    public function setSettingImageSlideRepository($settingImageSlideRepository)
    {
        $this->_settingImageSlideRepository = $settingImageSlideRepository;
    }

	public function __construct(ProductRepository $productRepository, SettingImageSlideRepository $settingImageSlideRepository)
	{
		$this->setRepository($productRepository);
		$this->setSettingImageSlideRepository($settingImageSlideRepository);
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
		$imageSlides = $this->getSettingImageSlideRepository()->getListImageSlide();
		return view('frontend.home.index', compact('products', 'newProducts', 'saleProducts', 'imageSlides'));
	}
}
