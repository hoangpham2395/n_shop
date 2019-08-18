<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('vendor/frontend/jquery/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/frontend/animsition/js/animsition.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/frontend/bootstrap/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/frontend/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/frontend/select2/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/frontend/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/frontend/fashe/js/slick-custom.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/frontend/countdowntime/countdowntime.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/frontend/lightbox2/js/lightbox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/frontend/sweetalert/sweetalert.min.js')}}"></script>
<script type="text/javascript">

	$('.block2-btn-addwishlist').each(function(){
		var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
		$(this).on('click', function(){
			swal(nameProduct, "is added to wishlist !", "success");
		});
	});
</script>

<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('vendor/frontend/parallax100/parallax100.js')}}"></script>
<script type="text/javascript">
	$('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="{{asset('vendor/frontend/fashe/js/main.min.js')}}"></script>
<script src="{{asset('js/frontend/system.js')}}"></script>

@stack('scripts')