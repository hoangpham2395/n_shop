@extends('layouts.backend.layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{transa('orders.name')}}
            <small>{{transa('edit')}}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('backend.dashboard.index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{route('backend.orders.index')}}">{{transa('orders.name')}}</a></li>
            <li class="active">{{transa('detail')}}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                @include('layouts.backend.notify')
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">{{transa('edit')}}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        {!! Form::model($entity, ['route' => ['backend.orders.update', $entity->id], 'method' => 'PATCH']) !!}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="required">{{transm('orders.user_name')}}</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            {!! Form::text('user_name', null, ['class' => 'form-control', 'placeholder' => transm('orders.user_name')]) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="required">{{transm('orders.status')}}</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            {!! Form::select('status', getConfig('order_status_text'), null, ['class' => 'form-control', 'placeholder' => getConfig('')]) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="required">{{transm('orders.user_tel')}}</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            {!! Form::text('user_tel', null, ['class' => 'form-control', 'placeholder' => transm('orders.user_tel')]) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>{{transm('orders.user_email')}}</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            {!! Form::text('user_tel', null, ['class' => 'form-control', 'placeholder' => transm('orders.user_email')]) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="required">{{transm('orders.user_address')}}</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                            {!! Form::text('user_address', null, ['class' => 'form-control', 'placeholder' => transm('orders.user_address')]) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="required">{{transm('orders.payment_method')}}</label>
                                        <div class="input-group">
                                            @foreach (getConfig('payment_method') as $paymentMethod => $textPaymentMethod)
                                                {!! Form::radio('payment_method', (string) $paymentMethod, null, ['id' => 'payment_method_' . $paymentMethod]) !!} &nbsp;
                                                <label class="pointer" for="payment_method_{{$paymentMethod}}">{{$textPaymentMethod}}</label> &nbsp; &nbsp; &nbsp;
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>{{transm('orders.user_note')}}</label>
                                        {!! Form::textarea('user_note', null, ['class' => 'form-control', 'placeholder' => transm('orders.user_note')]) !!}</div>
                                </div>
                            </div>

                            <div class="row">

                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success">{{transa('confirm')}}</button>
                                    <a href="{{route('backend.orders.index')}}" class="btn btn-default">{{transa('cancel')}}</a>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
