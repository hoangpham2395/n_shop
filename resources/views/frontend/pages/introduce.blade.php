@extends('layouts.frontend.layouts.main')
@section('content')
<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
	<a href="{{route('frontend.home.index')}}" class="s-text16">
		{{transa('home')}}
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<span class="s-text17">{{transa('introduce')}}</span>
</div>

<section class="bgwhite p-t-30 p-b-60">
    <div class="container">
        <div class="p-b-30">
            <h2 class="p-b-30">Giới thiệu</h2>
            <p class="text-justify color-nuong">
                Cảm hứng từ cuốn sách <strong>Đời thay đổi khi ta thay đổi</strong> của tác giả <strong>George Brescia</strong>, <br>
                <a href="{{route('frontend.home.index')}}" style="color: #111;"><strong>Brown Store</strong></a> được ra đời với ý tưởng chia sẻ giúp đỡ các bạn gái thiếu tự tin về bề ngoài cũng như trong cách ăn mặc tạo phong cách riêng.
                Nhiều bạn gái có làn da ngăm đen và kén màu sắc, có bạn thì mập tròn, có bạn thì thấp và có những bạn thì quá gầy, ...
                Tất cả đều làm các bạn gái của chúng ta rất đau đầu, mất thời gian khi chọn đồ phù hợp cho chính mình.
                Với kinh nghiệm trong ngành may mặc và thời trang trong nhiều năm, đội ngũ nhân viên của Brownstore luôn tư vấn nhiệt tình để tìm cho các bạn gái có phong cách riêng và tự tin.
                Và khi các bạn có phong cách riêng và tự tin, đó cũng là kim chỉ nam để các bạn thành công trong lĩnh vực khác trong cuộc sống. <br>

                Quả thật quần áo mang thật nhiều những ý nghĩa rất đặc biệt chứ không đơn thuần là phong cách thời trang.
                Tất cả mọi thứ bạn mặc sẽ truyền đạt thế giới bên ngoài kia một điều gì đó về bạn và ngược lại, nó cũng mang đến sự ảnh hưởng sâu sắc tới cách mà bạn cảm nhận về chính mình. <br>

                Từ màu sắc và kiểu dáng tới độ vừa vặn và chất vải, tất cả của bộ trang phục đều có tiềm năng nâng giá trị của bạn lên hoặc cũng có thể nhấn chím đi sự rực rỡ của cá nhân bạn. <br>

                Chính vì vậy, việc chọn cho bạn một tủ quần áo khiến bạn tự tin và xinh đẹp là một trong những yếu tố quan trọng giúp bạn sống cuộc đời tự tin, có phong cách riêng và hạnh phúc như bạn hằng khao khát. <br><br>
                -----------------------<br><br>
                Brown with love <3
            </p>
        </div>
    </div>
</section>
@endsection
