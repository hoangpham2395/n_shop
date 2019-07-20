@if (!empty($entity->id))
	<input type="hidden" name="id" value="{{$entity->id}}">
@endif

<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			<label class="required">{{transm('admin.name')}}</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => transm('admin.name')]) !!}
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label class="required">{{transm('admin.email')}}</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => transm('admin.email')]) !!}
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="required">{{transm('admin.role_type')}}</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				{!! Form::select('role_type', getConfig('role_type'), null, ['class' => 'form-control', 'placeholder' => getConfig('select_default'), 'readonly' => (!empty($entity->id) ? $entity->isOwner() : false)]) !!}
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label class="{{empty($entity->id) ? 'required' : ''}}">{{transm('admin.password')}}</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				{!! Form::password('password', ['class' => 'form-control', 'placeholder' => transm('admin.password')]) !!}
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label class="{{empty($entity->id) ? 'required' : ''}}">{{transm('admin.confirm_password')}}</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				{!! Form::password('confirm_password', ['class' => 'form-control', 'placeholder' => transm('admin.confirm_password')]) !!}
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