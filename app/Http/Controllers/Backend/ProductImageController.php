<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BaseController;
use App\Repositories\ProductRepository;
use App\Repositories\ProductImageRepository;
use App\Http\Requests\Backend\ProductImageRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;

class ProductImageController extends BaseController 
{
	protected $_productRepository;

	public function setProductRepository($productRepository) 
	{
		$this->_productRepository = $productRepository;
	}

	public function getProductRepository () 
	{
		return $this->_productRepository;
	}

	public function __construct
	(
		ProductImageRepository $productImageRepository,
		ProductRepository $productRepository
	) 
	{
		$this->setRepository($productImageRepository);
		$this->setProductRepository($productRepository);
		parent::__construct();
	}

	public function uploadImage($id) 
	{
		$entity = $this->getProductRepository()->findById($id);
		if (empty($entity)) {
			return abort('404');
		}

		$entities = $entity->productImages;
		return view('backend.product_image.form', compact('entity', 'entities'));
	}

	public function postUploadImage(ProductImageRequest $request, $id) 
	{
		$entity = $this->getProductRepository()->findById($id);
		if (empty($entity)) {
			return abort('404');
		}		

		$oldProductImages = $entity->productImages;
		$data = $this->_getFormData();

		DB::beginTransaction();
		try {
			// Delete old image
			foreach ($oldProductImages as $oldProductImage) {
				$this->_deleteFile($oldProductImage->image);
				$this->getRepository()->destroy($oldProductImage->id);
			}

			$data['image'] = array_get($data, 'image', []);

			// Add new image
			foreach ($data['image'] as $key => $image) {
				$imageName = $this->_uploadFile($request, 'image.'. $key);
				$newProductImage = [
					'product_id' => $id,
					'image' => $imageName,
					'ins_id' => backendGuard()->check() ? backendGuard()->user()->id : getConstant('ADMIN_ID_DEFAULT'),
				];
				$this->getRepository()->create($newProductImage);
			}

			DB::commit();
			return redirect()->route('backend.products.show', $id)->with(['success' => getMessage('create_success')]);
		} catch (\Exception $e) {
			logError($e);
			DB::rollBack();
		}
		return redirect()->route('backend.products.show', $id)->withErrors(new MessageBag(['update_failed' => getMessage('update_failed')]));
	}
}