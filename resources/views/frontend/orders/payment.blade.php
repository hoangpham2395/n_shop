@extends('layouts.frontend.layouts.main')
@section('content')
<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
	<a href="{{route('frontend.home.index')}}" class="s-text16">
		{{transa('home')}}
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<span class="s-text17">{{transa('orders.detail')}}</span>
</div>

@php
$moneyUnit = getConfig('money_unit');
@endphp

<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
	<div class="container">
		<form class="leave-comment">
			<div class="row">
				<!-- Payment -->
				<div class="col-md-6 p-b-30">
					<h4 class="m-text26 p-b-36 p-t-15">Thông tin thanh toán</h4>

					<div class="bo4 of-hidden size15 m-b-20">
						{!! Form::text('user_name', null, ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('orders.user_name').' *', 'required']) !!}
					</div>

					<div class="bo4 of-hidden size15 m-b-20">
						{!! Form::text('user_tel', null, ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('orders.user_tel').' *', 'required']) !!}
					</div>

					<div class="bo4 of-hidden size15 m-b-20">
						{!! Form::text('user_email', null, ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('orders.user_email').' *', 'required']) !!}
					</div>

					<div class="bo4 of-hidden size15 m-b-20">
						{!! Form::text('user_address', null, ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('orders.user_address').' *', 'required']) !!}
					</div>

					<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="content" placeholder="{{transm('contact.content') .' *'}}" required></textarea>
				</div>

				<!-- Info -->
				<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-r-0 m-l-auto p-lr-15-sm">
					<h5 class="m-text20 p-b-24">{{transa('my_orders')}}</h5>

					<!-- Products -->
					<div class="flex-w flex-sb-m p-t-12 p-b-12 bo15">
						<span class="m-text22 w-size20 w-full-sm">{{transm('order_detail.product_id')}}</span>
						<span class="m-text22 w-size19 w-full-sm">{{transm('order_detail.total_price_unit')}}</span>
					</div>

					<ul class="order_list_product">
						<li class="flex-w flex-sb-m p-t-12 p-b-12">
							<span class="s-text8 w-size20 w-full-sm">Cropptop trễ vai</span>
							<span class="s-text18 w-size19 w-full-sm">145.000{{$moneyUnit}}</span>
						</li>

						<li class="flex-w flex-sb-m p-t-12 p-b-12">
							<span class="s-text8 w-size20 w-full-sm">Áo Vịt Donald -Cropptop dài tay x 2</span>
							<span class="s-text18 w-size19 w-full-sm">630.000{{$moneyUnit}}</span>
						</li>
					</ul>
						
					<!-- Ship -->
					<div class="bo15"></div>
					<div class="flex-w flex-sb bo15 p-t-15 p-b-15">
						<p class="s-text8">
							Bạn sẽ được miễn phí giao hàng khi đơn hàng của bạn trên 1 triệu VND và trong khu vực Thành phố Hồ Chí Minh.
						</p>
					</div>

					<!-- Order  -->
					<div class="flex-w flex-sb-m p-t-26 p-b-30">
						<span class="m-text22 w-size20 w-full-sm">Tổng giá</span>
						<span class="m-text22 w-size19 w-full-sm red">775.000{{$moneyUnit}}</span>
						<p class="s-text8 p-t-5">(Chưa tính phí giao hàng nếu có)</p>
					</div>

					<div class="size15 trans-0-4">
						<!-- Button -->
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">{{transa('order')}}</button>
					</div>
				</div>
			</div>
		</form>		
	</div>
</section>
@endsection