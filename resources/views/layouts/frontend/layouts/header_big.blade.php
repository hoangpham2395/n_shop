<!-- header fixed -->
<div class="wrap_header fixed-header2 trans-0-4">
	<!-- Logo -->
	<a href="index.html" class="logo">
		<img src="{{asset('images/common/logo_small.png')}}" alt="IMG-LOGO" style="max-height: 150px; width: 150px;">
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

<header class="header2">
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
	<!-- Header desktop -->
	<div class="container-menu-header-v2 p-t-26">
		<div class="topbar2">
			<!-- Logo2 -->
			<a href="index.html" class="logo2">
				<img src="{{asset('images/icons/favicon.png')}}" alt="IMG-LOGO" style="max-height: 150px; width: 150px;">
			</a>
		</div>

		<div class="wrap_header">
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