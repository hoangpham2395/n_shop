<?php
namespace App\Model\Entities;

use App\Model\Base\Base;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\Presenters\PProduct;

/**
 * Class Product
 * @package App\Model\Entities
 */
class Product extends Base
{
	use SoftDeletes;
	use PProduct;

	protected $table = 'products';
	protected $primaryKey = 'id';
	protected $fillable = ['category_id', 'product_code', 'product_name', 'product_slug', 'made_in', 'material', 'price', 'image','content', 'is_new', 'is_selling', 'sale', 'price_sale', 'ins_id', 'upd_id'];

	public function category()
	{
		return $this->belongsTo(Category::class, 'category_id', 'id');
	}

	public function productOptions()
	{
		return $this->hasMany(ProductOption::class, 'product_id', 'id');
	}

	public function productImages()
	{
		return $this->hasMany(ProductImage::class, 'product_id', 'id');
	}
}
