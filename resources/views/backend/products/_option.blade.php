@php 
	$idx = !empty($idx) ? $idx : 0; 
	$item = !empty($item) ? $item->toArray() : null;
	$id = !empty($item->id) ? $item->id : $idx;
@endphp

<div class="row product_option_info">
	<div class="col-sm-12">
		<div class="box box-danger">
			<h4 class="box-title">
				{{transa('option')}} <span class="panel_heading">{{(is_numeric($idx) ? $idx + 1 : $idx)}}</span>
			</h4>
			<div class="box-body">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label class="required">{{transm('products.size')}}</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-arrows-h"></i></span>
								{!! Form::text('product_option[][size]', null, ['class' => 'form-control', 'placeholoder' => transm('products.size')]) !!}
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label>{{transm('products.color')}}</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-star"></i></span>
								{!! Form::text('product_option[][color]', null, ['class' => 'form-control', 'placeholoder' => transm('products.color')]) !!}
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label>{{transm('products.count')}}</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-calculator"></i></span>
								{!! Form::number('product_option[][count]', null, ['class' => 'form-control', 'placeholoder' => transm('products.count')]) !!}
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<button type="button" class="btn btn-danger btn-delete-option @if ($idx == 0) hide @endif" onclick="ProductsController.removeOption(this);">
							<i class="fa fa-trash"></i> {{transa('product_option.delete')}}
						</button>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>