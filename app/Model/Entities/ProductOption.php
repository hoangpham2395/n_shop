<?php
namespace App\Model\Entities;

use App\Model\Base\Base;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductOption extends Base 
{
	use SoftDeletes;

	protected $table = 'product_option';
	protected $primaryKey = 'id';
	protected $fillable = ['product_id', 'size', 'color', 'count', 'ins_id', 'upd_id'];

	public function product() 
	{
		return $this->belongsTo(Product::class, 'product_id', 'id');
	}
}