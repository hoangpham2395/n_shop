<!-- Header -->
<header class="header1">
	<!-- Header desktop -->
	<div class="container-menu-header">
        <div class="topbar">
            <div class="topbar-social">
                <span class="custom-topbar">{{getConfig('topbar.order')}}</span>
            </div>

            <span class="topbar-child1 custom-topbar">{{getConfig('topbar.ship')}}</span>

            <div class="topbar-child2">
                <span class="topbar-email custom-topbar">{{getConfig('topbar.exchange')}}</span>
            </div>
        </div>

		<div class="wrap_header bg-nuong">
			<!-- Logo -->
			<a href="{{route('frontend.home.index')}}" class="logo">
				<img src="{{asset('images/common/logo.jpg')}}" alt="IMG-LOGO">
			</a>

			<!-- Menu -->
			<div class="wrap_menu">
                <nav class="menu">
                    {{-- Search --}}
                    <ul class="main_menu text-center">
                        <div class="search-product pos-relative bo4 of-hidden m-t-22">
                            {!! Form::open(['route' => 'frontend.products.index', 'method' => 'GET', 'id' => 'form_header_search']) !!}
                                {!! Form::text('product_name', Request::get('product_name'), ['class' => 's-text7 size6 p-l-23 p-r-50', 'placeholder' => 'Nhập tên sản phẩm mà bạn mong muốn ...']) !!}
                                <button type="button" class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4" onclick="$('form#form_header_search').submit();">
                                    <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                                </button>
                            {!! Form::close() !!}
                        </div>
                    </ul>

                    {{-- Menu --}}
                    <ul class="main_menu">
                        @include('layouts.frontend.menu')
                    </ul>
                </nav>
            </div>

			<!-- Header Icon -->
			<div class="header-icons">
				<a href="{{frontendGuard()->check() ? route('frontend.users.profile') : route('frontend.login.get')}}" class="header-wrapicon1 dis-block">
					<img src="{{asset('images/icons/icon-header-01.png')}}" class="header-icon1" alt="ICON">
				</a>

				<span class="linedivide1"></span>

				<div class="header-wrapicon2">
					<img src="{{asset('images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
					<span class="header-icons-noti">{{Session::has('products_cart') ? count(Session::get('products_cart')) : 0}}</span>

					<!-- Header cart noti -->
					<div id="header_cart" class="header-cart header-dropdown">
						@include('layouts.frontend.header_cart')
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Header Mobile -->
	@include('layouts.frontend.layouts.header_sp')
</header>
