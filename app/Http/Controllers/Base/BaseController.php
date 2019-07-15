<?php
namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;

class BaseController extends Controller 
{
	protected $_repository;

	public function getRepository() 
	{
		return $this->_repository;
	}

	public function setRepository($repository) 
	{
		$this->_repository = $repository;
	}

	public function __construct() 
	{

	}

	public function index() 
	{

	}
}