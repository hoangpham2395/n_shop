@extends('layouts.frontend.layouts.main')
@section('content')
<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
	<a href="{{route('frontend.home.index')}}" class="s-text16">
		Trang chủ
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<a href="{{route('frontend.products.index')}}" class="s-text16">
		Tất cả sản phẩm
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<a href="{{route('frontend.products.category', $product->getCategorySlug())}}" class="s-text16">
		{{ $product->getCategoryName() }}
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<span class="s-text17">
		{{ $product->product_name }}
	</span>
</div>

<!-- Product Detail -->
<div class="container bgwhite p-t-35">
	<div class="flex-w flex-sb" id="product_detail" data-id="{{$product->id}}">
		<div class="w-size13 p-t-30 respon5">
			<div class="wrap-slick3 flex-sb flex-w">
                @if (!isMobile())
				    <div class="wrap-slick3-dots"></div>
                @endif
				<div class="slick3">
					@foreach ($product->getListImages() as $productImage)
						<div class="item-slick3" data-thumb="{{$productImage}}">
							<div class="wrap-pic-w">
								<img src="{{$productImage}}" alt="IMG-PRODUCT">
							</div>
						</div>
					@endforeach
				</div>
                @if (isMobile())
                    <div class="wrap-slick3-dots"></div>
                @endif
			</div>
		</div>

		<div class="w-size14 p-t-30 respon5">
			<h4 class="product-detail-name m-text16 p-b-13 flex-center-vertical">
				<strong class="padding-right">{{ $product->product_name }}</strong>
				<span class="{{ $product->getClassIsNewOrSale() }}"></span>
			</h4>

			@if ($product->isSale())
				<p class="m-text17">
					<span class="pd-newprice p-r-15">{{ $product->getPriceSale() . getConfig('money_unit') }}</span>
					<span class="pd-oldprice m-text15">{{ $product->getPrice() . getConfig('money_unit') }}</span>
				</p>
			@else
				<p class="m-text17">{{ $product->getPrice() . getConfig('money_unit') }}</p>
			@endif

			@include('layouts.frontend.facebook.fb_like_share')

			<div class="p-t-25 border-top m-t-30">
				<span class="s-text8 m-r-35">{{transm('products.product_code') .": ". $product->product_code}}</span>
				<span class="s-text8">{{transm('products.category_id') .': '. $product->getCategoryName()}}</span>
			</div>

			@if (!empty($product->material))
				<div class="p-t-25">
					<span class="s-text8 m-r-35">{{transm('products.material') .": ". $product->material}}</span>
				</div>
			@endif

			@if (!empty($product->made_in))
				<div class="p-t-25">
					<span class="s-text8 m-r-35">{{transm('products.made_in') .": ". $product->made_in}}</span>
				</div>
			@endif

			@php
				$options = $product->getOptions();
				$sizes = getArrayKeys(array_get($options, 'size', []));
				$colors = getArrayKeys(array_get($options, 'color', []));
			@endphp
			<!-- Order -->
			<div class="p-t-33 p-b-60">
				<div class="flex-m flex-w p-b-10">
					<div class="s-text15 w-size15 t-center">{{transm('product_option.size')}}</div>
					<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
						{!! Form::select('size', $sizes, null, ['class' => 'selection-size', 'placeholder' => 'Chọn size phù hợp']) !!}
					</div>
				</div>

				<div class="flex-m flex-w">
					<div class="s-text15 w-size15 t-center">{{transm('product_option.color')}}</div>
					<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
						{!! Form::select('color', $colors, null, ['class' => 'selection-color', 'placeholder' => 'Chọn màu phù hợp']) !!}
					</div>
				</div>

				<div class="flex-r-m flex-w p-t-10">
					<div class="w-size16 flex-m flex-w">
						<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
							<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
								<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
							</button>

							<input class="size8 m-text18 t-center num-product" type="number" name="quantity" value="1">

							<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
								<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
							</button>
						</div>

						<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" data-route="{{route('frontend.products.addCart')}}" onclick="addToCart(this)">{{transa('add_to_cart')}}</button>
						</div>
					</div>
				</div>
			</div>

			<div class="p-b-25"></div>

			<!-- Description -->
			<div class="wrap-dropdown-content border-top p-t-15 p-b-14 active-dropdown-content">
				<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
					{{transa('description')}}
					<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
					<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
				</h5>

				<div class="dropdown-content dis-none p-t-15 p-b-23">
					<p class="s-text8">{!! ebr($product->content) !!}</p>
				</div>
			</div>

			<!-- Sale -->
			@if ($product->isSale())
				<div class="wrap-dropdown-content border-top p-t-15 p-b-14">
				<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
					{{transa('sale')}}
					<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
					<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
				</h5>

				<div class="dropdown-content dis-none p-t-15 p-b-23">
					<p class="s-text8">{!! ebr($product->sale) !!}</p>
				</div>
			</div>
			@endif
		</div>
	</div>
	<input type="hidden" id="product_detail_token" value="{{ csrf_token() }}">

	<!-- Comments -->
	<div class="text-center p-t-15 p-b-15">
		@include('layouts.frontend.facebook.fb_comment')
	</div>
</div>

<!-- Relate Product -->
@if (count($otherProducts) > 0)
<section class="relateproduct bgwhite p-t-45 p-b-138">
	<div class="container">
		<div class="sec-title p-b-60">
			<h3 class="home-title-product m-text5 t-center">
				Sản phẩm khác
			</h3>
		</div>

		<!-- Slide2 -->
		<div class="wrap-slick2">
			<div class="slick2">
				@foreach($otherProducts as $otherProduct)
					<div class="item-slick2 p-l-15 p-r-15">
						@include('frontend.products._product', ['product' => $otherProduct])
					</div>
				@endforeach
			</div>
		</div>

	</div>
</section>
@endif

<!-- Container Selection -->
<div id="dropDownSelectSize"></div>
<div id="dropDownSelectColor"></div>
@endsection

@push('scripts')
<script type="text/javascript">
	$(".selection-size").select2({
		minimumResultsForSearch: 20,
		dropdownParent: $('#dropDownSelectSize')
	});

	$(".selection-color").select2({
		minimumResultsForSearch: 20,
		dropdownParent: $('#dropDownSelectColor')
	});
	$('input.num-product').on('change', function (e) {
        return validateCount(this);
    });
</script>
<script type="text/javascript">
	function addToCart(e) {
		var id = $('#product_detail').attr('data-id');
		var _token = $('#product_detail_token').val();
		var url = $(e).attr('data-route');

		$.ajax({
			url: url,
			method: 'POST',
			data: {
				id: id,
				size: $('#product_detail select.selection-size').val(),
				color: $('#product_detail select.selection-color').val(),
				quantity: $('#product_detail input[name=quantity]').val(),
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

			// Dialog success
			swal(data.product_name, "đã được thêm vào giỏ!", "success");
		}).fail(function() {
			swal("Đã xảy ra lỗi hệ thống!", "", "error");
		});
	}
</script>
@endpush
