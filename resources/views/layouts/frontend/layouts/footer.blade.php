<footer class="bg6 p-t-25 p-b-25 p-l-45 p-r-45">
	<div class="flex-w p-b-45">
		<!-- Logo -->
		<div class="p-t-30 p-l-15 p-r-15 respon3" style="width: {{isMobile() ? '100%' : '40%'}}">
			<h4 class="s-text12 p-b-30 text-center">
				<img src="{{asset('images/icons/logo.png')}}">
			</h4>
			<div>
				<p class="s-text7 w-size27">
					Cảm ơn bạn đã thăm trang web của chúng tôi! <br>
					Chúng tôi nhận đặt hàng US & UK & Euro, bao gồm buôn và lẻ. Chúng tôi cam kết mang lại chất lượng tốt và giá cả hợp lý cho người tiêu dùng. Thông tin liên hệ:
				</p>
				<ul class="p-t-5">
					<li class="p-b-9"><p class="s-text7 red"><i class="fa fa-phone"></i> &nbsp; <b>HOTLINE: {{getConfig('owner.phone')}}</b></p></li>
					<li class="p-b-9"><p class="s-text7"><i class="fa fa-envelope"></i> &nbsp; Email: {{getConfig('owner.email')}}</p></li>
					<li class="p-b-9"><a href="{{getConfig('owner.map')}}" target="blank" class="s-text7"><i class="fa fa-map-marker"></i> &nbsp; {{transa('address') . ': ' . getConfig('owner.address')}}</a></li>
				</ul>
			</div>
		</div>

		@if (isMobile())
		<div class="p-t-20 p-l-15 p-r-15 respon4" style="width: 100%">
			<h4 class="s-text12 p-b-15">{{transa('about_us')}}</h4>
			<div class="row">
				<div class="col-6">
					<ul style="width: 50%;">
						<li class="p-b-9"><a href="{{route('frontend.pages.introduce')}}" class="s-text7">{{transa('introduce')}}</a></li>
						<li class="p-b-9"><a href="{{route('frontend.pages.policy')}}" class="s-text7">{{transa('policy')}}</a></li>
					</ul>
				</div>
				<div class="col-6">
					<ul style="width: 50%;">
						<li class="p-b-9"><a href="{{route('frontend.pages.share')}}" class="s-text7">{{transa('blog')}}</a></li>
						<li class="p-b-9"><a href="{{route('frontend.pages.contact')}}" class="s-text7">{{transa('contact')}}</a></li>
					</ul>
				</div>
			</div>
		</div>
		@else 
		<!-- Categories -->
		<div class="p-t-30 p-l-15 p-r-15 respon4" style="width: 15%">
			<h4 class="s-text12 p-b-30">{{transa('category')}}</h4>
			<ul>
				<li class="p-b-9"><a href="{{route('frontend.products.index')}}" class="s-text7">{{ transa('all') }}</a></li>
				@foreach (getConfig('categories_default') as $slug => $category)
					<li class="p-b-9"><a href="{{route('frontend.products.category', $slug)}}" class="s-text7">{{ $category }}</a></li>
				@endforeach
			</ul>
		</div>

		<!-- Link -->
		<div class="p-t-30 p-l-15 p-r-15 respon4" style="width: 15%">
			<h4 class="s-text12 p-b-30">{{transa('link')}}</h4>
			<ul>
				<li class="p-b-9"><a href="{{route('frontend.pages.introduce')}}" class="s-text7">{{transa('introduce')}}</a></li>
				<li class="p-b-9"><a href="{{route('frontend.pages.policy')}}" class="s-text7">{{transa('policy')}}</a></li>
				<li class="p-b-9"><a href="{{route('frontend.pages.share')}}" class="s-text7">{{transa('blog')}}</a></li>
				<li class="p-b-9"><a href="{{route('frontend.pages.contact')}}" class="s-text7">{{transa('contact')}}</a></li>
				<li class="p-b-9"><a href="{{route('frontend.products.new')}}" class="s-text7">{{transa('products.new')}}</a></li>
				<li class="p-b-9"><a href="{{route('frontend.products.sale')}}" class="s-text7">{{transa('products.sale')}}</a></li>
			</ul>
		</div>
		@endif

		<!-- Info -->
		<div class="p-t-30 p-l-15 p-r-15 respon3" style="width: {{isMobile() ? '100%' : '25%'}}">
			@include('layouts.frontend.facebook')
		</div>
	</div>

	<div class="t-center p-l-15 p-r-15">
		<div class="t-center s-text8 p-t-20">
			Copyright © 2019 All rights reserved by <a href="{{route('frontend.home.index')}}">brownstore.vn</a>
		</div>
	</div>
</footer>