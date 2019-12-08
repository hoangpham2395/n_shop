<?php
namespace App\Repositories;

use App\Model\Entities\SettingImageSlide;
use App\Repositories\Base\BaseRepository;

/**
 * Class SettingImageSlideRepository
 * @package App\Repositories
 */
class SettingImageSlideRepository extends BaseRepository
{
    public function model()
    {
        return SettingImageSlide::class;
    }

    public function getListImageSlide()
    {
        return $this->getModel()->select(['image', 'title', 'detail', 'url'])->orderBy('sort', 'asc')->orderBy('id', 'desc')->get()->toArray();
    }
}
