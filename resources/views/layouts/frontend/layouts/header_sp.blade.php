<div class="wrap_header_mobile">
	<!-- Logo mobile -->
	<a href="{{route('frontend.home.index')}}" class="logo-mobile">
		<img src="{{asset('images/common/logo_small.png')}}" alt="IMG-LOGO">
	</a>

	<!-- Button show menu -->
	<div class="btn-show-menu">
		<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</div>
	</div>
</div>

<!-- Menu Mobile -->
<div class="wrap-side-menu" >
	<nav class="side-menu">
		<ul class="main-menu">
			<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
				<div class="topbar-child2-mobile">
					<span class="topbar-email">
						<i class="topbar-social-item fa fa-envelope"></i>
						{{getConfig('owner.email')}}
					</span>
				</div>
			</li>

			<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
				<div class="topbar-child2-mobile">
					<span class="topbar-email">
						<i class="topbar-social-item fa fa-mobile"></i>
						{{getConfig('owner.phone')}}
					</span>
				</div>
			</li>

			@include('layouts.frontend.menu_sp')
		</ul>
	</nav>
</div>