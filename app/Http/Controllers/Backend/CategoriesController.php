<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BaseController;
use App\Repositories\CategoryRepository;
use App\Http\Requests\Backend\CategoryRequest;

class CategoriesController extends BaseController 
{
	public function __construct(CategoryRepository $categoryCategory) 
	{
		$this->setRepository($categoryCategory);
		parent::__construct();
	}

	public function store(CategoryRequest $request) 
	{
		return $this->storeBase();
	}

	public function update(CategoryRequest $request, $id) 
	{
		return $this->updateBase($id);
	}
}