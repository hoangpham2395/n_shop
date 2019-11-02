<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BaseController;
use App\Http\Requests\Backend\ImageSlideRequest;
use App\Repositories\SettingImageSlideRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class SettingController
 * @package App\Http\Controllers\Backend
 */
class SettingController extends BaseController
{
    public function __construct(SettingImageSlideRepository $settingImageSlideRepository)
    {
        $this->setRepository($settingImageSlideRepository);
        parent::__construct();
    }

    public function imageSlide()
    {
        $entities = $this->getRepository()->getList();
        return $this->render('backend.setting.image_slide.form', compact('entities'));
    }

    public function postImageSlide(ImageSlideRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = $this->_getFormData();
            $oldImageSlides = $this->getRepository()->getList();
            $oldIds = !empty($oldImageSlides) ? $oldImageSlides->pluck('id')->toArray() : [];
            $deleteIds = explode(',', array_get($data, 'delete_ids'));
            $deleteImages = [];
            $deleteIds = array_intersect($deleteIds, $oldIds);
            foreach ($deleteIds as $deleteId) {
                $oldImageSlide = $this->getRepository()->findById($deleteId);
                if (empty($oldImageSlide)) {
                    continue;
                }
                $deleteImages[$deleteId] = $oldImageSlide->image;
                $this->getRepository()->destroy($deleteId);
            }

            $data['imageSlide'] = array_get($data, 'imageSlide', []);
            // Add new image
            foreach ($data['imageSlide'] as $key => $imageSlide) {
                $imageName = $this->_uploadFile($request, 'imageSlide.'. $key . '.image');
                $dataImageSlide = [
                    'image' => !empty($imageName) ? $imageName : array_get($imageSlide, 'image'),
                    'sort' => (int) array_get($imageSlide, 'sort'),
                ];
                if (!empty($imageSlide['id'])) {
                    $dataImageSlide['upd_id'] = backendGuard()->user()->id;
                    $this->getRepository()->update($imageSlide['id'], $dataImageSlide);
                } else {
                    $dataImageSlide['ins_id'] = backendGuard()->user()->id;
                    $this->getRepository()->create($dataImageSlide);
                }
            }

            DB::commit();
            // Delete images
            foreach ($deleteImages as $deleteImage) {
                $this->_deleteFile($deleteImage);
            }
            return redirect()->back()->with(['success' => getMessage('update_success')]);
        } catch (\Exception $e) {
            logError($e);
            DB::rollBack();
        }
        return redirect()->back()->withErrors(['update_failed' => getMessage('update_failed')]);
    }
}
