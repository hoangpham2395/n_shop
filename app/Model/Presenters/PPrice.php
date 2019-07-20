<?php
namespace App\Model\Presenters;

trait PPrice 
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
}