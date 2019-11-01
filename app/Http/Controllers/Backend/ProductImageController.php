<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BaseController;
use App\Repositories\ProductRepository;
use App\Repositories\ProductImageRepository;
use App\Http\Requests\Backend\ProductImageRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;

/**
 * Class ProductImageController
 * @package App\Http\Controllers\Backend
 */
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

        DB::beginTransaction();
        try {
            $data = $this->_getFormData();
            $oldProductImages = $entity->productImages;
            $oldIds = !empty($oldProductImages) ? $oldProductImages->pluck('id')->toArray() : [];
            $deleteIds = explode(',', array_get($data, 'delete_ids'));

            $deleteIds = array_intersect($deleteIds, $oldIds);
            $deleteImages = [];
            foreach ($deleteIds as $deleteId) {
                $oldProductImage = $this->getRepository()->findById($deleteId);
                if (empty($oldProductImage)) {
                    continue;
                }
                $deleteImages[$deleteId] = $oldProductImage->image;
                $this->getRepository()->destroy($deleteId);
            }

			$data['productImages'] = array_get($data, 'productImages', []);

			// Add new image
			foreach ($data['productImages'] as $key => $productImage) {
				$imageName = $this->_uploadFile($request, 'productImages.'. $key . '.image');
				$dataProductImage = [
					'product_id' => $id,
					'image' => !empty($imageName) ? $imageName : array_get($productImage, 'image'),
                ];
				if (!empty($productImage['id'])) {
                    $dataProductImage['upd_id'] = backendGuard()->check() ? backendGuard()->user()->id : getConstant('ADMIN_ID_DEFAULT');
                    $this->getRepository()->update($productImage['id'], $dataProductImage);
                } else {
                    $dataProductImage['ins_id'] = backendGuard()->check() ? backendGuard()->user()->id : getConstant('ADMIN_ID_DEFAULT');
                    $this->getRepository()->create($dataProductImage);
                }
			}

			DB::commit();
			// Delete images
            foreach ($deleteImages as $deleteImage) {
                $this->_deleteFile($deleteImage);
            }

			return redirect()->route('backend.products.show', $id)->with(['success' => getMessage('create_success')]);
		} catch (\Exception $e) {
			logError($e);
			DB::rollBack();
		}
		return redirect()->route('backend.products.show', $id)->withErrors(new MessageBag(['update_failed' => getMessage('update_failed')]));
	}
}
