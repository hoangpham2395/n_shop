@extends('layouts.frontend.layouts.main')
@section('content')
<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
	<a href="{{route('frontend.home.index')}}" class="s-text16">
		Trang chủ
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<span class="s-text17">{{transa('policy_security')}}</span>
</div>

<section class="bgwhite p-t-30 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="p-b-30">
                    <h2 class="p-b-15">{{transa('policy_security')}}</h2>
                    <p class="text-justify">
                        Chúng tôi tôn trọng sự riêng tư của tất cả những người ghé thăm website này. Kết quả là chúng tôi muốn thông báo cho bạn về cách chúng ta sẽ sử dụng dữ liệu cá nhân của bạn. Chúng tôi khuyên bạn nên đọc chính sách bảo mật này để bạn hiểu cách tiếp cận của chúng tôi đối với việc sử dụng dữ liệu cá nhân của bạn. Bằng việc gửi dữ liệu cá nhân của bạn cho chúng tôi, bạn sẽ được coi như là đã đưa ra sự cho phép của mình – khi cần thiết và thích hợp – cho việc tiết lộ được đề cập trong chính sách này.
                    </p>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">Chính sách bảo mật này bao gồm những nội dung gì?</h5>
                    <p class="text-justify">
                        Chính sách bảo mật này là để thông báo cho bạn về việc sử dụng thông tin cá nhân của bạn được thu thập trong khi truy cập vào một trong các website của chúng tôi.
                        Chính sách bảo mật này áp dụng cho phần lớn các website của chúng tôi, tuy nhiên có thể có một số trường hợp cần thiết phải có một chính sách riêng tư hơi khác. Bất cứ khi nào website của <a href="{{route('frontend.home.index')}}">brownstore.vn</a> có một chính sách bảo mật khác, sẽ có thông báo rõ ràng rằng chính sách bảo mật đó khác so với chính sách bảo mật chung này của <a href="{{route('frontend.home.index')}}">brownstore.vn</a>.
                        Trong hành trình của bạn xung quanh các website của <a href="{{route('frontend.home.index')}}">brownstore.vn</a>, vui lòng kiểm tra chính sách bảo mật của mỗi website mà bạn truy cập và không cho rằng chính sách bảo mật này áp dụng cho tất cả các website của <a href="{{route('frontend.home.index')}}">brownstore.vn</a>.
                    </p>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">Thông báo đặc biệt - nếu bạn dưới 13 tuổi</h5>
                    <p class="text-justify">
                        Website của chúng tôi không phải là nhằm vào trẻ em dưới 13 tuổi và chúng tôi sẽ không thu thập, sử dụng, cung cấp hoặc xử lý có chủ ý dưới bất kỳ hình thức nào bất kỳ thông tin cá nhân của trẻ em dưới 13 tuổi.
                        Do đó chúng tôi cũng yêu cầu bạn, nếu bạn dưới 13 tuổi, vui lòng không gửi cho chúng tôi thông tin cá nhân của bạn (ví dụ, tên, địa chỉ, địa chỉ email của bạn). Nếu bạn dưới 13 tuổi và bạn vẫn muốn đặt câu hỏi hoặc sử dụng website này trong đó yêu cầu bạn gửi thông tin cá nhân của bạn, hãy để cha mẹ hoặc người giám hộ của bạn làm điều đó thay cho bạn.
                    </p>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">Mục đích của việc thu thập dữ liệu của bạn</h5>
                    <p class="text-justify">
                        Một trong những mục đích của website của chúng tôi là để thông báo cho bạn chúng tôi là ai và chúng tôi làm gì. Chúng tôi thu thập và sử dụng thông tin cá nhân (bao gồm cả tên, địa chỉ, số điện thoại và email) để cung cấp cho bạn các dịch vụ cần thiết, hoặc thông tin tốt hơn. Do đó chúng tôi sẽ sử dụng thông tin cá nhân của bạn để:
                        trả lời các truy vấn hoặc yêu cầu do bạn gửi
                        xử lý các đơn hàng hoặc các ứng dụng do bạn gửi
                        quản lý hoặc nếu không thì thực hiện các nghĩa vụ của chúng tôi liên quan đến bất kỳ thỏa thuận nào mà bạn có với chúng tôi
                        dự đoán và giải quyết các vấn đề với bất kỳ hàng hóa hoặc dịch vụ nào cung cấp cho bạn
                        tạo ra các sản phẩm hoặc dịch vụ có thể đáp ứng nhu cầu của bạn.
                        Để tối ưu hóa các dịch vụ của chúng tôi, chúng tôi có thể muốn sử dụng dữ liệu cá nhân của bạn cho tiếp thị trực tiếp. Vì chúng tôi tôn trọng sự riêng tư của bạn, chúng tôi sẽ chỉ sử dụng dữ liệu cá nhân của bạn cho mục đích này khi bạn biết điều đó và nếu cần chúng tôi sẽ yêu cầu sự đồng ý của bạn trước khi sử dụng dữ liệu cá nhân của bạn cho tiếp thị trực tiếp.
                        Ngoài ra, nếu bất cứ lúc nào bạn muốn chúng tôi ngừng sử dụng thông tin của bạn cho bất kỳ hoặc tất cả những mục đích trên, vui lòng liên hệ với chúng tôi như nêu ra dưới đây. Chúng tôi sẽ dừng việc sử dụng thông tin của bạn cho các mục đích như vậy trong khả năng có thể hợp lý để làm đièu đó..
                        Ngoài ra, dữ liệu cá nhân thu thập được (đôi khi) sẽ được chuyển giao cho các bên lựa chọn thứ ba, có thể nằm bên ngoài Khu vực Kinh tế châu Âu (“EEA”) như là một phần của các dịch vụ cung cấp cho bạn thông qua website của chúng tôi. Bằng một ví dụ, điều này có thể xảy ra nếu có các máy chủ của chúng tôi đôi khi nằm trong một quốc gia bên ngoài EEA hoặc một trong những nhà cung cấp dịch vụ của chúng tôi nằm ở một quốc gia bên ngoài EEA.
                        Các bên thứ ba này sẽ không sử dụng thông tin cá nhân của bạn cho bất kỳ mục đích nào khác ngoài những gì chúng tôi đã đồng ý với họ. <a href="{{route('frontend.home.index')}}">brownstore.vn</a> yêu cầu các bên thứ ba đó thực hiện các mức bảo vệ thích hợp để bảo vệ thông tin cá nhân của bạn.
                        Chúng tôi tôn trọng thông tin cá nhân của bạn và do đó, chúng tôi sẽ thực hiện các bước để đảm bảo rằng các quyền riêng tư của bạn tiếp tục được bảo vệ nếu chúng tôi chuyển giao thông tin của bạn ra bên ngoài EEA theo cách này. Ngoài ra, nếu bạn sử dụng các dịch vụ của chúng tôi trong khi bạn đang ở bên ngoài EEA, thông tin của bạn có thể được chuyển giao ra bên ngoài EEA để cung cấp cho bạn các dịch vụ đó.
                        Ngoại trừ như quy định trong chính sách bảo mật này, chúng tôi sẽ không tiết lộ bất cứ thông tin nhận dạng cá nhân mà không có sự cho phép của bạn trừ khi chúng tôi có quyền hợp pháp hoặc cần phải làm như vậy
                        (ví dụ, khi cần phải làm như vậy theo thủ tục tố tụng hoặc cho các mục đích của công tác phòng chống gian lận hoặc tội phạm khác) hoặc nếu chúng tôi tin rằng hành động đó là cần thiết để bảo vệ quyền, tài sản, hoặc an toàn cá nhân của chúng tôi và của người dùng/khách hàng hoặc cá nhân khác của chúng tôi.
                        Hãy yên tâm rằng chúng tôi sẽ không sử dụng thông tin của bạn cho bất kỳ mục đích nào nếu bạn đã chỉ ra rằng bạn không muốn chúng tôi sử dụng thông tin của bạn theo cách này khi gửi thông tin hoặc sau đó.
                    </p>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">Thu thập thông tin không cá nhân</h5>
                    <p class="text-justify">
                        Chúng tôi có thể tự động thu thập thông tin không cá nhân về bạn như loại trình duyệt internet mà bạn sử dụng hoặc website mà từ đó bạn đã liên kết đến website của chúng tôi. Chúng tôi cũng có thể tổng hợp thông tin chi tiết mà bạn đã gửi cho website (ví dụ, tuổi của bạn và thị trấn nơi bạn sinh sống).
                        Không thể xác định ra bạn từ thông tin này và nó chỉ được sử dụng để hỗ trợ chúng tôi trong việc cung cấp một dịch vụ có hiệu quả trên website này. Chúng tôi có thể đôi khi cung cấp cho bên thứ ba dữ liệu này không phải cá nhân hoặc tổng hợp này để sử dụng liên quan đến website này.
                    </p>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">Sự tương tác giữa bạn và chúng tôi</h5>
                    <p class="text-justify">
                        Chúng tôi quan tâm đến quan điểm của bạn, và chúng tôi đánh giá cao thông tin phản hồi từ khách hàng và người truy cập của chúng tôi, do đó chúng tôi đã thiết lập các tiện ích bảng thông báo, nhóm tin, phản hồi, email, diễn đàn và/hoặc các phòng chat.
                        Nếu bất cứ lúc nào website này cung cấp bất kỳ phòng chat, cơ sở tiện ích bảng thông báo, nhóm tin, v.v. chúng ta có thể thu thập thông tin cá nhân mà bạn tiết lộ. Thông tin như vậy sẽ được sử dụng phù hợp với chính sách bảo mật này.
                        Tuy nhiên, chúng tôi có thể không kiểm soát và chịu trách nhiệm cho việc sử dụng của các bên khác thông tin cá nhân mà bạn cung cấp cho họ thông qua website này. Chúng tôi khuyến khích bạn phải cẩn thận về thông tin cá nhân nào mà bạn tiết lộ theo cách này.
                    </p>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">Giữ cho hồ sơ của chúng tôi được chính xác</h5>
                    <p class="text-justify">
                        Chúng tôi nhằm giữ cho thông tin của chúng tôi về bạn chính xác nhất có thể. Nếu bạn muốn xem lại, thay đổi hoặc xóa các chi tiết mà bạn đã cung cấp cho chúng tôi, vui lòng liên hệ với chúng tôi như nêu ra ở bên dưới.
                    </p>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">Bảo mật dữ liệu cá nhân của bạn</h5>
                    <p class="text-justify">
                        Khi chúng tôi đánh giá thông tin cá nhân của bạn, chúng tôi sẽ đảm bảo một mức bảo vệ thích hợp. Do đó, chúng tôi đã triển khai công nghệ và các chính sách với mục tiêu bảo vệ sự riêng tư của bạn từ những truy cập trái phép và sử dụng không đúng và sẽ cập nhật các biện pháp này khi công nghệ mới trở nên khả dụng, nếu thích hợp.
                    </p>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">Chính sách cookie</h5>
                    <p class="text-justify">
                        Chúng tôi sử dụng thuật ngữ “cookie” để đề cập tới các cookie và các công nghệ tương tự khác được quy định bởi Chỉ thị EU về quyền riêng tư trong truyền thông điện tử.
                        <br><br>
                        <b>Cookie là gì?</b>
                        <br>
                        Cookie là các tệp dữ liệu nhỏ mà trình duyệt của bạn đặt trên máy tính hoặc thiết bị của bạn.  Cookie giúp trình duyệt của bạn điều hướng một website và bản thân các cookie không thể thu thập bất kỳ thông tin nào được lưu trữ trên máy tính hoặc các tệp tài liệu của bạn.
                        Khi một máy chủ sử dụng một trình duyệt web để đọc các cookie, chúng có thể giúp một website cung cấp dịch vụ thân thiện với người sử dụng hơn. Để bảo vệ sự riêng tư của bạn, trình duyệt của bạn chỉ cho một website truy cập vào các tập tin cookie đã gửi đến cho bạn.
                        <br><br>
                        <b>Tại sao chúng tôi sử dụng cookie?</b>
                        <br>
                        Chúng tôi sử dụng cookie để tìm hiểu thêm về cách bạn tương tác với nội dung của chúng tôi và giúp chúng tôi cải thiện trải nghiệm của bạn khi ghé thăm website của chúng tôi.
                        Cookie nhớ loại trình duyệt bạn sử dụng và phần mềm trình duyệt bổ sung mà bạn đã cài đặt. Các cookie này còn nhớ sở thích của bạn, chẳng hạn như ngôn ngữ và khu vực, vẫn là các thiết lập mặc định của bạn khi bạn vào lại website. Các cookie cũng cho phép bạn xếp hạng các trang web và điền vào các mẫu đóng góp ý kiến.
                        Một số cookie chúng tôi sử dụng là cookie phiên và chỉ tồn tại cho đến khi bạn đóng trình duyệt của bạn, những loại khác là những cookie thường trú được lưu trữ trên máy tính của bạn lâu hơn.  Để biết thêm chi tiết về các loại cookie mà chúng tôi sử dụng, vui lòng bấm vào đây.
                        Cookie của bên thứ ba được sử dụng như thế nào?
                        Đối với một số các chức năng bên trong các website của chúng tôi, chúng tôi sử dụng các nhà cung cấp bên thứ ba, ví dụ, khi bạn truy cập một trang web có video nhúng từ hoặc liên kết đến YouTube. Những đoạn phim hoặc liên kết này (và bất kỳ nội dung nào khác từ các nhà cung cấp bên thứ ba) có thể chứa các cookie của bên thứ ba và bạn có thể muốn tham khảo các chính sách của các website của bên thứ ba này để biết thông tin về việc sử dụng các cookie của họ. Để biết thêm chi tiết về các cookie của bên thứ ba mà chúng tôi sử dụng, xin vui lòng bấm vào đây.
                        <br><br>
                        <b>Làm thế nào để từ chối và xóa các cookie?</b>
                        <br>
                        Chúng tôi sẽ không sử dụng các cookie để thu thập thông tin nhận dạng cá nhân về bạn. Tuy nhiên, nếu bạn muốn làm như vậy, bạn có thể chọn để loại bỏ hoặc chặn các cookie được thiết lập bởi <a href="{{route('frontend.home.index')}}">brownstore.vn</a> hoặc các website của bất kỳ nhà cung cấp bên thứ ba nào bằng cách thay đổi các thiết lập trình duyệt của bạn - xem chức năng Help trong trình duyệt của bạn để biết thêm chi tiết.  Xin lưu ý rằng hầu hết các trình duyệt tự động chấp nhận cookie nếu bạn không muốn các tệp tin cookie được sử dụng, bạn cần phải chủ động xóa hoặc ngăn chặn các tệp tin cookie.
                        Bạn cũng có thể truy cập vào <a href="{{route('frontend.home.index')}}">brownstore.vn</a> để biết chi tiết làm thế nào để xóa hoặc từ chối cookie và có thêm thông tin về các cookie nói chung. Đối với thông tin về việc sử dụng các cookie trong trình duyệt điện thoại di động và để có thông tin chi tiết về làm thế nào để từ chối hoặc xóa các tệp tin cookie như vậy, vui lòng tham khảo hướng dẫn sử dụng thiết bị cầm tay của bạn.
                        <br>
                        Tuy nhiên, hãy lưu ý rằng nếu bạn từ chối việc sử dụng cookie, bạn vẫn sẽ có thể truy cập vào website của chúng tôi nhưng một số chức năng không thể làm việc một cách chính xác.
                    </p>
                </div>
                <div class="p-b-20">
                    <h5 class="p-b-15">Thay đổi chính sách này</h5>
                    <p class="text-justify">
                        Theo thời gian, chúng tôi có thể thay đổi chính sách bảo mật này. Nếu chúng tôi thực hiện bất kỳ thay đổi đáng kể cho chính sách bảo mật này và cách mà chúng tôi sử dụng dữ liệu cá nhân của bạn, chúng tôi sẽ gửi những thay đổi này trên trang web này và sẽ làm trong khả năng tốt nhất để thông báo cho bạn bất kỳ thay đổi đáng kể nào. Vui lòng kiểm tra lại chính sách bảo mật của chúng tôi một cách thường xuyên.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
