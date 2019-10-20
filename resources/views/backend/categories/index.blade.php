@extends('layouts.backend.layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		{{transa('categories.name')}}
		<small>{{transa('list')}}</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('backend.dashboard.index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li><a href="#">{{transa('categories.name')}}</a></li>
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
					{!! Form::open(['backend.categories.index', 'method' => 'GET']) !!}
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>{{transm('categories.category_name')}}</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-th-list"></i></span>
										{!! Form::text('category_name', Request::get('category_name'), ['class' => 'form-control', 'placeholder' => transm('categories.category_name')]) !!}
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>{{transm('categories.category_type')}}</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-th-list"></i></span>
										{!! Form::select('category_type', getConfig('type_category'), Request::get('category_type'), ['class' => 'form-control', 'placeholder' => getConfig('select_default')]) !!}
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 text-center">
								<button type="submit" class="btn btn-danger"><i class="fa fa-search"></i> {{transa('search')}}</button>
								<a href="{{route('backend.categories.index')}}" class="btn btn-default"><i class="fa fa-share"></i> {{transa('reset')}}</a>
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
					<h3 class="box-title">{{transa('categories.index')}}</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col-sm-12 margin-bottom">
							<a href="{{route('backend.categories.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> {{transa('add')}}</a>
						</div>
					</div>
					@if (!empty($entities) && $entities->total() > 0)
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>{{transm('categories.id')}}</th>
										<th>{{transm('categories.category_name')}}</th>
										<th>{{transm('categories.category_slug')}}</th>
										<th>{{transm('categories.category_parent')}}</th>
										<th class="text-center">{{transa('edit')}}</th>
										<th class="text-center">{{transa('delete')}}</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($entities as $entity)
										<tr>
											<td>{{ $entity->id }}</td>
											<td>{{ $entity->category_name }}</td>
											<td>{{ $entity->category_slug }}</td>
											<td>{!! $entity->getCategoryParent() !!}</td>
											<td class="text-center">
                                                @if ($entity->allowChange())
												<a href="{{route('backend.categories.edit', $entity->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
											    @endif
                                            </td>
											<td class="text-center">
                                                @if ($entity->allowChange())
												<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#del_confirm" data-route="{{route('backend.categories.destroy', $entity->id)}}" onclick="SystemController.delete(this);">
													<i class="fa fa-trash"></i>
												</button>
                                                @endif
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						@include('layouts.backend.pagination', ['object' => transa('categories.name')])
					@else
						@include('layouts.backend.no_result', ['object' => transa('categories.name')])
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
@include('layouts.backend.modal_del_confirm')

@endsection
