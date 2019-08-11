<footer class="bg6 p-t-25 p-b-25 p-l-45 p-r-45">
	<div class="flex-w p-b-45">
		<!-- Logo -->
		<div class="p-t-30 p-l-15 p-r-15 respon3" style="width: 35%">
			<h4 class="s-text12 p-b-30 text-center">
				<img src="{{asset('images/icons/logo.png')}}">
			</h4>
			<div>
				<p class="s-text7 w-size27">
					Cảm ơn bạn đã thăm trang web của chúng tôi! <br>
					Chúng tôi nhận đặt hàng US & UK & Spain, bao gồm buôn và lẻ. Chúng tôi cam kết mang lại chất lượng tốt và giá cả hợp lý cho người tiêu dùng.
				</p>
			</div>
		</div>

		<!-- Categories -->
		<div class="p-t-30 p-l-15 p-r-15 respon4" style="width: 15%">
			<h4 class="s-text12 p-b-30">Danh mục</h4>
			<ul>
				@foreach (getConfig('categories_default') as $slug => $category)
					<li class="p-b-9"><a href="{{route('frontend.products.category', $slug)}}" class="s-text7">{{ $category }}</a></li>
				@endforeach
			</ul>
		</div>

		<!-- Link -->
		<div class="p-t-30 p-l-15 p-r-15 respon4" style="width: 15%">
			<h4 class="s-text12 p-b-30">Đường dẫn</h4>
			<ul>
				<li class="p-b-9"><a href="{{route('frontend.pages.introduce')}}" class="s-text7">Giới thiệu</a></li>
				<li class="p-b-9"><a href="{{route('frontend.pages.policy')}}" class="s-text7">Chính sách</a></li>
				<li class="p-b-9"><a href="{{route('frontend.pages.share')}}" class="s-text7">Góc chia sẻ</a></li>
				<li class="p-b-9"><a href="{{route('frontend.pages.contact')}}" class="s-text7">Liên hệ</a></li>
			</ul>
		</div>

		<!-- Info -->
		<div class="p-t-30 p-l-15 p-r-15 respon3" style="width: 30%">
			<h4 class="s-text12 p-b-30">Thông tin</h4>
			<ul>
				<li class="p-b-9"><a href="{{getConfig('owner.facebook')}}" target="blank"><i class="fa fa-facebook-official"></i> &nbsp; Brownstore.vn</a></li>
				<li class="p-b-9"><p><i class="fa fa-envelope"></i> &nbsp; {{getConfig('owner.email')}}</p></li>
				<li class="p-b-9"><p><i class="fa fa-phone"></i> &nbsp; {{getConfig('owner.phone')}}</p></li>
				<li class="p-b-9"><a href="https://www.google.com/maps/place/72%2F6+Tr%C6%B0%C6%A1ng+Qu%E1%BB%91c+Dung,+Ph%C6%B0%E1%BB%9Dng+10,+Ph%C3%BA+Nhu%E1%BA%ADn,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7956822,106.6702686,17z/data=!3m1!4b1!4m5!3m4!1s0x317529e91126ec49:0x3e6cf0a86fedd590!8m2!3d10.7956822!4d106.6724573?hl=vi" target="blank"><i class="fa fa-map-marker"></i> &nbsp; {{getConfig('owner.address')}}</a></li>
			</ul>
		</div>
	</div>

	<div class="t-center p-l-15 p-r-15">
		<div class="t-center s-text8 p-t-20">
			Copyright © 2019 All rights reserved by <a href="{{route('frontend.home.index')}}">brownstore.vn</a>
		</div>
	</div>
</footer>