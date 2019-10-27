<footer class="bg6 p-t-25 p-b-25 p-l-45 p-r-45 bg-nuong">
	<div class="flex-w p-t-20 p-b-20">
		<!-- Logo -->
		<div class="p-l-15 p-r-15 respon3" style="width: {{isMobile() ? '100%' : '30%'}}">
			<h4 class="s-text12 p-b-30 {{isMobile() ? 'text-center' : ''}}">
				<img src="{{asset('images/common/logo.jpg')}}" style="width: 300px;">
			</h4>
            <div>
                <p class="s-text7 w-size27">
                    Cảm ơn bạn đã thăm trang web của chúng tôi! <br>
                    Chúng tôi nhận đặt hàng US & UK & Euro, bao gồm buôn và lẻ. Chúng tôi cam kết mang lại chất lượng tốt và giá cả hợp lý cho người tiêu dùng.
                </p>
            </div>
		</div>

		<div class="p-l-15 p-r-15 respon4 @if (isMobile()) p-t-30 @endif" style="width: {{isMobile() ? '100%' : '45%'}}">
            <h4 class="s-text12 p-b-15">{{transa('info_contact')}}</h4>
            <div>
                <ul class="p-t-5">
                    <li class="p-b-9"><p class="s-text7 red"><i class="fa fa-phone"></i> &nbsp; <b>HOTLINE: {{getConfig('owner.phone')}}</b></p></li>
                    <li class="p-b-9"><p class="s-text7"><i class="fa fa-envelope"></i> &nbsp; Email: {{getConfig('owner.email')}}</p></li>
                    <li class="p-b-9"><a href="{{getConfig('owner.map')}}" target="blank" class="s-text7"><i class="fa fa-map-marker"></i> &nbsp; {{transa('address') . ': ' . getConfig('owner.address')}}</a></li>
                </ul>
            </div>

            <h4 class="s-text12 p-t-30 p-b-15">{{transa('account_info')}}</h4>
            <div>
                <ul class="p-t-5">
                    <li class="p-b-9"><p class="s-text7">Số tài khoản: <b>{{getConfig('owner.bank_account')}}</b></p></li>
                    <li class="p-b-9"><p class="s-text7">Người hưởng: <b>{{getConfig('owner.bank_owner')}}</b></p></li>
                    <li class="p-b-9"><p class="s-text7">Ngân hàng: <b>{{getConfig('owner.bank_name')}}</b></p></li>
                </ul>
            </div>
		</div>

		<!-- Info -->
		<div class="p-l-15 p-r-15 respon3 @if (isMobile()) p-t-30 @endif" style="width: {{isMobile() ? '100%' : '25%'}}">
            <h4 class="s-text12 p-b-15 ">{{transa('about_us')}}</h4>
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
                        <li class="p-b-9"><a href="{{route('frontend.contacts.index')}}" class="s-text7">{{transa('contact')}}</a></li>
                    </ul>
                </div>
            </div>

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
