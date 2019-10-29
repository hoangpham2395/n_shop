@extends('layouts.frontend.layouts.main')
@section('content')
<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
	<a href="{{route('frontend.home.index')}}" class="s-text16">
		Trang chủ
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<span class="s-text17">{{transa('faq')}}</span>
</div>

<section class="bgwhite p-t-30 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="p-b-30">
                    <h2 class="p-b-15">{{transa('faq')}}</h2>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">Câu hỏi 1: Mặc gì trong buổi hẹn hò đầu tiên ?</h5>
                    <p class="text-justify">
                        Buổi hẹn hò đầu tiên có thể khiến người ta hồi hộp và phân vân không biết nên mặc gì. Bạn đừng lo, những gợi ý sau sẽ giúp bạn chọn đồ nhanh hơn. <br>
                        Đầu tiên, bạn nên chọn đồ phù hợp với khung cảnh hẹn hò. Ví dụ: Hẹn đi ăn tối xem phim thì mặc đồ sang trọng hơn , diện chiếc đầm, giầy cao gót, nhưng màu sắc không quá sặc sỡ  hay quá bó sát hở hang dễ gây phản cảm. Nếu đi dã ngoài thì mặc đồ thể thao giầy sneaker hay áo phông quần jean tạo sự thoải mái dễ đi lại hoạt động vui chơi...<br>
                        Chọn trang phục bạn cảm thấy thoải mái nhất, tự tin thể hiện đung phong cách và nét riêng của bạn, không cần làm giống ai đó. Diều này không chỉ khiến bạn thoải mái hơn mà còn tạo điều kiện cho đối phương tìm hiểu và ấn tương với bạn.<br>
                        Cuối cùng thì háy nhớ chuẩn bị quần áo, đầu tóc sạch sẽ thơm tho trước khi đi hẹn nha !
                    </p>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">Câu hỏi 2: Mặc gì để trông cao hơn ?</h5>
                    <p class="text-justify">
                        - Không chỉ giày cao gót mới giúp bạn tăng chiều cao. Những đôi giày bệt mũi nhọn cũng có thể làm được điều ấy <br>
                        - Quần cạp cao + áo croptop <br>
                        - Váy liền <br>
                        - Áo giấu quần <br>
                        - Quần xắn gấu <br>
                        - Áo khoác dài + quần ngắn <br>
                        - Quần jean ống loe <br>
                        - Mặc dồ đơn sắn hay cả bộ sọc kẻ giúp bạn trông cao hơn đó <br>
                    </p>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">Câu hỏi 3: Chọn màu gì phù hợp da?</h5>
                    <p class="text-justify">
                        <strong>A. Nếu bạn có làn da ngam den</strong><br>
                        Các kiểu váy áo có màu sắc tươi sáng, ấm áp nhứ da cam, vàng, màu san hô, các gam màu coban hay màu pastel sẽ rất xứng đáng để đầu tư.
                        Tuy nhiên, còn lưu ý tránh xa những gam màu quá chói chang như màu neon vì chúng sẽ biến bạn thành nàng “vịt sặc sỡ”.
                        Màu nâu, đen, xanh blue, xám, bạc và các gam màu lạnh, nhợt nhạt cũng hạn chế mặc, vì chúng làm da bạn thêm vàng vọt thiếu sức sống.<br><br>

                        <strong>B.Nếu bạn có làm da nâu</strong><br>
                        Các gam màu nhat như pastel, màu nâu, caramel, cam, xám làm cho làn da nâu thêm xỉn màu.
                        Thay vào dó, các cô nàng có nuớc da bánh mật nên chọn cho mình những kiểu trang phục có màu sắc sáng và ấm áp như tông màu đá quý (ruby, xanh saphie, xanh ngọc bích…), hoặc các gam màu xanh hải quân đậm, hồng đậm, hồng tươi, hồng mâm xôi,hay xanh lá cây, tím đậm. <br><br>

                        <strong>C. Nếu bạn là cô gái da vàng</strong><br>
                        Ðây là màu da phổ biến cửa những cô nàng châu Á, và thật may mắn vì màu da này hầu như dễ thích nghi với bất kì màu sắc nào,
                        đặc biệt là vàng và nâu. Tuy nhiên, màu sắc đẹp nhất với da  là màu hồng, nhất là các tông hồng tươi sáng làm da bạn trở nên căng mong và tràn sức sống.<br>

                        Màu xanh lá cây, tới xanh ô liu cho đến xanh lục giúp bạn thòi trang hơn vì tạo có cảm giác làn da nâu và săn chắc.
                        Ngoài ra, các trang phục màu cam đậm đến nhợt, các gam màu đỏ như đỏ tía, đỏ tươi, đỏ anh dào và đỏ hồng, hồng nâu…
                        đều rất tôn da cho các cô nàng thuộc type da vàng. <br><br>

                        <strong>D. Và các nàng da trắng</strong><br>
                        Bạn còn phân biệt làn da của mình thuộc loại da trắng hồng hay trắng xanh.
                        Nếu may mắn sở hũu làn da trắng hồng, bạn sẽ nhận đượcc “độc quyền” mặc đẹp với tất cả các màu sắc, màu tối như den, nâu, xanh rêu, xanh đen… cho dến các gam màu lạnnh, màu coban, nude, pastel và cả neon.<br>

                        Trong khi dó, làn da trắng xanh lại còn tránh xa 2 gam màu cơ bản không bao giờ lỗi thời là trắng và đen,
                        vì màu trắng sé làm cho da của bạn nhạt nhòa và thiếu sức sống, còn màu đen lại tương phản quá mạnh bất lợi cho làn da.
                        Gam màu sáng và sặc sỡ cũng không nên xuất hiện trong tủ đồ của cô nàng có nuớc da trắng xanh.
                        Thay vào dó, bạn lại được hưởng niềm vui mix, match với các màu sắc đáng yêu, tươi sáng như màu hồng đào, hồng nhợt, màu mơ, màu cỏ xanh, hồng nâu, xanh hải quân, xám, đỏ hoa hồng hay đỏ nhạt…
                    </p>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">Câu hỏi 4: Nên mặc gì khi di du lịch ?</h5>
                    <p class="text-justify">
                        Phụ thuộc vào địa điểm bạn đi du lịch, biển hay núi. Thời tiết nơi du lịch như thế nào để lựa chọn trang phục cho phù hợp. <br>
                        Một số gợi ý sau đây giúp bạn có lựa chọn nhanh hơn nhé: <br>
                        - Quần jeans + áo thun : đơn giản, năng động được các bạn trẻ ưa thích. <br>
                        - Giầy đế bệt- sneaker: sẽ giúp đôi chân bạn đỡ đau và mỏi khi du lịch ở nơi đi bộ khá nhiều. <br>
                        - Dép tông + sandals: mùa hè hay di du lịch đi biển <br>
                        - Phụ kiện : Túi chéo + mũ nón + khăn choàng: vừa có tác dụng đựng đồ, chống nắng còn trở thành đạo cụ chụp hình nữa đấy! <br>

                        Ví dụ : Đi lich biển cần gì: <br>
                        Áo sow mi Hawai + short jean + mũ rộng vành + túi cói + kính mát độc đáo + váy maxi + sandals + khăn họa in họa tiết và không thể thiếu gậy seo phì ^^
                    </p>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">Câu hỏi 5: Phối đồ tránh bị quê mùa?</h5>
                    <p class="text-justify">
                        Bạn có thể tham khảo một số lưu ý sau: <br>
                        - Giày cao đến đùi và váy dài qua gối: giày cổ quá cao kết hợp vớii chiếc váy dài làm cho đôi chân trông ngắn hơn. Nên chọn giầy cao đến mắt cá chân hoặc sneaker. Nếu bạn muốn giầy cao đến đuuì thì phải chọn váy có eo. <br>
                        - Giày cao đến đùi và quần áo nhiều họa tiết: Quá nhiều chi tiết và các yếu tố trang trí làm cho hình ảnh của bạn trông diêm dúa, quê mùa <br>
                        - Váy maxi và áo khoác dài: Váy maxi và áo khoác thon dài kết hợp với nhau khiến bạn trông lùn đi và làm lệcch tỉ lệ cơ thể. Có thể chọn áo khoác ngắn hoặc chọn váy ngắn<br>
                        - Váy cocktail và boot/giày cao đến mắt cá chân: Váy cocktail phù hợp để mặc trong lễ kỷ niệm, tiệc tùng. <br>
                        - Giày thông thường hoặc giày cao đến mắt cá chân không thích hợp cho những sự kiện này. Thay vào đó bạn nên đi một đôi cao gót thanh lịch khi đến các sự kiện lễ hội. Nếu bạn đi dép có gót, đừng mặc quần bó. <br>
                        - Giày cao gót và trang phục quân đội - trông rất ngớ ngẩn. Trang phục quân đội nên kết hợp với giầy thể thao <br>
                        - Áo cardigan dài và váy midi <br>
                        - Một chiếc áo len dài không cho phép bạn làm nổi bật vóc dáng, điều này càng trở nên nghiêm trọng hơn khi măc cùng chiếc váy midi <br>
                        - Những chiếc váy midi , nhẹ nhàng trông thực sự toát lên khi phối cùng áo len ngắn, làm nổi bật eo của bạn. <br>
                        - Quần culottes và giày thể thao: làm dôi chân của bạn ngắn hơn vậy nên Quần culottes trông thật đẹp khi phối cùng giày cao gót. và nếu muốn trông cao hơn thì hãy chọn quần culottes và giầy có màu sắc tươi sáng <br>
                        - Giày cao đến đùi và áo sơ mi dáng dài: Áo so mi dáng dài trông thanh lịch hơn nếu đi cùng đôi cao gót. Nếu mặc sơ mi dài thì kết hợp đôi giầy ngắn đến mắt cá chân, hay cao gót. <br>
                    </p>
                </div>
                <div class="p-b-20">
                    <p class="text-justify">
                        Chúc bạn gái thành công !<br>
                        Brown with love <3
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
