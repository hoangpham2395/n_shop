<div class="flex-w p-b-15 flex-end">
	<div class="flex-w">
		<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5">
			{!! Form::select('sorting', getConfig('product_sort'), Request::get('sort'), ['class' => 'selection-sort', 'placeholder' => transa('sort_by'), 'onchange' => 'changeSort(this)']) !!}
		</div>
	</div>
</div>

<!-- Container Selection -->
<div id="dropDownSelectSort"></div>	

@push('scripts')
<script type="text/javascript">
	$(".selection-sort").select2({
		minimumResultsForSearch: 20,
		dropdownParent: $('#dropDownSelectSort')
	});

	function changeSort(e) {
		var sort = $(e).val();
		$('#form_products_search').find('input[name="sort"]').val(sort);
		$('#form_products_search').submit();
	}
</script>
@endpush