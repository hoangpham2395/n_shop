<div class="wrap_header_mobile bg-nuong">
    <!-- Logo mobile -->
    <a href="{{route('frontend.home.index')}}" class="logo-mobile">
        <img src="{{asset('images/common/logo.jpg')}}" alt="IMG-LOGO">
    </a>

    <!-- Button show menu -->
    <div class="btn-show-menu">
        <!-- Header Icon mobile -->
        <div class="header-icons-mobile">
            <a href="{{frontendGuard()->check() ? route('frontend.users.profile') : route('frontend.login.get')}}" class="header-wrapicon1 dis-block">
                <img src="{{asset('images/icons/icon-header-01.png')}}" class="header-icon1" alt="ICON">
            </a>

            <span class="linedivide2"></span>

            <div class="header-wrapicon2">
                <img src="{{asset('images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown"
                     alt="ICON">
                <span
                    class="header-icons-noti">{{Session::has('products_cart') ? count(Session::get('products_cart')) : 0}}</span>

                <!-- Header cart noti -->
                <div id="header_cart" class="header-cart header-dropdown">
                    @include('layouts.frontend.header_cart')
                </div>
            </div>
        </div>

        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
        </div>
    </div>
</div>

<!-- Menu Mobile -->
<div class="wrap-side-menu">
    <nav class="side-menu">
        <ul class="main-menu">
            <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                <div class="topbar-child2-mobile">
					<span class="topbar-email">
                        <i class="fa fa-volume-control-phone"></i> &nbsp;&nbsp;&nbsp;
                        {{getConfig('topbar.order')}}
                    </span>
                </div>
            </li>

            <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                <div class="topbar-child2-mobile">
					<span class="topbar-email">
                        <i class="fa fa-fighter-jet"></i> &nbsp;&nbsp;&nbsp;
						{{getConfig('topbar.ship')}}
					</span>
                </div>
            </li>

            <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                <div class="topbar-child2-mobile">
					<span class="topbar-email">
                        <i class="fa fa-handshake-o"></i> &nbsp;&nbsp;&nbsp;
						{{getConfig('topbar.exchange')}}
					</span>
                </div>
            </li>

            @include('layouts.frontend.menu_sp')
        </ul>
    </nav>
</div>
