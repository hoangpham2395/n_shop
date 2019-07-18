@if (!empty($entity->id))
	<input type="hidden" name="id" value="{{$entity->id}}">
@endif

<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			<label class="required">{{transm('categories.category_name')}}</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-th-list"></i></span>
				{!! Form::text('category_name', null, ['class' => 'form-control', 'placeholder' => transm('categories.category_name'), 'onchange' => 'SystemController.changeToSlug(this)']) !!}
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			<label class="required">{{transm('categories.category_slug')}}</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-th-list"></i></span>
				{!! Form::text('category_slug', null, ['id'=> 'slug', 'class' => 'form-control', 'placeholder' => transm('categories.category_slug'), 'readonly' => true]) !!}
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			<label>{{transm('categories.category_parent')}}</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-th-list"></i></span>
				{!! Form::select('category_parent', [], null, ['class' => 'form-control', 'placeholder' => getConfig('select_default')]) !!}
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<button type="submit" class="btn btn-success">{{transa('confirm')}}</button>
		<a href="{{route('backend.admin.index')}}" class="btn btn-default">{{transa('cancel')}}</a>
	</div>
</div>