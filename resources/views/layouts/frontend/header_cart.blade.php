@if (Session::has('products_cart') && count(Session::get('products_cart')) > 0)
	@php
		$products = Session::get('products_cart');
		$totalPrice = 0;
	@endphp

	<ul class="header-cart-wrapitem">
		@foreach($products as $product)
			@php
				$price = (int) array_get($product, 'price', 0);
				$totalPrice += $price;
			@endphp 
			<li class="header-cart-item">
				<a href="{{route('frontend.products.detail', array_get($product, 'product_slug'))}}">
					<div class="header-cart-item-img">
						<img src="{{array_get($product, 'image')}}" alt="IMG">
					</div>
				</a>

				<div class="header-cart-item-txt">
					<a href="{{route('frontend.products.detail', array_get($product, 'product_slug'))}}" class="header-cart-item-name">{{array_get($product, 'product_name')}}</a>

					<span class="header-cart-item-info">{{(int) array_get($product, 'quantity', 1). ' x ' .formatMoney($price).getConfig('money_unit')}}</span>
				</div>
			</li>
		@endforeach
	</ul>

	<div class="header-cart-total">
		{{transa('total')}}: <span id="header_cart_total_price">{{formatMoney($totalPrice)}}</span>{{getConfig('money_unit')}}
	</div>

	<div class="header-cart-buttons">
		<div class="header-cart-wrapbtn">
			<a href="{{route('frontend.products.cart')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">{{transa('see')}}</a>
		</div>

		<div class="header-cart-wrapbtn">
			<!-- Button -->
			<a href="{{route('frontend.orders.payment')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">{{transa('buy')}}</a>
		</div>
	</div>
@else
	<div class="text-center">
		<p>{{getMessage('cart_not_product')}}</p>
	</div>
@endif