<section class="slide1">
	<div class="wrap-slick1">
		<div class="slick1">
            @foreach($imageSlides as $kImageSlide => $imageSlide)
                @php $index = $kImageSlide + 1; @endphp
                <div class="item-slick1 item{{$index}}-slick1" style="background-image: url({{data_get($imageSlide, 'image')}});">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        @if (!empty($imageSlide['title']))
                            <h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="fadeInUp">
                                {{$imageSlide['title']}}
                            </h2>
                        @endif
                        @if (!empty($imageSlide['detail']))
                            <span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="fadeInDown">
                                {{$imageSlide['detail']}}
                            </span>
                        @endif
                        @if (!empty($imageSlide['url']))
                            <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                                <!-- Button -->
                                <a href="{{$imageSlide['url']}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                    {{transa('now_see')}}
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
		</div>
	</div>
</section>
