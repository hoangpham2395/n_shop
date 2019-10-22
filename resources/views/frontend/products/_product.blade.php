<!-- Block2 -->
<div class="block2" data-item="{{$product->id}}" data-route="{{route('frontend.products.addCart')}}">
	<div class="block2-img wrap-pic-w of-hidden pos-relative flex-center {{$product->getClassNewOrSaleForFrontend()}}" style="width: {{isMobile() ? '100%' : '270px'}}; height: 360px;">
		<img src="{{ $product->getUrlImage() }}" alt="IMG-PRODUCT">

		<div class="block2-overlay trans-0-4">
			<!-- Button yêu thích -->
			<a href="{{route('frontend.products.detail', $product->product_slug)}}" class="block2-btn-addwishlist hov-pointer trans-0-4">
				<i class="fa fa-eye" aria-hidden="true"></i>
			</a>

			<!-- Button thêm vào giỏ hàng -->
			<div class="block2-btn-addcart w-size1 trans-0-4">
				<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="ProductsController.addCart(this);">
					{{transa('add_to_cart')}}
				</button>
			</div>
		</div>
	</div>

	<div class="block2-txt p-t-20">
		<a href="{{route('frontend.products.detail', $product->product_slug)}}" class="block2-name dis-block s-text3 p-b-5">
			<span class="block2-product-code bold">{{ $product->product_code}}</span> - <span class="block2-product-name bold">{{$product->product_name }}</span>
		</a>

		@if ($product->isSale())
			<span class="block2-oldprice m-text7 p-r-5">{{ $product->getPrice() . getConfig('money_unit') }}</span>
			<span class="block2-newprice m-text8 red bold">{{ $product->getPriceSale() . getConfig('money_unit') }}</span>
		@else
			<span class="block2-price m-text6 bold">{{ $product->getPrice() . getConfig('money_unit') }}</span>
		@endif
	</div>

	{{ csrf_field() }}
</div>
