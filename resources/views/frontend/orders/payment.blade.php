@extends('layouts.frontend.layouts.main')
@section('content')
<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
	<a href="{{route('frontend.home.index')}}" class="s-text16">
		{{transa('home')}}
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<a href="{{route('frontend.products.cart')}}" class="s-text16">
		{{transa('cart')}}
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<span class="s-text17">{{transa('orders.detail')}}</span>
</div>

@php
$moneyUnit = getConfig('money_unit');
$totalPrice = 0;
@endphp

<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
	<div class="container">
		{!! Form::open(['route' => 'frontend.orders.postPayment', 'method' => 'POST']) !!}
			<div class="row">
				<!-- Payment -->
				<div class="col-md-6 p-b-30">
					<h4 class="m-text26 p-b-36 p-t-15">{{transa('payment_info')}}</h4>

                    <label class="s-text7 bold required">{{transm('orders.user_name')}}</label>
					<div class="bo4 of-hidden size15 m-b-20">
						{!! Form::text('user_name', frontendGuard()->check() ? frontendGuard()->user()->username : null, ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('orders.user_name').' *', 'required']) !!}
					</div>

                    <label class="s-text7 bold required">{{transm('orders.user_tel')}}</label>
					<div class="bo4 of-hidden size15 m-b-20">
						{!! Form::text('user_tel', frontendGuard()->check() ? frontendGuard()->user()->tel : null, ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('orders.user_tel'), 'required']) !!}
					</div>

                    <label class="s-text7 bold">{{transm('orders.user_email')}}</label>
					<div class="bo4 of-hidden size15 m-b-20">
						{!! Form::text('user_email', frontendGuard()->check() ? frontendGuard()->user()->email : null, ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('orders.user_email')]) !!}
					</div>

                    <label class="s-text7 bold required">{{transm('orders.user_address')}}</label>
					<div class="bo4 of-hidden size15 m-b-20">
						{!! Form::text('user_address', frontendGuard()->check() ? frontendGuard()->user()->address : null, ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('orders.user_address'), 'required']) !!}
					</div>

                    <label class="s-text7 bold required">{{transm('orders.user_note')}}</label>
					<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="user_note" placeholder="{{transm('orders.user_note')}}"></textarea>
				</div>

				<!-- Info -->
				<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-r-0 m-l-auto p-lr-15-sm">
					<h5 class="m-text20 p-b-24">{{transa('my_orders')}}</h5>

					<!-- Products -->
					<div class="flex-w flex-sb-m p-t-12 p-b-12 bo15">
						<span class="m-text22 w-size20 w-full-sm">{{transm('order_detail.product_id')}}</span>
						<span class="m-text22 w-size19 w-full-sm">{{transm('order_detail.total_price_unit')}}</span>
					</div>

					<ul id="order_list_product" class="order-list-product">
						@foreach ($productsCart as $productCart)
							@php
								$quantity = (int) array_get($productCart, 'quantity', 1);
								$price = (int) array_get($productCart, 'price');
								$totalPrice += $quantity * $price;
							@endphp
							<li class="flex-w flex-sb-m p-t-12 p-b-12">
								<span class="s-text8 w-size20 w-full-sm">{{array_get($productCart, 'product_name')}} {{$quantity > 1 ? 'x '.$quantity : ''}}</span>
								<span class="s-text18 w-size19 w-full-sm">{{formatMoney($price).$moneyUnit}}</span>
							</li>
						@endforeach
					</ul>

					<!-- Ship -->
					<div class="bo15"></div>
					<div class="flex-w flex-sb bo15 p-t-15 p-b-15">
						<p class="s-text8">
							{{getMessage('ship_policy')}}
						</p>
					</div>

					<!-- Order  -->
					<div class="flex-w flex-sb-m p-t-26 p-b-30">
						<span class="m-text22 w-size20 w-full-sm" style="width: 45%;">Tổng giá</span>
						<span class="m-text22 w-size19 w-full-sm red" style="width: 55%; text-align: right;">{{formatMoney($totalPrice).$moneyUnit}}</span>
						<p class="s-text8 p-t-5">({{getMessage('ship_note')}})</p>
					</div>

					<div class="size15 trans-0-4">
						<!-- Button -->
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">{{transa('order')}}</button>
					</div>
				</div>
			</div>
		{!! Form::close() !!}
	</div>
</section>
@endsection
