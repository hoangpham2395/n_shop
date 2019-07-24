@if (!empty($entity->id))
	<input type="hidden" name="id" value="{{$entity->id}}">
@endif

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label class="required">{{transm('products.product_code')}}</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-barcode"></i></span>
				{!! Form::text('product_code', null, ['class' => 'form-control', 'placeholder' => transm('products.product_code')]) !!}
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="required">{{transm('products.category_id')}}</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-th-list"></i></span>
				{!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => getConfig('select_default')]) !!}
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label class="required">{{transm('products.product_name')}}</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-thumbs-o-up"></i></span>
				{!! Form::text('product_name', null, ['class' => 'form-control', 'placeholder' => transm('products.product_name'), 'onkeyup' => 'SystemController.changeToSlug(this)']) !!}
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="required">{{transm('products.product_slug')}}</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-link"></i></span>
				{!! Form::text('product_slug', null, ['id' => 'slug', 'class' => 'form-control', 'placeholder' => transm('products.product_slug'), 'readonly' => true]) !!}
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label class="required">{{transm('products.price')}}</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-money"></i></span>
				{!! Form::number('price', null, ['class' => 'form-control', 'placeholder' => transm('products.price'), 'min' => 0]) !!}
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label>{{transm('products.material')}}</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-superpowers"></i></span>
				{!! Form::text('material', null, ['class' => 'form-control', 'placeholder' => transm('products.material')]) !!}
			</div>
		</div>
	</div>
</div>
<!-- Product option -->
@php
	$options = !empty($entity->id) ? $entity->productOptions->toArray() : [];
	// Get old value after validate
	if (old('product_option')) {
		$options = old('product_option');
	}
@endphp
<div class="product_option_list">
	@foreach ($options as $idx => $option)
		@include('backend.products._option', ['idx' => $idx, 'item' => $option])
	@endforeach

	@if (empty(count($options)))
		@include('backend.products._option', ['idx' => 0])
	@endif
</div>
<div class="row margin-bottom">
	<div class="col-sm-12">
		<button type="button" class="btn btn-success" onclick="ProductsController.addOption(this);">
			<i class="fa fa-plus"></i> {{transa('product_option.add')}}
		</button>
	</div>
</div>
<script id="product_option_template" class="hidden" type="text/plain">
	@include('backend.products._option', ['idx' => '_prefix'])
</script>
<!-- End product option -->

<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			<label>{{transm('products.content')}}</label>
			{!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => transm('products.content'), 'row' => 5]) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label>{{transm('products.made_in')}}</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-industry"></i></span>
				{!! Form::text('made_in', null, ['class' => 'form-control', 'placeholder' => transm('products.made_in')]) !!}
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label>{{transm('products.price_sale')}}</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-money"></i></span>
				{!! Form::number('price_sale', null, ['class' => 'form-control', 'placeholder' => transm('products.price_sale'), 'min' => 0]) !!}
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			<label>{{transm('products.sale')}}</label>
			{!! Form::textarea('sale', null, ['class' => 'form-control', 'placeholder' => transm('products.sale'), 'row' => 5]) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<button type="submit" class="btn btn-success">{{transa('confirm')}}</button>
		<a href="{{route('backend.admin.index')}}" class="btn btn-default">{{transa('cancel')}}</a>
	</div>
</div>