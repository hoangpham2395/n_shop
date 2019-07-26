@extends('layouts.backend.layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		{{transa('products.name')}}
		<small>{{transa('products.add_image')}}</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('backend.dashboard.index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li><a href="{{route('backend.products.show', $product->id)}}">{{transa('products.name')}}</a></li>
		<li class="active">{{transa('products.add_image')}}</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title">{{$product->product_name}}</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection