<?php
namespace App\Model\Entities;

use App\Model\Base\Base;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Base 
{
	use SoftDeletes;

	protected $table = 'products';
	protected $primaryKey = 'id';
	protected $fillable = ['category_id', 'product_code', 'product_name', 'product_slug', 'made_in', 'material', 'price', 'content', 'sale', 'price_sale', 'ins_id', 'upd_id'];
}