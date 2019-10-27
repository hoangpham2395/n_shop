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

	public function policyBuy()
    {
        return view('frontend.pages.policy_buy');
    }

    public function policySell()
    {
        return view('frontend.pages.policy_sell');
    }

    public function policySecurity()
    {
        return view('frontend.pages.policy_security');
    }

    public function useBuy()
    {
        return view('frontend.pages.use_buy');
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
