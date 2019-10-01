@extends('layouts.backend.layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{transa('orders.name')}}
            <small>{{transa('detail')}}</small>
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
                        <h3 class="box-title">Thông tin khách hàng</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered">
                                    <thead>
                                    <th>Mục</th>
                                    <th>Nội dung</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{transm('orders.id')}}</td>
                                        <td>{{$entity->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{transm('orders.status')}}</td>
                                        <td><p id="order_status" data-id="{{$entity->id}}" data-status="{{$entity->status}}">{!! $entity->getTextStatus() !!}</p></td>
                                    </tr>
                                    <tr>
                                        <td>{{transm('orders.user_name')}}</td>
                                        <td>{{$entity->user_name}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{transm('orders.user_tel')}}</td>
                                        <td>{{$entity->user_tel}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{transm('orders.user_email')}}</td>
                                        <td>{{$entity->user_email}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{transm('orders.user_address')}}</td>
                                        <td>{{$entity->user_address}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{transm('orders.created_at')}}</td>
                                        <td>{{date('Y/m/d H:i', strtotime($entity->created_at))}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{transm('orders.user_note')}}</td>
                                        <td>{!! ebr($entity->user_note) !!}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-12">
                                <a href="{{route('backend.orders.edit', $entity->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i> {{transa('edit')}}</a> &nbsp;
                                <a href="{{route('backend.orders.index')}}" class="btn btn-default"><i class="fa fa-share"></i> {{transa('back')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Chi tiết đơn hàng</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12">
                                @if (!empty($orderDetail)   )
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>{{transm('products.product_code')}}</th>
                                        <th>{{transm('products.product_name')}}</th>
                                        <th>{{transm('products.size')}}</th>
                                        <th>{{transm('products.color')}}</th>
                                        <th>{{transm('products.price')}}</th>
                                        <th>{{transm('order_detail.quantity')}}</th>
                                        <th>{{transm('order_detail.total_price_unit')}}</th>
                                        </thead>
                                        <tbody>
                                        @foreach($orderDetail as $order)
                                            <tr>
                                                <td>{{!empty($order->product) ? $order->product->product_code : ''}}</td>
                                                <td>{{!empty($order->product) ? $order->product->product_name : ''}}</td>
                                                <td>{{$order->size}}</td>
                                                <td>{{$order->color}}</td>
                                                <td>{{!empty($order->product) ? $order->product->getPrice() : ''}}</td>
                                                <td>{{$order->quantity}}</td>
                                                <td>{{$order->total_unit_price}}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="5">
                                                <b>Tổng: <span class="red">{{formatMoney($entity->total_price) . getConfig('money_unit')}}</span></b>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--  Modal change status  --}}
    @include('backend.orders.modal_change_status')
@endsection
