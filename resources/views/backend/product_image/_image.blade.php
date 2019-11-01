@php
    $idx = !empty($idx) ? $idx : 0;
    $item = !empty($item) ? $item : [];
@endphp

<div class="product_image_item" data-id="{{array_get($item, 'id')}}" data-item="{{$idx}}">
    @if (!empty($item['id']))
        <input type="hidden" name="productImages[{{$idx}}][id]" value="{{$item['id']}}">
        <input type="hidden" name="productImages[{{$idx}}][image]" value="{{$item['image']}}">
    @endif
    <div class="col-sm-6">
        <div class="box box-danger">
            <h4 class="box-title">
                {{transa('image')}} <span class="product_image_heading">{{(is_numeric($idx) ? $idx + 1 : $idx)}}</span>
                <span class="red">[<i class="fa fa-asterisk"></i>]</span>
            </h4>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <img class="product_image_img {{!empty($item['image']) ? 'has_image' : ''}}" id="product_image_{{$idx}}" src="{{!empty($item['image']) ? asset($item['image']) : getConfig('url_no_image')}}" height="250px">
                    </div>
                </div>
                <div class="row padding-top">
                    <div class="col-sm-12">
                        {!! Form::file('productImages['.$idx.'][image]', [
                            'id' => 'btn_upload_image_' . $idx,
                            'class' => 'btn_upload_image hidden',
                            'onchange' => 'ProductImageController.uploadImage(this)',
                            'value' => !empty($item['image']) ? $item['image'] : '',
                            'data-class-id' => '#product_image_'.$idx]) !!}
                        <label for="btn_upload_image_{{$idx}}" class="btn btn-success label_upload_image">
                            <i class="fa fa-upload"></i> Upload
                        </label>

                        <button type="button" class="btn btn-danger btn-delete-image @if ($idx == 0) //hide @endif" onclick="ProductImageController.removeImage(this);">
                            <i class="fa fa-trash"></i> {{transa('product_image.delete')}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
