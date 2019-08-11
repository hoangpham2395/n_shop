<!-- Header -->
<header class="header1">
	<!-- Header desktop -->
	<div class="container-menu-header">
		<div class="topbar">
			<div class="topbar-social">
				<span class="topbar-email">
					<i class="topbar-social-item fa fa-envelope"></i>
					{{getConfig('owner.email')}}
				</span>

				<span class="linedivide1"></span>

				<span class="topbar-email">
					<i class="topbar-social-item fa fa-phone"></i>
					{{getConfig('owner.phone')}}
				</span>
			</div>
		</div>

		<div class="wrap_header">
			<!-- Logo -->
			<a href="{{route('frontend.home.index')}}" class="logo">
				<img src="{{asset('images/common/logo_small.png')}}" alt="IMG-LOGO">
			</a>

			<!-- Menu -->
			<div class="wrap_menu">
				<nav class="menu">
					<ul class="main_menu">
						@include('layouts.frontend.menu')
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<!-- Header Mobile -->
	@include('layouts.frontend.layouts.header_sp')
</header>