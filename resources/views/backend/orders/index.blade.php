@extends('layouts.backend.layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{transa('orders.name')}}
            <small>{{transa('list')}}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('backend.dashboard.index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#">{{transa('orders.name')}}</a></li>
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
                        <h3 class="box-title">{{transa('search')}}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        {!! Form::open(['backend.orders.index', 'method' => 'GET']) !!}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{transm('orders.user_name')}}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        {!! Form::text('user_name', Request::get('user_name'), ['class' => 'form-control', 'placeholder' => transm('orders.user_name')]) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{transm('orders.user_email')}}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-thumbs-o-up"></i></span>
                                        {!! Form::text('user_email', Request::get('user_email'), ['class' => 'form-control', 'placeholder' => transm('orders.user_email')]) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{transm('orders.user_tel')}}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-th-list"></i></span>
                                        {!! Form::text('user_tel', Request::get('user_tel'), ['class' => 'form-control', 'placeholder' => transm('orders.user_tel')]) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{transm('orders.status')}}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-th-list"></i></span>
                                        {!! Form::select('status', getConfig('order_status_text'), Request::get('status'), ['class' => 'form-control', 'placeholder' => getConfig('select_default')]) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-danger margin-right"><i class="fa fa-search"></i> {{transa('search')}}</button>
                                <a href="{{route('backend.products.index')}}" class="btn btn-default"><i class="fa fa-share"></i> {{transa('reset')}}</a>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">{{transa('orders.index')}}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12 margin-bottom">
                                <a href="{{route('backend.products.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> {{transa('add')}}</a>
                            </div>
                        </div>
                        @if (!empty($entities) && $entities->total() > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>{{transm('orders.id')}}</th>
                                        <th>{{transm('orders.status')}}</th>
                                        <th>{{transm('orders.user_name')}}</th>
                                        <th>{{transm('orders.user_email')}}</th>
                                        <th>{{transm('orders.user_tel')}}</th>
                                        <th>{{transm('orders.user_address')}}</th>
                                        <th class="text-center">{{transa('detail')}}</th>
                                        <th class="text-center">{{transa('edit')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($entities as $entity)
                                        <tr>
                                            <td>{{ $entity->id }}</td>
                                            <td>{!! $entity->getTextStatus() !!}</td>
                                            <td>{{ $entity->user_name }}</td>
                                            <td>{!! $entity->user_email !!}</td>
                                            <td>{!! $entity->user_tel !!}</td>
                                            <td>{!! $entity->user_address !!}</td>
                                            <td class="text-center">
                                                <a href="{{route('backend.orders.show', $entity->id)}}" class="btn btn-sm btn-default"><i class="fa fa-info"></i></a>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('backend.orders.edit', $entity->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @include('layouts.backend.pagination', ['object' => transa('orders.name')])
                        @else
                            @include('layouts.backend.no_result', ['object' => transa('orders.name')])
                        @endif
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
@endsection
