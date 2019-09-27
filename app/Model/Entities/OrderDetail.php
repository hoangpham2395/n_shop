<?php
namespace App\Model\Entities;

use App\Model\Base\Base;

/**
 * Class OrderDetail
 * @package App\Model\Entities
 */
class OrderDetail extends Base
{
    protected $table = 'order_detail';
    protected $primaryKey = 'id';
    protected $fillable = ['order_id', 'product_id', 'quantity', 'total_unit_price', 'size',  'color'];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
