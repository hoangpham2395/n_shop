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
							<div class="clearfix">
				                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
				                	@foreach ($entity->getListImages() as $urlImage)
					                	<li data-thumb="{{asset($urlImage)}}"> 
					                		<img src="{{asset($urlImage)}}" width="100%" />
					                	</li>
				                	@endforeach
				                </ul>
				            </div>
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
										<td>{{transm('products.is_new')}}</td>
										<td>{{$entity->getTextIsNew()}}</td>
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
									@php $options = $entity->getProductOptions(); @endphp
									@foreach ($options as $key => $option)
										<tr>
											<td>{{transa('option') .' '. ($key + 1)}}</td>
											<td>
												{{transm('product_option.size') .': '. array_get($option, 'size') .', '. 
												transm('product_option.color') .': '. array_get($option, 'color') .', '. 
												transm('product_option.count') .': '. array_get($option, 'count')}}
											</td>
										</tr>
									@endforeach
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

@push('tag_headers')
<link rel="stylesheet" href="{{asset('vendor/lightSlider/css/lightslider.css')}}">
@endpush

@push('scripts')
<script src="{{asset('vendor/lightSlider/js/lightslider.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#image-gallery').lightSlider({
			gallery:true,
			item:1,
			thumbItem:9,
			slideMargin: 0,
			speed:500,
			auto:true,
			loop:true,
			onSliderLoad: function() {
				$('#image-gallery').removeClass('cS-hidden');
			}  
		});
	});
</script>
@endpush