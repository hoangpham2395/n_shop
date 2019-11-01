<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Base\BaseController;

/**
 * Class PagesController
 * @package App\Http\Controllers\Frontend
 */
class PagesController extends BaseController
{
	public function share()
	{
        $this->setTitle(env('APP_NAME') . ' - ' . transa('blog'));
		return $this->render('frontend.pages.share');
	}

	public function introduce()
	{
        $this->setTitle(env('APP_NAME') . ' - ' . transa('introduce'));
		return $this->render('frontend.pages.introduce');
	}

	public function policyShip()
    {
        $this->setTitle(env('APP_NAME') . ' - ' . transa('policy_ship'));
        return $this->render('frontend.pages.policy_ship');
    }

    public function policySell()
    {
        return view('frontend.pages.policy_sell');
    }

    public function policySecurity()
    {
        $this->setTitle(env('APP_NAME') . ' - ' . transa('policy_security'));
        return $this->render('frontend.pages.policy_security');
    }

    public function takeOrder()
    {
        $this->setTitle(env('APP_NAME') . ' - ' . transa('take_order'));
        return $this->render('frontend.pages.take_order');
    }

    public function useExchangeSize()
    {
        $this->setTitle(env('APP_NAME') . ' - ' . transa('use_exchange_size'));
        return $this->render('frontend.pages.use_exchange_size');
    }

    public function accountInfo()
    {
        $this->setTitle(env('APP_NAME') . ' - ' . transa('account_info'));
        return $this->render('frontend.pages.account_info');
    }

    public function faq()
    {
        $this->setTitle(env('APP_NAME') . ' - ' . transa('faq'));
        return $this->render('frontend.pages.faq');
    }
}
