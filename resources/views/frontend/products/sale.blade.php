@extends('layouts.frontend.layouts.main')
@section('content')
<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
	<a href="{{route('frontend.home.index')}}" class="s-text16">
		Trang chủ
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<a href="{{route('frontend.products.index')}}" class="s-text16">
		Tất cả sản phẩm
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<span class="s-text17">
		Khuyến mại
	</span>
</div>
@endsection