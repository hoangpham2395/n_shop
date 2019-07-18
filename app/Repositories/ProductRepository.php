<?php
namespace App\Repositories;

use App\Repositories\Base\BaseRepository;
use App\Model\Entities\Product;

class ProductRepository extends BaseRepository 
{
	public function model() 
	{
		return Product::class;
	}
}