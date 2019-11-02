@php
    $idx = !empty($idx) ? $idx : 0;
    $item = !empty($item) ? $item : [];
@endphp

<div class="image_slide_item" data-id="{{array_get($item, 'id')}}" data-item="{{$idx}}">
    @if (!empty($item['id']))
        <input type="hidden" name="imageSlide[{{$idx}}][id]" value="{{$item['id']}}">
        <input type="hidden" name="imageSlide[{{$idx}}][image]" value="{{$item['image']}}">
    @endif
    <div class="col-sm-6">
        <div class="box box-danger">
            <h4 class="box-title">
                {{transa('image')}} <span class="image_slide_heading">{{(is_numeric($idx) ? $idx + 1 : $idx)}}</span>
                <span class="red">[<i class="fa fa-asterisk"></i>]</span>
            </h4>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <img class="image_slide_img {{!empty($item['image']) ? 'has_image' : ''}}" id="image_slide_{{$idx}}" src="{{!empty($item['image']) ? asset($item['image']) : getConfig('url_no_image')}}" height="250px">
                    </div>
                </div>
                <div class="row padding-top">
                    <div class="col-sm-12">
                        {!! Form::file('imageSlide['.$idx.'][image]', [
                            'id' => 'btn_upload_image_' . $idx,
                            'class' => 'btn_upload_image hidden',
                            'onchange' => 'ImageSlideController.uploadImage(this)',
                            'value' => !empty($item['image']) ? $item['image'] : '',
                            'data-class-id' => '#image_slide_'.$idx]) !!}
                        <label for="btn_upload_image_{{$idx}}" class="btn btn-success label_upload_image">
                            <i class="fa fa-upload"></i> Upload
                        </label>

                        <button type="button" class="btn btn-danger btn-delete-image @if ($idx == 0) //hide @endif" onclick="ImageSlideController.removeImage(this);">
                            <i class="fa fa-trash"></i> {{transa('product_image.delete')}}
                        </button>
                    </div>
                </div>
                <div class="row padding-top">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="required">{{transm('setting_image_slide.sort')}}</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></span>
                                {!! Form::text('imageSlide[' . $idx .'][sort]', !empty($item) ? $item['sort'] : null, ['class' => 'form-control image_slide_sort', 'placeholder' => transm('setting_image_slide.sort'), 'required' => true]) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
