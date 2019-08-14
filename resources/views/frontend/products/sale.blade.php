@extends('layouts.frontend.layouts.main')
@section('content')
<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
	<a href="{{route('frontend.home.index')}}" class="s-text16">
		{{transa('home')}}
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<a href="{{route('frontend.products.index')}}" class="s-text16">
		{{transa('products.all')}}
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<span class="s-text17">{{transa('products.sale')}}</span>
</div>


<!-- Content page -->
<section class="bgwhite p-t-30 p-b-65">
	<div class="container">
		<div class="row">
			<!-- Search -->
			@include('frontend.products._search')

			<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
				@if (!empty($products) && $products->total())
					<!-- Sort -->
					@include('frontend.products._sort')

					<!-- Product -->
					<div class="row">
						@foreach($products as $product)
							<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
								@include('frontend.products._product', ['product' => $product])
							</div>
						@endforeach
					</div>

					<!-- Pagination -->
					@include('layouts.frontend.pagination', ['products' => $products])
				@else
					@include('layouts.frontend.no_result')
				@endif
			</div>
		</div>
	</div>
</section>
@endsection