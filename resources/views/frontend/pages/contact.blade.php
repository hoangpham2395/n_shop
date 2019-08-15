@extends('layouts.frontend.layouts.main')
@section('content')
<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
	<a href="{{route('frontend.home.index')}}" class="s-text16">
		{{transa('home')}}
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<span class="s-text17">{{transa('contact')}}</span>
</div>

<section class="bgwhite p-t-30 p-b-60">
	<div class="container">
		<!-- Info -->
		<div class="row">
			<div class="col-md-6 p-b-30">
				<h2 class="p-b-15 p-t-15"><a class="m-text26" href="{{route('frontend.home.index')}}">Brown store</a></h2>
				<h4 class="m-text18 p-b-15 p-t-15">Cửa hàng bán buôn, bán lẻ, nhận đặt hàng các sản phẩm thời trang từ Mỹ và Châu Âu.</h4>
				<p class="s-text12 p-t-10 red">
					<strong><i class="fa fa-phone"></i> Hot line: {{getConfig('owner.phone')}}</strong>
				</p>
				<p class="s-text11 p-t-10">
					<strong><i class="fa fa-envelope"></i> Email: {{getConfig('owner.email')}}</strong>
				</p>
			</div>
			<!-- Facebook -->
			<div class="col-md-6 p-b-30 p-t-15 text-center">
				@include('layouts.frontend.facebook')
			</div>
		</div>

		<div class="row">
			<!-- Map -->
			<div class="col-md-6 p-b-30">
				<div class="p-r-20 p-r-0-lg">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5542.595815192275!2d106.669177699623!3d10.795445422283764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529e91126ec49%3A0x3e6cf0a86fedd590!2zNzIvNiBUcsawxqFuZyBRdeG7kWMgRHVuZywgUGjGsOG7nW5nIDEwLCBQaMO6IE5odeG6rW4sIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1565881933625!5m2!1svi!2s" frameborder="0" style="border:0; width: 100%; min-height: 503px;" allowfullscreen></iframe>
				</div>
			</div>

			<!-- Form -->
			<div class="col-md-6 p-b-30">
				<form class="leave-comment">
					<h4 class="m-text26 p-b-36 p-t-15">Nội dung liên hệ</h4>

					<div class="bo4 of-hidden size15 m-b-20">
						{!! Form::text('name', null, ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('contact.name')]) !!}
					</div>

					<div class="bo4 of-hidden size15 m-b-20">
						{!! Form::text('tel', null, ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('contact.tel').' *', 'required']) !!}
					</div>

					<div class="bo4 of-hidden size15 m-b-20">
						{!! Form::text('email', null, ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('contact.email')]) !!}
					</div>

					<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="content" placeholder="{{transm('contact.content') .' *'}}" required></textarea>

					<div class="w-size25">
						<!-- Button -->
						<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">{{transa('send')}}</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection