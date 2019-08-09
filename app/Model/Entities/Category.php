<?php
namespace App\Model\Entities;

use App\Model\Base\Base;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\Presenters\PCategory;

class Category extends Base 
{
	use SoftDeletes;
	use PCategory;

	protected $table = 'categories';
	protected $primaryKey = 'id';
	protected $fillable = ['category_parent', 'category_name', 'category_slug', 'ins_id', 'upd_id'];

	public function products() 
	{
		return $this->hasMany(Product::class, 'category_id', 'id');
	}

	public function subCategories() 
	{
		return $this->hasMany(Category::class, 'category_parent', 'id');
	}

	public function category() 
	{
		return $this->belongsTo(Category::class, 'category_parent', 'id');
	}
}