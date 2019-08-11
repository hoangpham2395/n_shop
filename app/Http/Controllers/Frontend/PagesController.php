<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class PagesController extends Controller 
{
	public function contact() 
	{
		return view('frontend.pages.contact');
	}

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