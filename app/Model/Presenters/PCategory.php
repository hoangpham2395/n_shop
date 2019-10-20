<?php
namespace App\Model\Presenters;

/**
 * Trait PCategory
 * @package App\Model\Presenters
 */
trait PCategory
{
	public function getCategoryParent()
	{
		return !empty($this->category) ? $this->category->category_name : '';
	}

	public function allowChange()
    {
        return !in_array($this->id, getConfig('categories_id_default', []));
    }
}
