<li class="item-menu-mobile"><a href="{{route('frontend.products.new')}}">Hàng mới</a></li>

@foreach (getConfig('categories_default') as $slug => $category)
	<li class="item-menu-mobile"><a href="{{route('frontend.products.category', $slug)}}">{{ $category }}</a></li>
@endforeach

<li class="item-menu-mobile"><a href="{{route('frontend.products.sale')}}">Khuyến mại</a></li>
<li class="item-menu-mobile"><a href="{{route('frontend.pages.contact')}}">Liên hệ</a></li>