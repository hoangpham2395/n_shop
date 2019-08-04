<?php
namespace App\Model\Presenters;

trait PProduct 
{
	public function getPrice() 
	{
		return formatMoney($this->price);
	}

	public function getCategory() 
	{
		return $this->category->category_name;
	}

	public function getPriceSale() 
	{
		return formatMoney($this->price_sale);
	}

	public function getUrlImage() 
	{
		return (!$this->image || !file_exists(public_path($this->image))) ? getConfig('url_no_image') : asset($this->image);
	}
}