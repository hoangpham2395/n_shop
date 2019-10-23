@extends('layouts.frontend.layouts.main')
@section('content')
<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
	<a href="{{route('frontend.home.index')}}" class="s-text16">
		{{transa('home')}}
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<span class="s-text17">{{transa('products.cart')}}</span>
</div>

@php
$moneyUnit = getConfig('money_unit');
$productsCart = Session::has('products_cart') ? Session::get('products_cart') : [];
$totalPrice = 0;
@endphp

<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
	<div class="container">
		<h2 class="m-text20 p-b-24">{{transa('my_cart')}}</h2>

		@if (!empty($productsCart))
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table id="table_shopping_cart" class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1">{{transm('order_detail.product_id')}}</th>
							<th class="column-2"></th>
							<th class="column-3">{{transm('products.price')}}</th>
							<th class="column-4">{{transm('order_detail.quantity')}}</th>
							<th class="column-5">{{transm('order_detail.total_price_unit')}}</th>
							<th></th>
						</tr>

						@foreach($productsCart as $productCart)
							@php
								$id = array_get($productCart, 'id');
								$price = (int) array_get($productCart, 'price');
								$quantity = (int) array_get($productCart, 'quantity', 1);
								$totalPrice +=  $price * $quantity;
							@endphp
							<tr class="table-row" id="product_item_cart_{{$id}}" data-item="{{$id}}">
								<td class="column-1">
									<a href="{{route('frontend.products.detail', 'cropptop-tre-vai')}}">
										<div class="cart-img-product b-rad-4 o-f-hidden">
											<img src="{{array_get($productCart, 'image')}}" alt="IMG-PRODUCT">
										</div>
									</a>
								</td>
								<td class="column-2">
									<a href="{{route('frontend.products.detail', array_get($productCart, 'product_slug'))}}">{{array_get($productCart, 'product_name')}}</a>
								</td>
								<td class="column-3 red">{{ formatMoney($price).$moneyUnit }}</td>
								<td class="column-4">
									<div class="flex-w bo5 of-hidden w-size17">
										<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
											<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
										</button>

										<input id="quantity_{{$id}}" class="size8 m-text18 t-center num-product" type="number" name="quantity" value="{{$quantity}}" data-price-unit="{{$price}}">

										<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
											<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
										</button>
									</div>
								</td>
								<td class="column-5 red">
									<span class="product-price">{{ formatMoney($price * $quantity) }}</span>{{$moneyUnit}}
								</td>
								<td class="p-r-5 td-cart-remove-item"><a href="/remove-item" class="cart-remove-item">x</a></td>
							</tr>
						@endforeach
					</table>
				</div>
			</div>

			<div id="cart_button1" class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<div class="size11 m-r-10 s-text1">
						<p class="sizefull" type="text" name="coupon-code" placeholder="Coupon Code">
							{{transa('total_price')}}: &nbsp; <strong class="red"><span id="cart_total_price">{{formatMoney($totalPrice)}}</span>{{ $moneyUnit }}</strong>
						</p>
					</div>
				</div>

				<div class="size12 m-t-10 m-b-10 right">
					<button type="button" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" onclick="updateCart(this);">{{transa('update_cart')}}</button>
				</div>
			</div>

			<div id="cart_button2" class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm" style="justify-content: flex-end;">
				<div class="size10 m-t-10 m-b-10 {{isMobile() ? '' : 'm-r-10'}}">
					<a href="{{route('frontend.products.index')}}" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">{{transa('continue_view')}}</a>
				</div>

				<div class="size10 m-t-10 m-b-10">
					<a href="{{route('frontend.orders.payment')}}" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">{{transa('payment')}}</a>
				</div>
			</div>
			{{ csrf_field() }}
		@else
			{{getMessage('cart_not_product')}}
			<div class="m-t-30 m-b-60">
				<!-- Button -->
				<a href="{{route('frontend.products.index')}}" class="flex-c-m bg7 bo-rad-15 hov1 s-text14 trans-0-4 p-t-10 p-b-10 p-r-25 p-l-25" style="width: 250px;">
					{{transa('return_store')}}
				</a>
			</div>
		@endif
		<div id="cart_no_product" style="display: none;">
			{{getMessage('cart_not_product')}}
			<div class="m-t-30 m-b-60">
				<!-- Button -->
				<a href="{{route('frontend.products.index')}}" class="flex-c-m bg7 bo-rad-15 hov1 s-text14 trans-0-4 p-t-10 p-b-10 p-r-25 p-l-25" style="width: 250px;">
					{{transa('return_store')}}
				</a>
			</div>
		</div>
	</div>
</section>
@endsection

@push('scripts')
<script>
	$('table.table-shopping-cart').find('tr.table-row').each(function() {
	    // Remove item
		$(this).find('a.cart-remove-item').on('click', function(e) {
			e.preventDefault();
			var product = $(this).closest('tr.table-row');
			// Hidden button remove item
			$(product).find('.td-cart-remove-item').html('');

			var productId = $(product).attr('data-item');
			var _token = $('section.cart').find('input[name="_token"]').val();
			var productName = $(product).find('.column-2 a').html();

			$.ajax({
				url: "{{route('frontend.products.removeItemCart')}}",
				method: "POST",
				data: {
					id: productId,
					_token: _token
				}
			}).done(function(response) {
				// Failed
				if (!response.status) {
					return swal(response.message, "", "error");
				}

				// Get data
				var data = response.data;
				var html = response.html;
				var count = response.count;

				// Header cart
				$('.header-wrapicon2 span.header-icons-noti').html(count);
				$('#header_cart').html('');
				$('#header_cart').append(html);

				// Success
				$('#cart_total_price').html($('#header_cart_total_price').html());
				swal(productName, "đã được xóa khỏi giỏ!", "success");
				$('#product_item_cart_' + productId).html('');

				// Cart doesn't have product
				if (count < 1) {
					var urlProductIndex = "{{route('frontend.products.index')}}";
					$('#table_shopping_cart').css('display', 'none');
					$('#cart_button1').css('display', 'none');
					$('#cart_button2').css('display', 'none');
					$('#cart_no_product').css('display', 'block');
				}
			}).fail(function() {
				swal("{{getMessage('system_error')}}", "", "error");
			});
		});

		// Validate count
		$(this).find('input.num-product').on('change', function (e) {
            return validateCount(this);
        });
	});
</script>
<script type="text/javascript">
	function updateCart(e) {
		var products = [];
		$('table.table-shopping-cart').find('tr.table-row').each(function() {
			var id = $(this).attr('data-item');
			var quantity = $(this).find('#quantity_' + id).val();
			products.push({
				id: id,
				quantity: quantity,
			});
		});
		var _token = $('section.cart').find('input[name="_token"]').val();
		$.ajax({
			url: "{{route('frontend.products.updateCart')}}",
				method: "POST",
				data: {
					products: products,
					_token: _token
				}
		}).done(function(response) {
			// Failed
			if (!response.status) {
				return swal(response.message, "", "error");
			}

			// Get data
			var data = response.data; console.log(data);
			var html = response.html;
			var count = response.count;

			// Header cart
			$('.header-wrapicon2 span.header-icons-noti').html(count);
			$('#header_cart').html('');
			$('#header_cart').append(html);

			// Reload prices
			$('table.table-shopping-cart').find('tr.table-row').each(function() {
				var id = $(this).attr('data-item');
				var quantity = parseInt($(this).find('#quantity_' + id).val());
				var priceUnit = parseInt($(this).find('#quantity_' + id).attr('data-price-unit'));
				$(this).find('span.product-price').html(formatMoney(quantity * priceUnit));
			});

			// Dialog success
			$('#cart_total_price').html($('#header_cart_total_price').html());
			swal("{{getMessage('update_cart_success')}}", "", "success");
		}).fail(function() {
			swal("{{getMessage('system_error')}}", "", "error");
		});
	}
</script>
@endpush
