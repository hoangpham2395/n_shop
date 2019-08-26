<?php
namespace App\Model\Presenters;

use Carbon\Carbon;

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

	public function getCategoryName() 
	{
		return !empty($this->category) ? $this->category->category_name : '';
	}

	public function getCategorySlug() 
	{
		return !empty($this->category) ? $this->category->category_slug : '';
	}

	public function getPriceSale() 
	{
		return formatMoney($this->price_sale);
	}

	public function getUrlImage() 
	{
		return (!$this->image || !file_exists(public_path($this->image))) ? getConfig('url_no_image') : asset($this->image);
	}

	public function getListImages() 
	{
		$r = [$this->getUrlImage()];

		foreach ($this->productImages as $productImage) {
			$r[] = $productImage->image;
		}

		return $r;
	}

	public function getClassNew() 
	{
		$date = Carbon::now()->subDays(7); // 7 days ago
		return ($this->created_at->gt($date) || $this->updated_at->gt($date)) ? 'block2-labelnew' : '';
	}

	public function getProductOptions() 
	{
		$options = $this->productOptions;
		if (empty($options)) {
			return [];
		}

		$r = [];
		foreach ($options as $option) {
			$r[] = [
				'id' => $option->id,
				'size' => $option->size,
				'color' => $option->color,
				'count' => $option->count,
			];
		}

		return $r;
	}

	public function getOptions() 
	{
		$options = $this->productOptions;
		if (empty($options)) {
			return null;
		}

		$sizes = []; $colors = [];

		foreach($options as $option) {
			$sizes[$option->size][$option->id] = [
				'id' => $option->id,
				'color' => $option->color,
				'count' => $option->count,
			];
			$colors[$option->color][$option->id] = [
				'id' => $option->id,
				'size' => $option->size,
				'count' => $option->count,
			];
		}

		return [
			'size' => $sizes,
			'color' => $colors,
		];
	}
}