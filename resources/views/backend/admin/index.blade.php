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
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title">{{transa('admin.index')}}</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
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
							<tr>
								<td>Trident</td>
								<td>Internet
									Explorer 4.0
								</td>
								<td>Win 95+</td>
								<td> 4</td>
								<td class="text-center"><a href="#" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a></td>
								<td class="text-center"><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
							</tr>
						</tbody>
					</table>
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
@endsection