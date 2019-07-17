@extends('layouts.backend.layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Dashboard
		<small>Index</small>
	</h1>
	<ol class="breadcrumb">
		<li class="active">Dashboard</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title">{{transa('dashboard')}}</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					
				</div>
			</div>
		</div>
	</div>
</section>
@endsection