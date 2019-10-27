<?php
namespace App\Model\Entities;

use App\Model\Base\Base;
use App\Model\Presenters\POrder;

/**
 * Class Order
 * @package App\Model\Entities
 */
class Order extends Base
{
    use POrder;
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $fillable = ['status', 'user_id', 'user_name', 'user_tel', 'user_email', 'user_address', 'user_note', 'total_price', 'delivery_charges', 'payment_method'];

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
