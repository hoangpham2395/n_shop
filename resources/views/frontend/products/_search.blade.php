<div class="col-sm-6 col-md-4 col-lg-3 p-t-10 {{isMobile() ? 'p-t-20' : 'p-b-50'}}">
	<div class="leftbar p-r-20 p-r-0-sm">
		<!-- Category -->
		@if (!isMobile())
		<h4 class="m-text14 p-b-7">
			{{transa('category')}}
		</h4>

		<ul class="p-b-54">
			<li class="p-t-4">
				<a href="{{route('frontend.products.index')}}" class="s-text13 active1">
					{{transa('all')}}
				</a>
			</li>
			@foreach(getConfig('categories_default') as $slug => $category)
			<li class="p-t-4">
				<a href="{{route('frontend.products.category', $slug)}}" class="s-text13">
					{{$category}}
				</a>
			</li>
			@endforeach
		</ul>
		@endif

		<!-- Search -->
		<h4 class="m-text14 p-b-32">
			{{transa('search')}}
		</h4>

		<Form action='' method='GET' id="form_products_search" class="p-b-50">
			<div class="search-product pos-relative bo4 of-hidden">
				{!! Form::text('product_code', Request::get('product_code'), ['class' => 's-text7 size6 p-l-23 p-r-50', 'placeholder' => transm('products.product_code')]) !!}

				<button type="button" class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
					<i class="fs-12 fa fa-barcode" aria-hidden="true"></i>
				</button>
			</div>

			<div class="search-product pos-relative bo4 of-hidden m-t-22">
				{!! Form::text('product_name', Request::get('product_name'), ['class' => 's-text7 size6 p-l-23 p-r-50', 'placeholder' => transm('products.product_name')]) !!}

				<button type="button" class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
					<i class="fs-12 fa fa-eye" aria-hidden="true"></i>
				</button>
			</div>

			<!-- Price -->
			<div class="filter-price p-t-22 bo3">
				<div class="s-text3 p-t-10 p-b-10">
					{{transm('products.price')}}: <span id="value-lower">0</span> - <span id="value-upper">10000000</span>{{getConfig('money_unit')}}
				</div>

				<div class="wra-filter-bar p-b-10">
					<div id="filter-bar"></div>
				</div>
			</div>

			<input type="hidden" id="product_min_price" name="min_price" value="0">
			<input type="hidden" id="product_max_price" name="max_price" value="10000000">
			<input type="hidden" name="sort">
			
			<div class="flex-sb-m flex-w p-t-25">
				<div class="w-size11">
					<!-- Button -->
					<button type="submit" class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
						{{transa('filter')}}
					</button>
				</div>
			</div>
		</Form>
	</div>
</div>

@push('headers')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/noui/nouislider.min.css')}}">
@endpush

@push('scripts')
<script type="text/javascript" src="{{asset('vendor/noui/nouislider.min.js')}}"></script>
<script type="text/javascript">
	var filterBar = document.getElementById('filter-bar');

	noUiSlider.create(filterBar, {
		start: [ 0, 10000000 ],
		connect: true,
		step: 100,
		range: {
			'min': 0,
			'max': 10000000
		}
	});

	var skipValues = [
		document.getElementById('value-lower'),
		document.getElementById('value-upper')
	];

	var inputPrice = [
		$('#product_min_price'),
		$('#product_max_price')
	];

	filterBar.noUiSlider.on('update', function( values, handle ) {
		skipValues[handle].innerHTML = formatMoney(Math.round(values[handle]));
		inputPrice[handle].val(Math.round(values[handle]));
	});
</script>
@endpush