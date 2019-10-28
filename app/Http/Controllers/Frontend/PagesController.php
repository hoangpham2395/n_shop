<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class PagesController
 * @package App\Http\Controllers\Frontend
 */
class PagesController extends Controller
{
	public function share()
	{
		return view('frontend.pages.share');
	}

	public function introduce()
	{
		return view('frontend.pages.introduce');
	}

	public function policyShip()
    {
        return view('frontend.pages.policy_ship');
    }

    public function policySell()
    {
        return view('frontend.pages.policy_sell');
    }

    public function policySecurity()
    {
        return view('frontend.pages.policy_security');
    }

    public function takeOrder()
    {
        return view('frontend.pages.take_order');
    }

    public function useExchangeSize()
    {
        return view('frontend.pages.use_exchange_size');
    }

    public function accountInfo()
    {
        return view('frontend.pages.account_info');
    }

    public function faq()
    {
        return view('frontend.pages.faq');
    }
}
