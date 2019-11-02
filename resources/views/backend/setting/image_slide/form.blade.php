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

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
