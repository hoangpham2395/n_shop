<?php
namespace App\Model\Entities;

use App\Model\Base\Base;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\Presenters\PCategory;

class OrderDetail extends Base
{
    protected $table = 'order_detail';
    protected $primaryKey = 'id';
    protected $fillable = ['order_id', 'quantity', 'total_unit_price', 'size',  'color'];
}
