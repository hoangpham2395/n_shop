<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BaseController;
use App\Repositories\SettingImageSlideRepository;

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

    public function postImageSlide()
    {

    }
}
