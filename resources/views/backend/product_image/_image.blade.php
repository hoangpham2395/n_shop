@php 
	$idx = !empty($idx) ? $idx : 0; 
	$item = !empty($item) ? $item : null;
	$id = !empty($item->id) ? $item->id : $idx;
@endphp

<div class="product_image_info">
	<div class="col-sm-6">
		<div class="box box-danger">
			<h4 class="box-title">
				{{transa('image')}} <span class="panel_heading">{{(is_numeric($idx) ? $idx + 1 : $idx)}}</span>
				<span style="color: red;">[<i class="fa fa-asterisk"></i>]</span>
			</h4>
			<div class="box-body">
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							{!! Form::file('image['.$id.']', ['class' => 'form-control', 'placeholoder' => transm('products.image'), 'onchange' => 'ProductsController.uploadImage(this, "#product_image_'.$id.'")', 'required' => empty($item['image'])]) !!}
						</div>
						<div class="col-sm-12" style="margin-bottom: 30px;">
							<img id="product_image_{{$id}}" src="{{!empty($item['image']) ? asset($item['image']) : getConfig('url_no_image')}}" width="40%">
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-sm-12">
						<button type="button" class="btn btn-danger btn-delete-image @if ($idx == 0) //hide @endif" onclick="ProductImageController.removeImage(this);">
							<i class="fa fa-trash"></i> {{transa('product_image.delete')}}
						</button>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>