<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{!empty($title) ? $title : env('FRONTEND_APP_NAME')}}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('images/common/favicon.png')}}"/>
	<!-- CSS + JS-->
	@include('layouts.frontend.layouts.header_css_js')
</head>
<body class="animsition">
	@include('layouts.frontend.facebook.fb_js')
	<!-- Header -->
	@include('layouts.frontend.layouts.header')

	<!-- Content -->
	@yield('content')

	<!-- Footer -->
	@include('layouts.frontend.layouts.footer')

	<!-- Messenger -->
	<div class="btn-messenger">
		<a href="{{getConfig('owner.facebook_messenger')}}" target="blank">
			<img src="{{asset('images/icons/messenger.png')}}" />
		</a>
	</div>

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

<!-- Scripts -->
@include('layouts.frontend.layouts.footer_js')

</body>
</html>
