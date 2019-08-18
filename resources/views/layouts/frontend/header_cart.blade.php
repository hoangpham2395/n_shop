

<ul class="header-cart-wrapitem">
	<li class="header-cart-item">
		<div class="header-cart-item-img">
			<img src="http://dev.brownstore.vn/media/products/2019/08/11/34_croptop_tre_vai.jpg" alt="IMG">
		</div>

		<div class="header-cart-item-txt">
			<a href="#" class="header-cart-item-name">
				Cropptop trễ vai
			</a>

			<span class="header-cart-item-info">
				1 x 145.000{{getConfig('money_unit')}}
			</span>
		</div>
	</li>
</ul>

<div class="header-cart-total">
	Tổng: 145.000{{getConfig('money_unit')}}
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