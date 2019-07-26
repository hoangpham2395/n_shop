<?php
namespace App\Repositories;

use App\Repositories\Base\BaseRepository;
use App\Model\Entities\ProductImage;

class ProductImageRepository extends BaseRepository 
{
	public function model() 
	{
		return ProductImage::class;
	}
}