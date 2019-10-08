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

	public function policy()
	{
		return view('frontend.pages.policy');
	}
}
