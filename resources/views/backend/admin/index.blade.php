@extends('layouts.backend.layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Admin
		<small>{{transa('list')}}</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('backend.dashboard.index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li><a href="#">Admin</a></li>
		<li class="active">{{transa('list')}}</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			@include('layouts.backend.notify')

			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title">{{transa('search')}}</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					{!! Form::open(['backend.admin.index', 'method' => 'GET']) !!}
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>{{transm('admin.name')}}</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										{!! Form::text('name', Request::get('name'), ['class' => 'form-control', 'placeholder' => transm('admin.name')]) !!}
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>{{transm('admin.email')}}</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
										{!! Form::text('email', Request::get('email'), ['class' => 'form-control', 'placeholder' => transm('admin.email')]) !!}
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>{{transm('admin.role_type')}}</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										{!! Form::select('role_type', getConfig('role_type'), Request::get('role_type'), ['class' => 'form-control', 'placeholder' => getConfig('select_default')]) !!}
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 text-center">
								<button type="submit" class="btn btn-danger"><i class="fa fa-search"></i> {{transa('search')}}</button>
								<a href="{{route('backend.admin.index')}}" class="btn btn-default"><i class="fa fa-share"></i> {{transa('reset')}}</a>
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title">{{transa('admin.index')}}</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col-sm-12 margin-bottom">
							<a href="{{route('backend.admin.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> {{transa('add')}}</a>
						</div>
					</div>
					@if (!empty($entities) && $entities->total() > 0)
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>{{transm('admin.id')}}</th>
										<th>{{transm('admin.name')}}</th>
										<th>{{transm('admin.email')}}</th>
										<th>{{transm('admin.role_type')}}</th>
										<th class="text-center">{{transa('edit')}}</th>
										<th class="text-center">{{transa('delete')}}</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($entities as $entity)
										<tr>
											<td>{{ $entity->id }}</td>
											<td>{{ $entity->name }}</td>
											<td>{{ $entity->email }}</td>
											<td>{!! $entity->getRoleType() !!}</td>
											<td class="text-center">
												<a href="{{route('backend.admin.edit', $entity->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
											</td>
											<td class="text-center">
												@if ($entity->allowDelete())
													<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#del_confirm" data-route="{{route('backend.admin.destroy', $entity->id)}}" onclick="SystemController.delete(this);">
														<i class="fa fa-trash"></i>
													</button>
												@endif
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						@include('layouts.backend.pagination', ['object' => 'admin'])
					@else
						@include('layouts.backend.no_result', ['object' => 'admin'])
					@endif
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->

<!-- Modal -->
<div id="del_confirm" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">{{transa('delete')}}</h4>
			</div>
			<div class="modal-body">
				<p>{{getMessage('delete_confirm')}}</p>
			</div>
			<div class="modal-footer">
				{!! Form::open(['method' => 'DELETE', 'id' => 'del_form']) !!}
				<button type="submit" class="btn btn-danger">{{transa('confirm')}}</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">{{transa('cancel')}}</button>
				{!! Form::close() !!}
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection