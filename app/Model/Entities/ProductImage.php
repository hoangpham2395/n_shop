<?php
namespace App\Model\Entities;

use App\Model\Base\Base;
use App\Model\Presenters\PProductImage;

/**
 * Class ProductImage
 * @package App\Model\Entities
 */
class ProductImage extends Base
{
	use PProductImage;

	protected $table = 'product_image';
	protected $primaryKey = 'id';
	protected $fillable = ['product_id', 'image', 'ins_id', 'upd_id'];

	public function product()
	{
		return $this->belongsTo(Product::class, 'product_id', 'id');
	}
}
