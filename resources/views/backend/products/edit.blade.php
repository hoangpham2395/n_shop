@extends('layouts.backend.layouts.main')
@section('content')
<section class="content-header">
	<h1>
		{{transa('products.name')}}
		<small>{{transa('edit')}}</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('backend.dashboard.index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li><a href="{{route('backend.products.index')}}">{{transa('products.name')}}</a></li>
		<li class="active">{{transa('edit')}}</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			@include('layouts.backend.notify')
			
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title">{{transa('products.edit')}}</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					{!! Form::model($entity, ['route' => ['backend.products.update', $entity->id], 'method' => 'PATCH']) !!}
						@include('backend.products._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</section>
@endsection