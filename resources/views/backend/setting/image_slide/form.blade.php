@extends('layouts.backend.layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            {{transa('setting')}}
            <small>{{transa('image_slide')}}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('backend.dashboard.index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#">{{transa('setting')}}</a></li>
            <li class="active">{{transa('image_slide')}}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                @include('layouts.backend.notify')
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">{{transa('image_slide')}}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        {!! Form::open(['route' => 'backend.setting.post_image_slide', 'method' => 'POST', 'files' => true, 'id' => 'form_image_slide']) !!}
                            <div class="image_slide_list">
                                @foreach ($entities as $idx => $entity)
                                    @include('backend.setting.image_slide._image', ['idx' => $idx, 'item' => $entity->toArray()])
                                @endforeach

                                @if (empty($entities))
                                    @include('backend.setting.image_slide._image', ['idx' => 0])
                                @endif
                            </div>
                            <div class="margin-bottom">
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-primary" onclick="ImageSlideController.addImage(this);">
                                        <i class="fa fa-plus"></i> {{transa('product_image.add')}}
                                    </button>
                                </div>
                            </div>
                            <!-- End product image -->

                            <div class="col-sm-12 margin-top">
                                <button type="button" class="btn btn-success margin-right" id="btn_submit_image_slide">{{transa('confirm')}}</button>
                                {{-- <a href="{{route('backend.products.index')}}" class="btn btn-default">{{transa('cancel')}}</a>--}}
                            </div>
                            <input id="delete_ids" name="delete_ids" type="hidden">
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <div id="image_slide_template" class="hidden">
        <div class="image_slide_new">
            @include('backend.setting.image_slide._image', ['idx' => '_prefix_'])
        </div>
    </div>
    <script type="text/javascript" src="{{asset('js/backend/image_slide.js')}}"></script>
    <script>
        $('#btn_submit_image_slide').on('click', function () {
            ImageSlideController.submit();
        });
    </script>
@endpush
