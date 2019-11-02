<?php
namespace App\Model\Entities;

use App\Model\Base\Base;
use App\Model\Presenters\PSettingImageSlide;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SettingImageSlide
 * @package App\Model\Entities
 */
class SettingImageSlide extends Base
{
    use PSettingImageSlide;
    use SoftDeletes;

    protected $table = 'setting_image_slide';
    protected $primaryKey = 'id';
    protected $fillable = ['image', 'sort', 'ins_id', 'upd_id'];
}
