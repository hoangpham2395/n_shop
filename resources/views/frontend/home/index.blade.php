@extends('layouts.frontend.layouts.main')
@section('content')
<!-- Slide -->
@include('frontend.home._slide')

<!-- Banner -->
<div class="banner bgwhite p-t-40 p-b-40">
	<div class="container">
		<div class="row">
			@foreach (getConfig('categories_default') as $slug => $category)
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="{{getConfig('categories_image_default.'. $slug)}}" alt="IMG-BENNER" style="width: 370px; height: 339px;">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="{{route('frontend.products.category', $slug)}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								{{ $category }}
							</a>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</div>


<!-- Our product -->
<section class="bgwhite p-t-45 p-b-58">
	<div class="container">
		<div class="sec-title p-b-22">
			<h3 class="home-title-product m-text5 t-center">
				SẢN PHẨM CỦA TÔI
			</h3>
		</div>

		<!-- Tab01 -->
		<div class="tab01">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs  p-t-35" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Bán chạy</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#new" role="tab">Hàng mới</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#sale" role="tab">Khuyến mại</a>
				</li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content p-t-35">
				<!-- Best seller -->
				<div class="tab-pane fade show active" id="best-seller" role="tabpanel">
					<div class="row">
						@foreach ($products as $product)
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								@include('frontend.products._product', ['product' => $product])
							</div>
						@endforeach
					</div>
				</div>

				<!-- New -->
				<div class="tab-pane fade" id="new" role="tabpanel">
					<div class="row">
						@foreach ($products as $product)
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								@include('frontend.products._product', ['product' => $product])
							</div>
						@endforeach
					</div>
				</div>

				<!-- Sale -->
				<div class="tab-pane fade" id="sale" role="tabpanel">
					<div class="row">
						@foreach ($products as $product)
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								@include('frontend.products._product', ['product' => $product])
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Blog -->
<!-- <section class="blog bgwhite p-t-45 p-b-65">
	<div class="container">
		<div class="sec-title p-b-52">
			<h3 class="home-title-product m-text5 t-center">
				GÓC CHIA SẺ
			</h3>
		</div>

		<div class="row">
			<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
				<div class="block3">
					<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
						<img src="images/blog-01.jpg" alt="IMG-BLOG">
					</a>

					<div class="block3-txt p-t-14">
						<h4 class="p-b-7">
							<a href="blog-detail.html" class="m-text11">
								Black Friday Guide: Best Sales & Discount Codes
							</a>
						</h4>

						<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
						<span class="s-text6">on</span> <span class="s-text7">July 22, 2017</span>

						<p class="s-text8 p-t-16">
							Duis ut velit gravida nibh bibendum commodo. Sus-pendisse pellentesque mattis augue id euismod. Inter-dum et malesuada fames
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
				<div class="block3">
					<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
						<img src="images/blog-02.jpg" alt="IMG-BLOG">
					</a>

					<div class="block3-txt p-t-14">
						<h4 class="p-b-7">
							<a href="blog-detail.html" class="m-text11">
								The White Sneakers Nearly Every Fashion Girls Own
							</a>
						</h4>

						<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
						<span class="s-text6">on</span> <span class="s-text7">July 18, 2017</span>

						<p class="s-text8 p-t-16">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit ame
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
				<div class="block3">
					<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
						<img src="images/blog-03.jpg" alt="IMG-BLOG">
					</a>

					<div class="block3-txt p-t-14">
						<h4 class="p-b-7">
							<a href="blog-detail.html" class="m-text11">
								New York SS 2018 Street Style: Annina Mislin
							</a>
						</h4>

						<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
						<span class="s-text6">on</span> <span class="s-text7">July 2, 2017</span>

						<p class="s-text8 p-t-16">
							Proin nec vehicula lorem, a efficitur ex. Nam vehicula nulla vel erat tincidunt, sed hendrerit ligula porttitor. Fusce sit amet maximus nunc
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<!-- Shipping -->
<!-- <section class="shipping bgwhite p-t-62 p-b-46">
	<div class="flex-w p-l-15 p-r-15">
		<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
			<h4 class="m-text12 t-center">
				Free Delivery Worldwide
			</h4>

			<a href="#" class="s-text11 t-center">
				Click here for more info
			</a>
		</div>

		<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
			<h4 class="m-text12 t-center">
				30 Days Return
			</h4>

			<span class="s-text11 t-center">
				Simply return it within 30 days for an exchange.
			</span>
		</div>

		<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
			<h4 class="m-text12 t-center">
				Store Opening
			</h4>

			<span class="s-text11 t-center">
				Shop open from Monday to Sunday
			</span>
		</div>
	</div>
</section> -->
@endsection
