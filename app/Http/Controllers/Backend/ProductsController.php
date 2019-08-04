<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BaseController;
use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductOptionRepository;
use App\Http\Requests\Backend\ProductRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;

class ProductsController extends BaseController 
{
	protected $_categoryRepository;
	protected $_productOptionRepository;

	public function setCategoryRepository($categoryRepository) 
	{
		$this->_categoryRepository = $categoryRepository;
	}

	public function getCategoryRepository() 
	{
		return $this->_categoryRepository;
	}

	public function setProductOptionRepository($productOptionRepository) 
	{
		$this->_productOptionRepository = $productOptionRepository;
	}

	public function getProductOptionRepository() 
	{
		return $this->_productOptionRepository;
	}

	public function __construct(
		ProductRepository $productRepository,
		CategoryRepository $categoryRepository,
		ProductOptionRepository $productOptionRepository
	) {
		$this->setRepository($productRepository);
		$this->setCategoryRepository($categoryRepository);
		$this->setProductOptionRepository($productOptionRepository);
		parent::__construct();
	}

	public function create() 
	{
		$categories = $this->getCategoryRepository()->getListForDropDown('category_name');
		return view('backend.'. $this->getAlias() .'.create', compact('categories'));
	}

	public function store(ProductRequest $request) 
	{
		$data = $this->_getFormData();
		$nextId = $this->getNextInsertId();

		$productOptions = array_get($data, 'product_option', []);
		unset($data['product_opion']);

		DB::beginTransaction();

		try {
			// Update image, return file name
			$data['image'] = $this->_uploadFile($request, 'image');
			$this->getRepository()->create($data);

			// Add product_option
			foreach ($productOptions as $productOpion) {
				$productOpion['product_id'] = $nextId;
				$this->getProductOptionRepository()->create($productOpion);
			}

			DB::commit();
			return redirect()->route('backend.'. $this->getAlias() .'.show', $nextId)->with(['success' => getMessage('create_success')]);
		} catch (\Exception $e) {
			dd($e);
			logError($e);
			DB::rollBack();
		}
		return redirect()->route('backend.'. $this->getAlias() .'.index')->withErrors(new MessageBag(['create_failed' => getMessage('create_failed')]));
	}

	public function edit($id) 
	{
		$entity = $this->getRepository()->findById($id);

		if (empty($entity)) {
			return abort('404');
		}

		$categories = $this->getCategoryRepository()->getListForDropDown('category_name');
		return view('backend.'. $this->getAlias() .'.edit', compact('entity', 'categories'));
	}

	public function update(ProductRequest $request, $id) 
	{
		$entity = $this->getRepository()->findById($id);

		if (empty($entity)) {
			return abort('404');
		}

		$data = $this->_getFormData(false);

		// Get data product option
		$newProductOptions = array_get($data, 'product_option', []);
		unset($data['product_option']);

		$oldProductOptions = $entity->productOptions;

		DB::beginTransaction();

		try {
			if (!empty($data['image'])) {
				// Delete old image
				$this->_deleteFile($entity->image);

				// Upload new image
				$data['image'] = $this->_uploadFile($request, 'image');
			}

			$this->getRepository()->update($id, $data);

			// Delete old product option
			foreach ($oldProductOptions as $oldProductOption) {
				$this->getProductOptionRepository()->destroy($oldProductOption->id);
			}

			// Add new product option
			foreach ($newProductOptions as $newProductOption) {
				$newProductOption['product_id'] = $id;
				$newProductOption['ins_id'] = backendGuard()->user()->id;
				$this->getProductOptionRepository()->create($newProductOption);
			}

			DB::commit();
			return redirect()->route('backend.'. $this->getAlias() .'.show', $id)->with(['success' => getMessage('update_success')]);
		} catch (\Exception $e) {
			dd($e);
			logError($e);
			DB::rollBack();
		}
		return redirect()->route('backend.'. $this->getAlias() .'.show', $id)->withErrors(new MessageBag(['update_failed' => getMessage('update_failed')]));
	}

	public function destroy($id) {
		$entity = $this->getRepository()->findById($id);

		if (empty($entity)) {
			return abort('404');
		}

		try {
			$this->getRepository()->destroy($id);

			// delete product option
			$oldProductOptions = $entity->productOptions;
			foreach ($oldProductOptions as $oldProductOption) {
				$this->getProductOptionRepository()->destroy($oldProductOption->id);
			}

			return redirect()->route('backend.'. $this->getAlias() .'.index')->with(['success' => getMessage('delete_success')]);
		} catch (\Exception $e) {
			logError($e);
		}
		return redirect()->route('backend.'. $this->getAlias() .'.index')->withErrors(new MessageBag(['delete_failed' => getMessage('delete_failed')]));
	}
}