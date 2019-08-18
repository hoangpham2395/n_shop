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
@endphp

<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
	<div class="container">
		<h2 class="m-text20 p-b-24">{{transa('my_cart')}}</h2>

		<!-- Cart item -->
		<div class="container-table-cart pos-relative">
			<div class="wrap-table-shopping-cart bgwhite">
				<table class="table-shopping-cart">
					<tr class="table-head">
						<th class="column-1">{{transm('order_detail.product_id')}}</th>
						<th class="column-2"></th>
						<th class="column-3">{{transm('products.price')}}</th>
						<th class="column-4">{{transm('order_detail.quantity')}}</th>
						<th class="column-5">{{transm('order_detail.total_price_unit')}}</th>
						<th></th>
					</tr>

					<tr class="table-row">
						<td class="column-1">
							<a href="{{route('frontend.products.detail', 'cropptop-tre-vai')}}">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="http://dev.brownstore.vn/media/products/2019/08/11/34_croptop_tre_vai.jpg" alt="IMG-PRODUCT">
								</div>
							</a>
						</td>
						<td class="column-2"><a href="{{route('frontend.products.detail', 'cropptop-tre-vai')}}">Cropptop trễ vai</a></td>
						<td class="column-3 red">145.000{{ $moneyUnit }}</td>
						<td class="column-4">
							<div class="flex-w bo5 of-hidden w-size17">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="1">

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>
						</td>
						<td class="column-5 red">145.000{{ $moneyUnit }}</td>
						<td class="p-r-5"><a href="/remove-item" class="cart-remove-item">x</a></td>
					</tr>

					<tr class="table-row">
						<td class="column-1">
							<a href="{{route('frontend.products.detail', 'ao-vit-donald-cropptop-dai-tay')}}">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="http://dev.brownstore.vn/media/products/2019/08/09/32_ao_vit_donald.jpg" alt="IMG-PRODUCT">
								</div>
							</a>
						</td>
						<td class="column-2"><a href="{{route('frontend.products.detail', 'ao-vit-donald-cropptop-dai-tay')}}">Áo Vịt Donald -Cropptop dài tay</a></td>
						<td class="column-3 red">315.000{{ $moneyUnit }}</td>
						<td class="column-4">
							<div class="flex-w bo5 of-hidden w-size17">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="2">

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>
						</td>
						<td class="column-5 red">630.000{{ $moneyUnit }}</td>
						<td class="p-r-5"><a href="/remove-item" class="cart-remove-item">x</a></td>
					</tr>

				</table>
			</div>
		</div>

		<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
			<div class="flex-w flex-m w-full-sm">
				<div class="size11 m-r-10 s-text1">
					<p class="sizefull" type="text" name="coupon-code" placeholder="Coupon Code">
						Tổng giá: &nbsp; <strong class="red"><span class="total_price">775.000</span>{{ $moneyUnit }}</strong>
					</p>
				</div>
			</div>
			
			<div class="size10 m-t-10 m-b-10 right">
				<a href="{{route('frontend.orders.payment')}}" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">{{transa('payment')}}</a>
			</div>

			<div class="size10 m-t-10 m-b-10 right">
				<a href="{{route('frontend.products.index')}}" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">{{transa('continue_view')}}</a>
			</div>
		</div>
	</div>
</section>
@endsection

@push('scripts')
<script>
	$('table.table-shopping-cart').find('tr.table-row').each(function() {
		$(this).find('a.cart-remove-item').on('click', function(e) {
			e.preventDefault();
			var product = $(this).closest('tr.table-row');
			console.log($(product).find('.column-2 a').html());
		});
	});
</script>
@endpush