@extends('layouts.frontend.layouts.main')
@section('content')
<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
	<a href="{{route('frontend.home.index')}}" class="s-text16">
		Trang chủ
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<a href="{{route('frontend.products.index')}}" class="s-text16">
		Tất cả sản phẩm
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<span class="s-text17">
		{{ $categoryName }}
	</span>
</div>


<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
	<div class="container">
		<div class="row">
			<!-- Search -->
			<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
				<div class="leftbar p-r-20 p-r-0-sm">
					<!--  -->
					<h4 class="m-text14 p-b-7">
						Danh mục
					</h4>
					
					<div class="flex-w p-b-54">
						<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
							<select class="selection-category" name="sorting">
								<option>Sắp xếp theo</option>
								<option>Từ A -> Z</option>
								<option>Từ Z -> A</option>
								<option>Giá tăng dần</option>
								<option>Giá giảm dần</option>
							</select>
						</div>
					</div>

					<!--  -->
					<h4 class="m-text14 p-b-32">
						Filters
					</h4>

					<div class="filter-price p-t-22 p-b-50 bo3">
						<div class="m-text15 p-b-17">
							Price
						</div>

						<div class="wra-filter-bar">
							<div id="filter-bar"></div>
						</div>

						<div class="flex-sb-m flex-w p-t-16">
							<div class="w-size11">
								<!-- Button -->
								<button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
									Filter
								</button>
							</div>

							<div class="s-text3 p-t-10 p-b-10">
								Range: $<span id="value-lower">610</span> - $<span id="value-upper">980</span>
							</div>
						</div>
					</div>

					<div class="search-product pos-relative bo4 of-hidden">
						<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Nhập tên sản phẩm...">

						<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
							<i class="fs-12 fa fa-search" aria-hidden="true"></i>
						</button>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
				<!--  -->
				<div class="flex-sb-m flex-w p-b-35">
					<div class="flex-w">
						<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
							<select class="selection-sort" name="sorting">
								<option>Sắp xếp theo</option>
								<option>Từ A -> Z</option>
								<option>Từ Z -> A</option>
								<option>Giá tăng dần</option>
								<option>Giá giảm dần</option>
							</select>
						</div>
					</div>

					<span class="s-text8 p-t-5 p-b-5">
						Có {{ $products->total() }} sản phẩm
					</span>
				</div>

				<!-- Product -->
				<div class="row">
					@foreach($products as $product)
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							@include('frontend.products._product', ['product' => $product])
						</div>
					@endforeach
				</div>

				<!-- Pagination -->
				@if (!empty($products) && $products->total())
					@include('layouts.frontend.pagination', ['products' => $products])
				@endif
			</div>
		</div>
	</div>
</section>

<!-- Container Selection -->
<div id="dropDownSelectCategory"></div>
<div id="dropDownSelectSort"></div>	
@endsection

@push('scripts')
<script type="text/javascript">
	$(".selection-category").select2({
		minimumResultsForSearch: 20,
		dropdownParent: $('#dropDownSelectCategory')
	});
	$(".selection-sort").select2({
		minimumResultsForSearch: 20,
		dropdownParent: $('#dropDownSelectSort')
	});
</script>
@endpush