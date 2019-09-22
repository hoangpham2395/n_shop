<?php
namespace App\Model\Entities;

use App\Model\Base\Base;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\Presenters\PCategory;

class Order extends Base
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $fillable = ['status', 'user_name', 'user_tel', 'user_email', 'user_address', 'user_note', 'total_price'];
}
