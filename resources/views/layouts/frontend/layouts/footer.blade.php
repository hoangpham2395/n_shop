<footer class="bg6 p-t-25 p-b-25 p-l-45 p-r-45 bg-nuong">
	<div class="flex-w p-b-20">
		<!-- Logo -->
		<div class="p-l-15 p-r-15 respon3" style="width: {{isMobile() ? '100%' : '30%'}}">
			<h4 class="s-text12 p-b-20 {{isMobile() ? 'text-center' : ''}}">
				<img src="{{asset('images/common/logo.jpg')}}" style="width: 300px;">
			</h4>
            <div>
                <p class="s-text7 w-size27 footer-description">
                    Cảm ơn bạn đã thăm trang web của chúng tôi! <br>
                    Bạn có thể ghé qua cửa hàng tại <a href="{{getConfig('owner.map')}}" target="blank" class="s-text7"><strong>{{getConfig('owner.address')}}</strong></a>
                    hoặc gọi trực tiếp qua số điện thoại <strong class="red">{{getConfig('owner.phone')}}</strong> để được cửa hàng tư vấn, giải đáp thắc mắc cũng như để đặt hàng trực tiếp.
                </p>
                <div class="flex-m p-t-30">
                    <a href="{{getConfig('owner.facebook_url')}}" target="_blank" class="fs-18 color-nuong p-r-20 fa fa-facebook" title="Theo dõi trên Facebook"></a>
                    <a href="{{getConfig('owner.instagram_url')}}" target="_blank" class="fs-18 color-nuong p-r-20 fa fa-instagram" title="Theo dõi trên Instagram"></a>
                    <a href="mailto:{{getConfig('owner.email')}}" target="_blank" class="fs-18 color-nuong p-r-20 fa fa-envelope-o" title="Gửi chúng tôi một email"></a>
                    <a href="tel:{{getConfig('owner.phone2')}}" target="_blank" class="fs-18 color-nuong p-r-20 fa fa-volume-control-phone" title="Gọi cho chúng tôi"></a>
{{--                    <a href="#" class="fs-18 color-nuong p-r-20 fa fa-pinterest-p" title="Theo dõi trên Pinterest"></a>--}}
{{--                    <a href="#" class="fs-18 color-nuong p-r-20 fa fa-youtube-play" title="Theo dõi trên Youtube"></a>--}}
                </div>
            </div>
		</div>

		<div class="p-l-20 p-t-30 p-r-15 respon4" style="width: {{isMobile() ? '100%' : '25%'}}">
            <h4 class="s-text12 p-b-15">{{transa('about_us')}}</h4>
            <ul class="p-t-5">
                <li class="p-b-9"><a href="{{route('frontend.pages.introduce')}}" class="s-text7">{{transa('introduce')}}</a></li>
                <li class="p-b-9"><a href="{{route('frontend.contacts.index')}}" class="s-text7">{{transa('contact_us')}}</a></li>
                <li class="p-b-9"><a href="{{route('frontend.pages.account_info')}}" class="s-text7">{{transa('account_info')}}</a></li>
                <li class="p-b-9"><a href="{{route('frontend.pages.share')}}" class="s-text7">{{transa('blog')}}</a></li>
                <li class="p-b-9"><p class="s-text7 red"><i class="fa fa-phone"></i> &nbsp; <b>HOTLINE: {{getConfig('owner.phone')}}</b></p></li>
                <li class="p-b-9"><p class="s-text7"><i class="fa fa-envelope"></i> &nbsp; Email: {{getConfig('owner.email')}}</p></li>
            </ul>
		</div>

        <div class="p-l-15 p-t-30 p-r-15 respon4" style="width: {{isMobile() ? '100%' : '20%'}}">
            <h4 class="s-text12 p-b-15">{{transa('policy')}}</h4>
            <ul class="p-t-5">
                <li class="p-b-9"><a href="{{route('frontend.pages.policy_buy')}}" class="s-text7">Chính sách mua hàng</a></li>
                <li class="p-b-9"><a href="{{route('frontend.pages.policy_buy')}}" class="s-text7">Chính sách bán buôn, bán lẻ</a></li>
                <li class="p-b-9"><a href="{{route('frontend.pages.policy_security')}}" class="s-text7">Chính sách bảo mật</a></li>
                <li class="p-b-9"><a href="{{route('frontend.pages.use_buy')}}" class="s-text7">Hướng dẫn mua hàng</a></li>
                <li class="p-b-9"><a href="{{route('frontend.pages.faq')}}" class="s-text7">FAQs - Các câu hỏi thường gặp</a></li>
            </ul>
        </div>

		<!-- Info -->
		<div class="p-l-15 p-t-30 p-r-15 respon3" style="width: {{isMobile() ? '100%' : '25%'}}">
            <h4 class="s-text12 p-b-15 ">{{transa('connect_us')}}</h4>
            <div class="text-center @if (isMobile()) p-t-30 @endif">
                @include('layouts.frontend.facebook.fb_group')
            </div>
		</div>
	</div>

	<div class="t-center p-l-15 p-r-15">
		<div class="t-center s-text8 p-t-20" style="color: #666;">
			Copyright © 2019 All rights reserved by <a href="{{route('frontend.home.index')}}" style="color: #333;">brownstore.vn</a>
		</div>
	</div>
</footer>
