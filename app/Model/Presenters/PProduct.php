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
}