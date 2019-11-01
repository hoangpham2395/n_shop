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
		<li><a href="{{route('backend.products.show', $entity->id)}}">{{transa('products.name')}}</a></li>
		<li class="active">{{transa('products.add_image')}}</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
            @include('layouts.backend.notify')
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title">{{$entity->product_name}}</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						{!! Form::open(['route' => ['backend.products.post_upload_image', $entity->id], 'method' => 'POST', 'files' => true, 'id' => 'form_product_image']) !!}
							<!-- Product image -->
							@php
								$images = !empty($entity->id) ? $entity->productImages->toArray() : [];
								// Get old value after validate
								if (old('productImages')) {
									$images = old('productImages');
								}
							@endphp
							<div class="product_image_list">
								@foreach ($images as $idx => $image)
									@include('backend.product_image._image', ['idx' => $idx, 'item' => $image])
								@endforeach

								@if (empty(count($images)))
									@include('backend.product_image._image', ['idx' => 0])
								@endif
							</div>
							<div class="margin-bottom">
								<div class="col-sm-12">
									<button type="button" class="btn btn-primary" onclick="ProductImageController.addImage(this);">
										<i class="fa fa-plus"></i> {{transa('product_image.add')}}
									</button>
								</div>
							</div>
							<!-- End product image -->

							<div class="col-sm-12 margin-top">
								<button type="button" class="btn btn-success margin-right" id="btn_submit_product_image">{{transa('confirm')}}</button>
								<a href="{{route('backend.products.index')}}" class="btn btn-default">{{transa('cancel')}}</a>
							</div>
                            <input id="delete_ids" name="delete_ids" type="hidden">
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@push('scripts')
    <div id="product_image_template" class="hidden">
        <div class="product_image_new">
            @include('backend.product_image._image', ['idx' => '_prefix_'])
        </div>
    </div>
    <script>
        $('#btn_submit_product_image').on('click', function () {
            if (ProductImageController.getTotalRow() > ProductImageController.getTotalRowHasImage()) {
                SystemController.showErrorMessage('Phải upload hết ảnh!');
            } else {
                $('form#form_product_image').submit();
            }
        });
    </script>
@endpush
