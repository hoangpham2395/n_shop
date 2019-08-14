<li class="item-menu-mobile"><a href="{{route('frontend.products.new')}}">{{transa('products.new')}}</a></li>

@foreach (getConfig('categories_default') as $slug => $category)
	<li class="item-menu-mobile"><a href="{{route('frontend.products.category', $slug)}}">{{ $category }}</a></li>
@endforeach

<li class="item-menu-mobile"><a href="{{route('frontend.products.sale')}}">{{transa('products.sale')}}</a></li>
<li class="item-menu-mobile"><a href="{{route('frontend.pages.contact')}}">{{transa('contact')}}</a></li>