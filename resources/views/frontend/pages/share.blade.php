@extends('layouts.frontend.layouts.main')
@section('content')
<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
	<a href="{{route('frontend.home.index')}}" class="s-text16">
		{{transa('home')}}
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<span class="s-text17">{{transa('blog')}}</span>
</div>

<section class="bgwhite p-t-30 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="p-b-30">
                    <h2 class="p-b-15">10 xu hướng phối đồ mới nhất năm 2019</h2>
                    <p class="text-justify">
                        Trang phục là một trong những vũ khí đặc biệt giúp chúng ta tạo nên phong cách và nét riêng biệt của bản thân, đối với các nhà thiết kế thì việc nắm rõ những quy tắc phối màu trang phục là chìa khóa để tạo nên vẻ ngoài thu hút mọi ánh nhìn. Tuy nhiên, không phải tất cả trong số chúng ta đều là những Stylist được đào tạo bài bản và chuyên nghiệp, nên việc nắm rõ những quy tắc phối màu trang phục dường như cũng là một thử thách khá khó khăn. Nếu bạn luôn loay hoay trước tủ đồ hàng giờ mà không biết mặc gì hay thắc mắc liệu bộ đồ mình phối hôm nay có lệch tone quá không, thì đây chính là bài viết dành riêng cho bạn, hãy cùng Brownstore tìm hiểu những cách phối màu quần áo cho nữ cơ bản nhất và xu hướng mix đồ hoàn hảo theo xu hướng 2019 mới nhất nhé!
                    </p>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">1. Phối màu theo sắc tố da</h5>
                    <p class="text-justify">
                        Chúng ta thường lựa chọn mỹ phẩm, màu tóc, kiểu tóc,… căn cứ vào sắc tố, đặc điểm của làn da, và khi phối đồ thì sắc tố da cũng là yếu tố được quan tâm hàng đầu. <br>
                        <b>Sắc tố da</b> ( hay còn gọi là undertone ) là biểu hiện đặc trưng của làn da có thể xác định theo 3 loại chính: sắc tố da lạnh (Cool undertones), sắc tố da trung tính (Neutral Undertones) và sắc tố da ấm (Warm undertones).
                        Để có thể phối màu quần áo một cách dễ dàng theo sắc tố da, trước tiên chúng ta phải biết cách xác định sắc tố da của bản thân mình nhé. Đây là một số cách đơn giản để có thể xác định sắc tố da: <br>

                        <b>Cách 1: Xác định sắc tố da dựa vào tĩnh mạch cổ tay</b><br>
                        Nếu đường tĩnh mạch của bạn mang màu xanh da trời hoặc tím, thì đó là cool undertone – sắc tố da lạnh.
                        Nếu đường tĩnh mạch của bạn mang màu xanh lá, thì đó là warm undertone – sắc tố da nóng.
                        Nếu đường tĩnh mạch của bạn có cả màu xanh lá, xanh da trời và tím thì bạn thuộc những người có sắc tố da trung tính. <br>
{{--                        <div class="text-center">--}}
                            <img src="{{asset('images/pages/share/1.jpg')}}" width="400px" class="padding-top padding-bottom"><br>
{{--                        </div>--}}

                        <b>Cách 2: Xác định sắc tố da bằng mức độ bắt nắng</b><br>
                        Nếu tiếp xúc trực tiếp với ánh nắng mặt trời, da của bạn đỏ và rát thì bạn là người có Cool Undertones – tone da lạnh.
                        Nếu tiếp xúc trực tiếp với ánh nắng mặt trời, da của bạn chuyển màu nâu đỏ thì bạn thuộc tone da ấm – Warm Undertones.<br>
                        <b>Cách 3: Xác định sắc tố da bằng các loại trang sức phù hợp</b><br>
                        Nếu bạn phù hợp với các loại trang sức có ánh kim trắng, bạc thì bạn là người thuộc tone da lạnh – Cool Undertones
                        Nếu phù hợp với các loại trang sức vàng thì bạn là người thuộc tone da ấm – Warm undertones
                        Nếu bạn phù hợp với cả 2 loại trên, thì bạn là người thuộc tone da trung tính – Neutral Undertones.<br><br>
                        Sau khi đã xác định được chính xác tone da của mình, việc tiếp theo mà bạn cần làm đó là thực hiện theo các gợi ý phối đồ cho từng loại sắc tố da sau đây:<br>

                        <b>1.1. Đối với sắc tố da lạnh – Cool Undertones</b><br>
                        Sắc tố da lạnh sẽ hợp với những trang phục có màu sắc tone lạnh như: xanh biển, tím, xanh lá,… bạn nên chọn những màu sắc nhạt, trung tính, nghiêng về những tone màu lạnh, tránh dùng những màu sắc sặc sỡ, chói lóa sẽ tạo ra sự tương phản với sắc tố da, làm mất đi sự hài hòa về màu sắc khi phối đồ và làm cho da của bạn có vẻ như bị nhợt nhạt và sạm hơn.<br>
                        <img src="{{asset('images/pages/share/2.png')}}" width="400px" class="padding-top padding-bottom"><br>

                        <b>1.2. Đối với sắc tố da trung bình – Neutral Undertones</b><br>
                        Nếu bạn mang sắc tố da trung tính, thì việc phối màu quần áo dường như quá đơn giản đối với bạn, bởi đây là sắc tố da phù hợp với mọi màu sắc từ trầm, lạnh đến ấm, nóng.
                        Tuy nhiên màu sắc đẹp nhất mà những người mang sắc tố da trung bình nên lựa chọn đó là những sắc màu nhẹ nhàng như hồng đào, trắng, vàng, xanh ngọc, xanh dương.<br>
                        <img src="{{asset('images/pages/share/3.jpg')}}" width="400px" class="padding-top padding-bottom"><br>

                        <b>1.3. Đối với sắc tố da ấm – Warm Undertones</b><br>
                        Là người sở hữu sắc tố da ấm, bạn sẽ thích hợp với những màu sắc trang phục rực rỡ, ấm nóng, những tone màu đậm như vàng cam, đỏ, hồng san hô,…<br>
                        <img src="{{asset('images/pages/share/4.png')}}" width="400px" class="padding-top padding-bottom"><br>
                        Nếu bạn là người có guu mặc đồ khá giản dị và không thích những màu sắc quá sặc sỡ thì có thể sử dụng các màu trung tính như trắng, xám, kem….<br>
                        <img src="{{asset('images/pages/share/5.jpg')}}" width="400px" class="padding-top padding-bottom"><br>
                    </p>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">2. Phối màu theo bánh xe màu sắc</h5>
                    <p class="text-justify">
                        Bánh xe màu sắc là cách phối màu theo công thức mix các loại màu sắc khác nhau trong cùng bảng màu trên bánh xe theo các quy tắc nhất định như: mix đối xứng, mix liền kề, mix chữ T.<br>

                        <b>2.1. Phối màu theo quy tắc mix màu đối xứng</b><br>
                        Đây là cách đơn giản nhất, bạn chỉ cần lựa chọn 2 màu sắc đối xứng nhau trên bánh xe màu sắc và mix chúng cùng với nhau. Cách mix này sẽ tạo ra điểm nhấn cho trang phục của bạn khi phối hai màu sắc có sự tương phản, set đồ của chúng mình sẽ nổi bật và ấn tượng hơn rất nhiều với cách mix này.<br>
                        <img src="{{asset('images/pages/share/6.png')}}" width="400px" class="padding-top padding-bottom"><br>
                        Chọn trang phục phối theo cách phối màu đối xứng<br>
                        <img src="{{asset('images/pages/share/7.jpg')}}" width="400px" class="padding-top padding-bottom"><br>

                        <b>2.2. Phối màu theo quy tắc mix màu liền kề</b><br>
                        Đây cũng là một công thức an toàn và đơn giản dành cho các nàng không có nhiều kiến thức chuyên sâu cũng như am hiểu nhiều về thời trang. Cách mix màu này dựa theo nguyên tắc sử dụng các gam màu liền kề nhau trong bánh xe màu sắc để áp dụng lựa chọn màu trang phục, bạn có thể chọn các màu liền kề nhau hoặc cách đều nhau để phối<br>
                        <img src="{{asset('images/pages/share/8.jpg')}}" width="400px" class="padding-top padding-bottom"><br>
                        Cách phối này đơn giản và dễ thực hiện, tuy nhiên khi lựa chọn màu sắc nên chọn màu sắc đậm sử dụng nhiều hơn làm điểm nhấn để tạo nên sự thu hút cho bộ trang phục.<br>

                        <b>2.3. Phối màu theo quy tắc chữ T</b><br>
                        Với cách phối đồ này, bạn có thể áp dụng cho bộ đồ có từ 3 màu sắc. Việc bạn cần làm là chọn 3 màu sắc khác nhau trên vòng tròn màu sao cho khi nối chúng lại thành một hình chữ T<br>
                        <img src="{{asset('images/pages/share/9.jpg')}}" width="400px" class="padding-top padding-bottom"><br>
                        Cách phối màu trang phục theo quy tắc chữ T sẽ giúp bạn kết hợp cùng lúc nhiều màu sắc cho bộ trang phục của mình mà không bị “lố”, với những ai yêu thích phối đồ thì đây là một trong những nguyên tắc không nên bỏ qua.<br>
                    </p>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">3. Màu nóng và lạnh</h5>
                    <p class="text-justify">
                        <b>3.1. Phối màu theo gam màu nóng</b><br>
                        Gợi ý dành cho cách phối đồ này đó là sử dụng những màu sắc ấm và sáng như: cam, đỏ, vàng, hồng,… cách phối màu quần áo sử dụng những gam màu nóng sẽ giúp “đánh lừa” thị giác của những người đối diện, làm cho người mặc trở nên thon gọn, mảnh mai hơn.<br>
                        <img src="{{asset('images/pages/share/10.jpg')}}" width="400px" class="padding-top padding-bottom"><br>

                        <b>3.2. Phối màu theo gam màu lạnh</b><br>
                        Trái ngược với cách phối đồ sử dụng những gam màu nóng, bạn có thể F5 bản thân với cách phối cùng những gam màu lạnh như: xanh biển, lavender, tím, xanh lá,… Cách phối này tuy không nổi bật bằng phối các gam màu nóng nhưng lại mang đến sự dịu dàng, thanh lịch và trẻ trung cho người mặc.<br>
                        <img src="{{asset('images/pages/share/11.jpg')}}" width="400px" class="padding-top padding-bottom"><br>
                    </p>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">4. 10 cách phối màu quần áo cho nữ đẹp nhất 2019</h5>
                    <p class="text-justify">
                        <b>4.1. Xanh và vàng</b><br>
                        Hai màu sắc này sẽ đem đến cho bạn vẻ trẻ trung và tươi mới, đặc biệt đây là 2 gam màu phù hợp với mọi sắc tố da và không hề kén chọn người mặc, do đó bạn có thể thoải mái lựa chọn trang phục với tone màu chủ đạo xanh và vàng, gợi ý cho chúng mình một vài màu sắc biến thể từ 2 tone màu chính này hiện đang “làm mưa làm gió” trên các sàn diễn thời trang 2019 như: xanh lá cây, vàng chanh, mù tạt,…<br>
                        <img src="{{asset('images/pages/share/12.jpg')}}" width="400px" class="padding-top padding-bottom"><br>

                        <b>4.2. Xanh biển nhạt và hồng</b><br>
                        Sẽ khó tìm được sự kết hợp nào mang lại vẻ ngọt ngào cho các cô nàng như cách kết hợp trang phục màu xanh biển và hồng. Tuy cách phối màu này không đem lại sự nổi bật rõ ràng và phá cách nhiều nhưng nếu bạn yêu thích sự tinh tế, nhã nhặn thì đây là gợi ý phù hợp dành cho bạn. Hãy kết hợp cách phối đồ này cùng những phụ kiện như giày cao gót, túi xách để nhấn nhá thêm cho bộ trang phục của mình nhé.<br>
                        <img src="{{asset('images/pages/share/13.jpg')}}" width="400px" class="padding-top padding-bottom"><br>

                        <b>4.3. Đỏ và xanh da trời</b><br>
                        Xu hướng thời trang 2019 khá ưu ái cho những cô nàng yêu thích sự nổi bật khi tung ra sự kết hợp giữa hai gam màu đỏ và xanh da trời, bạn có thể kết hợp những chiếc quần Jeans cổ điển cùng áo thun khi đi dạo, hoặc phối thêm áo Vest đỏ khi đi làm, cũng có thể phối thêm trang phục sơ mi trắng bên trong để làm nổi bật trang phục tone đỏ hơn, cách phối trang phục theo 2 gam màu này sẽ giúp nàng tạo nên phong cách quyến rũ và thu hút vô cùng.<br>
                        <img src="{{asset('images/pages/share/14.jpg')}}" width="400px" class="padding-top padding-bottom"><br>

                        <b>4.4. Xanh cô ban và xanh ngọc lam.</b><br>
                        Kết hợp màu xanh cô ban và xanh ngọc lam là một gợi ý dành cho những cô nàng yêu thích sự tươi mới và trẻ trung. Với cách phối này bạn cũng có thể kết hợp thêm màu sắc thứ ba như kem, trắng để set đồ của mình có sự hài hòa hơn, trang sức bạc và vàng cũng là những phụ kiện mà bạn có thể thoải mái mix and match cùng set đồ để tạo ra những điểm nhấn.<br>
                        <img src="{{asset('images/pages/share/15.jpg')}}" width="400px" class="padding-top padding-bottom"><br>

                        <b>4.5. Cam và xanh da trời</b><br>
                        Hai màu sắc cam và xanh da trời cũng là một cặp bài vô cùng ăn ý dành cho những cô nàng đang tìm kiếm phong cách năng động, trẻ trung cho bản thân. Hãy thử ngay 2 gam màu tươi sáng này mỗi khi nàng muốn xuống phố với vẻ ngoài mới lạ hơn nhé<br>
                        <img src="{{asset('images/pages/share/16.jpg')}}" width="400px" class="padding-top padding-bottom"><br>

                        <b>4.6. Màu Tan và nâu đỏ</b><br>
                        Màu Tan là những tone màu beige, brown hoặc camel, đây là tone màu khá kén người mặc và khó phối đồ, tuy nhiên với sắc nâu đỏ lại là trường hợp ngoại lệ, hãy cùng xem sự kết hợp đơn giản nhưng lại tạo ra điểm nhấn mới lạ giữa hai màu sắc này đem đến cho bạn sự sang trọng, thanh lịch như thế nào nhé.<br>
                        <img src="{{asset('images/pages/share/17.jpg')}}" width="400px" class="padding-top padding-bottom"><br>

                        <b>4.7. Cam và đen</b><br>
                        Vừa nổi bật, vừa thu hút ánh mắt của người đối diện khi kết hợp trang phục mang màu sắc cam và đen. Đây là hai gam màu bổ trợ cho nhau, giúp người mặc nâng tầm phong cách thời trang của mình như những Fashionista thực sự.<br>
                        <img src="{{asset('images/pages/share/18.jpg')}}" width="400px" class="padding-top padding-bottom"><br>

                        <b>4.8. Hồng và Xám</b><br>
                        Nếu bạn là cô nàng yêu thích sự đơn giản, thanh lịch thì cách phối màu trang phục kết hợp tone màu hồng và xám sẽ đem đến sự hài lòng tuyệt đối cho bạn. Hãy cùng xem hai màu sắc này kết hợp cùng nhau cho kết quả ra sao nhé.<br>
                        <img src="{{asset('images/pages/share/19.jpg')}}" width="400px" class="padding-top padding-bottom"><br>

                        <b>4.9. Tím và San hô</b><br>
                        Nhiều người cho rằng hai màu sắc này hơi chói lóa khi cùng kết hợp với nhau nhưng thực sự không hề, san hô là màu sắc phù hợp với tất cả các tone màu da và tím lại là màu sắc có khả năng tạo điểm nhấn cho trang phục. Kết hợp hai màu sắc này, chắc chắn bạn sẽ không khỏi ngạc nhiên vì chúng quá ăn ý.<br>
                        <img src="{{asset('images/pages/share/20.jpg')}}" width="400px" class="padding-top padding-bottom"><br>

                        <b>4.10. Tím và trắng</b><br>
                        Màu trắng là màu chủ đạo luôn dễ dàng kết hợp với tất cả các màu khác trong bảng màu sắc, với xu hướng thời trang 2019 này, bạn hãy thử kết hợp các trang phục màu trắng với tím, đặc biệt những cô nàng có nước da ngăm, tone da ấm thì đây là cách phối màu giúp “lừa mắt” người nhìn cho bạn làn da mịn màng và tăng thêm vẻ gợi cảm.<br>
                        <img src="{{asset('images/pages/share/21.jpg')}}" width="400px" class="padding-top padding-bottom"><br><br>

                        Như vậy, Brownstore đã hướng dẫn cho bạn toàn bộ những bí kíp quan trọng nhất về phối màu trang phục và những xu hướng phối màu mới nhất năm 2019 này. Cảm ơn bạn đã theo dõi chia sẻ của Brownstore .Chúc bạn luôn hạnh phúc tự tin và có guu thời trang thất bắt mắt nhé!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
