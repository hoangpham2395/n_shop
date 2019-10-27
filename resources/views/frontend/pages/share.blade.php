@extends('layouts.frontend.layouts.main')
@section('content')
<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
	<a href="{{route('frontend.home.index')}}" class="s-text16">
		Trang chủ
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<span class="s-text17">
		Góc chia sẻ
	</span>
</div>

<section class="bgwhite p-t-30 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="p-b-30">
                    <h2 class="p-b-15">10 xu hướng phối đồ mới nhất năm 2019</h2>
                    <p class="text-justify">
                        Đang cập nhật ...
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
