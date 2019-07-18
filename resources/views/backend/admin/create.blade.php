@extends('layouts.backend.layouts.main')
@section('content')
<section class="content-header">
	<h1>
		{{transa('admin.name')}}
		<small>{{transa('add')}}</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('backend.dashboard.index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li><a href="{{route('backend.admin.index')}}">{{transa('admin.name')}}</a></li>
		<li class="active">{{transa('add')}}</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			@include('layouts.backend.notify')
			
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title">{{transa('admin.create')}}</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					{!! Form::open(['route' => 'backend.admin.store']) !!}
						@include('backend.admin._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</section>
@endsection