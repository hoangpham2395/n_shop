<?php
namespace App\Model\Presenters;

trait PCategory 
{
	public function getCategoryParent() 
	{
		return !empty($this->category) ? $this->category->category_name : '';
	}
}