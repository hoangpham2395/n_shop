<!DOCTYPE html>
<html lang="en">
<head>
	<title>Brown store</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS + JS-->
	@include('layouts.frontend.layouts.header_css_js')
</head>
<body class="animsition">
	<!-- Header -->
	@include('layouts.frontend.layouts.header')

	<!-- Content -->
	@yield('content')

	<!-- Footer -->
	@include('layouts.frontend.layouts.footer')

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
