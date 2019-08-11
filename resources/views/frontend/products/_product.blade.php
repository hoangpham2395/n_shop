<!-- Block2 -->
<div class="block2">
	<div class="block2-img wrap-pic-w of-hidden pos-relative {{$product->getClassNew()}}" style="width: 270px; height: 360px; justify-content: center; align-items: center; display: flex;">
		<img src="{{ $product->getUrlImage() }}" alt="IMG-PRODUCT">

		<div class="block2-overlay trans-0-4">
			<!-- Button yêu thích -->
			<!-- <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
				<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
				<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
			</a> -->

			<!-- Button thêm vào giỏ hàng -->
			<!-- <div class="block2-btn-addcart w-size1 trans-0-4">
				<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
					Add to Cart
				</button>
			</div> -->

			<!-- Dùng tạm khi chưa làm giỏ hàng -->
			<div class="btn-product-detail w-size1 trans-0-4">
				<a href="{{route('frontend.products.detail', $product->product_slug)}}" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
					Chi tiết
				</a>
			</div>
		</div>
	</div>

	<div class="block2-txt p-t-20">
		<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
			{{ $product->product_name }}
		</a>

		<span class="block2-price m-text6 p-r-5">
			{{ $product->getPrice() }} VND
		</span>
	</div>
</div>