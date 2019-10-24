<?php
namespace App\Model\Presenters;

use Carbon\Carbon;

/**
 * Trait PProduct
 * @package App\Model\Presenters
 */
trait PProduct
{
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

	public function isNew()
	{
		return $this->is_new == getConstant('PRODUCT_IS_NEW', 1);
	}

	public function getTextIsNew()
	{
		$config = $this->isNew() ? 'yes' : 'no';
		$color = $this->isNew() ? '#00a65a' : '#333';
		return '<span style="color: ' . $color . ';">' . getConfig($config) . '</span>';
	}

    public function isSelling()
    {
        return $this->is_selling == getConstant('PRODUCT_IS_SELLING', 1);
    }

    public function getTextIsSelling()
    {
        $config = $this->isSelling() ? 'yes' : 'no';
        $color = $this->isSelling() ? '#00a65a' : '#333';
        return '<span style="color: ' . $color . ';">' . getConfig($config) . '</span>';
    }

	public function isSale()
	{
		return !empty($this->price_sale);
	}

	public function getPrice()
	{
		return formatMoney($this->price);
	}

	public function getFinalPrice()
	{
		$price = $this->isSale() ? $this->price_sale : $this->price;
		return formatMoney($price);
	}

	public function getPriceSale()
	{
		return !empty($this->price_sale) ? formatMoney($this->price_sale) : '';
	}

	public function getTextPriceSale()
	{
		return '<span class="red">' . $this->getPriceSale() . '</span>';
	}

	public function getClassIsNewOrSale()
	{
		$class = '';
		if ($this->isNew()) {
			$class .= ' is-new';
		}

		if ($this->isSale()) {
			$class .= ' is-sale';
		}

		return $class;
	}

	public function getClassNewOrSaleForFrontend()
	{
		$class = '';
		if ($this->isNew()) {
			$class .= ' block2-labelnew';
		}

		if ($this->isSale()) {
			$class .= ' block2-labelsale';
		}

		return $class;
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

	// Old code
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
		    if (!empty($option->size)) {
                $sizes[$option->size][$option->id] = [
                    'id' => $option->id,
                    'color' => $option->color,
                    'count' => $option->count,
                ];
            }

		    if ($option->color) {
                $colors[$option->color][$option->id] = [
                    'id' => $option->id,
                    'size' => $option->size,
                    'count' => $option->count,
                ];
            }
		}

		return [
			'size' => $sizes,
			'color' => $colors,
		];
	}
}
