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

	public function create() 
	{
		$parentCategories = $this->getRepository()->getListParentCategories();
		return view('backend.categories.create', compact('parentCategories'));
	}

	public function store(CategoryRequest $request) 
	{
		return $this->storeBase();
	}

	public function edit($id) 
	{
		$entity = $this->getRepository()->findById($id);

		if (empty($entity)) {
			return abort('404');
		}

		$parentCategories = $this->getRepository()->getListParentCategories();

		return view('backend.'. $this->getAlias() .'.edit', compact('entity', 'parentCategories'));
	}

	public function update(CategoryRequest $request, $id) 
	{
		return $this->updateBase($id);
	}
}