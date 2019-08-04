<?php
namespace App\Model\Presenters;

trait PProductImage 
{
	public function getUrlImage() 
	{
		return (!$this->image || !file_exists(public_path($this->image))) ? getConfig('url_no_image') : asset($this->image);
	}

	public function getProductName () 
	{
		return !empty($this->product) ? $this->product->name : '';
	}
}