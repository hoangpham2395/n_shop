@extends('layouts.frontend.layouts.main')
@section('content')
<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
	<a href="{{route('frontend.home.index')}}" class="s-text16">
		Trang chủ
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<span class="s-text17">
		Chính sách mua hàng
	</span>
</div>

<section class="bgwhite p-t-30 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="p-b-30">
                    <h2 class="p-b-15">Chính sách mua hàng</h2>
                    <p>Để đảm bảo quyền lợi, quý khách vui lòng đọc kỹ chính sách mua hàng này. Trong các trường hợp lỗi do nhà sản xuất, không vừa size, quý khách vui lòng liên hệ trực tiếp với Trung tâm Chăm Sóc Khách Hàng của Brown Store để được hỗ trợ tốt nhất.</p>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">Cam kết</h5>
                    <p>Chúng tôi cam kết bán hàng đúng chất lượng, đúng giá cả.</p>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">Chính sách giao hàng</h5>
                    <p>Giao hàng toàn quốc, thời gian từ 2-5 ngày.</p>
                    <p>Miễn phí giao hàng cho đơn hàng trên 1 triệu, phí giao hàng cho đơn hàng dưới 1 triệu là 30.000 VND.</p>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">Chính sách đổi trả</h5>
                    <p>Đổi trả hàng trong 7 ngày.</p>
                    <p>Chỉ chấp nhận đổi trả khi sản phẩm còn nguyên vẹn, chưa sử dụng, chưa giặt và còn nguyên tag.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
