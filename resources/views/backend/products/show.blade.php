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
		<li><a href="{{route('backend.products.index')}}">{{transa('products.name')}}</a></li>
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
					<h3 class="box-title">{{transa('products.show')}}</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col-sm-4">
							<img src="{{$entity->image}}" width="100%">
						</div>
						<div class="col-sm-8">
							<table class="table table-bordered">
								<thead>
									<th>Mục</th>
									<th>Nội dung</th>
								</thead>
								<tbody>
									<tr>
										<td>{{transm('products.product_code')}}</td>
										<td>{{$entity->product_code}}</td>
									</tr>
									<tr>
										<td>{{transm('products.category_id')}}</td>
										<td>{{$entity->getCategory()}}</td>
									</tr>
									<tr>
										<td>{{transm('products.product_name')}}</td>
										<td>{{$entity->product_name}}</td>
									</tr>
									<tr>
										<td>{{transm('products.product_slug')}}</td>
										<td>{{$entity->product_slug}}</td>
									</tr>
									<tr>
										<td>{{transm('products.price')}}</td>
										<td>{{$entity->getPrice()}}</td>
									</tr>
									<tr>
										<td>{{transm('products.material')}}</td>
										<td>{{$entity->material}}</td>
									</tr>
									<tr>
										<td>{{transm('products.made_in')}}</td>
										<td>{{$entity->made_in}}</td>
									</tr>
									<tr>
										<td>{{transm('products.content')}}</td>
										<td>{!! ebr($entity->content) !!}</td>
									</tr>
									<tr>
										<td>{{transm('products.price_sale')}}</td>
										<td>{{$entity->price_sale}}</td>
									</tr>
									<tr>
										<td>{{transm('products.sale')}}</td>
										<td>{!! ebr($entity->sale) !!}</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="col-sm-12">
							<a href="{{route('backend.products.upload_image', $entity->id)}}" class="btn btn-success"><i class="fa fa-picture-o"></i> {{transa('products.add_image')}}</a> &nbsp;
							<a href="{{route('backend.products.edit', $entity->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i> {{transa('edit')}}</a> &nbsp;
							<button class="btn btn-danger" data-toggle="modal" data-target="#del_confirm" data-route="{{route('backend.products.destroy', $entity->id)}}" onclick="SystemController.delete(this);">
								<i class="fa fa-trash"></i> {{transa('delete')}}
							</button> &nbsp;
							<a href="{{route('backend.products.index')}}" class="btn btn-default"><i class="fa fa-share"></i> {{transa('back')}}</a>						
						</div>
					</div>
					
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