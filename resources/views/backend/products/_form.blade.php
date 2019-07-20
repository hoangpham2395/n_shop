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
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				{!! Form::text('product_name', null, ['class' => 'form-control', 'placeholder' => transm('products.product_name'), 'onkeyup' => 'SystemController.changeToSlug(this)']) !!}
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="required">{{transm('products.product_slug')}}</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
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
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				{!! Form::number('price', null, ['class' => 'form-control', 'placeholder' => transm('products.price'), 'min' => 0]) !!}
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label>{{transm('products.material')}}</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				{!! Form::text('material', null, ['class' => 'form-control', 'placeholder' => transm('products.material')]) !!}
			</div>
		</div>
	</div>
</div>
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
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				{!! Form::text('made_in', null, ['class' => 'form-control', 'placeholder' => transm('products.made_in')]) !!}
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label>{{transm('products.price_sale')}}</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
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