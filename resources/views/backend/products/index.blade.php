@extends('layouts.backend.layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		{{transa('products.name')}}
		<small>{{transa('list')}}</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('backend.dashboard.index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li><a href="#">{{transa('products.name')}}</a></li>
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
					{!! Form::open(['backend.products.index', 'method' => 'GET']) !!}
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>{{transm('products.product_code')}}</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-barcode"></i></span>
										{!! Form::text('product_name', Request::get('product_code'), ['class' => 'form-control', 'placeholder' => transm('products.product_code')]) !!}
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>{{transm('products.product_name')}}</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-thumbs-o-up"></i></span>
										{!! Form::text('product_name', Request::get('product_name'), ['class' => 'form-control', 'placeholder' => transm('products.product_name')]) !!}
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>{{transm('products.category_id')}}</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-th-list"></i></span>
										{!! Form::select('category_id', $categories, Request::get('category_id'), ['class' => 'form-control', 'placeholder' => getConfig('select_default')]) !!}
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>{{transm('products.price')}}</label>
									<div class="input-group" style="display: flex; justify-content: center; align-items: center;">
										{!! Form::number('min_price', Request::get('min_price'), ['class' => 'form-control']) !!}
										<span style="margin: 0 5px;">~</span>
										{!! Form::number('max_price', Request::get('max_price'), ['class' => 'form-control']) !!}
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 text-center">
								<button type="submit" class="btn btn-danger margin-right"><i class="fa fa-search"></i> {{transa('search')}}</button>
								<a href="{{route('backend.products.index')}}" class="btn btn-default"><i class="fa fa-share"></i> {{transa('reset')}}</a>
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
					<h3 class="box-title">{{transa('products.index')}}</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col-sm-12 margin-bottom">
							<a href="{{route('backend.products.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> {{transa('add')}}</a>
						</div>
					</div>
					@if (!empty($entities) && $entities->total() > 0)
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>{{transm('products.id')}}</th>
										<th>{{transm('products.product_code')}}</th>
										<th>{{transm('products.product_name')}}</th>
										<th>{{transm('products.category_id')}}</th>
										<th>{{transm('products.price')}}</th>
										<th class="text-center">{{transa('detail')}}</th>
										<th class="text-center">{{transa('edit')}}</th>
										<th class="text-center">{{transa('delete')}}</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($entities as $entity)
										<tr>
											<td>{{ $entity->id }}</td>
											<td>{{ $entity->product_code }}</td>
											<td>{{ $entity->product_name }}</td>
											<td>{!! $entity->getCategory() !!}</td>
											<td>{!! $entity->getPrice() !!}</td>
											<td class="text-center">
												<a href="{{route('backend.products.show', $entity->id)}}" class="btn btn-sm btn-default"><i class="fa fa-info"></i></a>
											</td>
											<td class="text-center">
												<a href="{{route('backend.products.edit', $entity->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
											</td>
											<td class="text-center">
												<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#del_confirm" data-route="{{route('backend.products.destroy', $entity->id)}}" onclick="SystemController.delete(this);">
													<i class="fa fa-trash"></i>
												</button>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						@include('layouts.backend.pagination', ['object' => transa('products.name')])
					@else
						@include('layouts.backend.no_result', ['object' => transa('products.name')])
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