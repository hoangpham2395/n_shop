@extends('layouts.frontend.layouts.main')
@section('content')
<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
	<a href="{{route('frontend.home.index')}}" class="s-text16">
		{{transa('home')}}
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<span class="s-text17">{{transa('account_info')}}</span>
</div>

<section class="bgwhite p-t-30 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="p-b-30">
                    <h2 class="p-b-15">{{transa('account_info')}}</h2>
                    <p class="text-justify color-nuong">
                        Khi quý khách chọn phương thức thanh toán chuyển khoản thì sử dụng cú pháp sau: <br>
                        <strong>&lt;Họ tên&gt;, &lt;Số điện thoại&gt;, &lt;Các code sản phẩm được ngăn cách bởi dấu phẩy&gt;</strong>
                    </p>
                </div>
                {{-- Thông tin thẻ ngân hàng --}}
            </div>
        </div>
    </div>
</section>
@endsection
