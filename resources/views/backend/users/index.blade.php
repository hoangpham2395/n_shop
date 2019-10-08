@extends('layouts.backend.layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{transa('users.name')}}
            <small>{{transa('list')}}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('backend.dashboard.index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#">{{transa('users.name')}}</a></li>
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
                        {!! Form::open(['backend.users.index', 'method' => 'GET']) !!}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{transm('users.username')}}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        {!! Form::text('username', Request::get('username'), ['class' => 'form-control', 'placeholder' => transm('users.username')]) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{transm('users.email')}}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        {!! Form::text('email', Request::get('email'), ['class' => 'form-control', 'placeholder' => transm('users.email')]) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{transm('users.tel')}}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        {!! Form::text('tel', Request::get('tel'), ['class' => 'form-control', 'placeholder' => transm('users.tel')]) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{transm('users.status')}}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                        {!! Form::select('status', getConfig('users_status'), Request::get('status'), ['class' => 'form-control', 'placeholder' => getConfig('select_default')]) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-danger margin-right"><i class="fa fa-search"></i> {{transa('search')}}</button>
                                <a href="{{route('backend.users.index')}}" class="btn btn-default"><i class="fa fa-share"></i> {{transa('reset')}}</a>
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
                        <h3 class="box-title">{{transa('users.index')}}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if (!empty($entities) && $entities->total() > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>{{transm('users.id')}}</th>
                                        <th>{{transm('users.username')}}</th>
                                        <th>{{transm('users.tel')}}</th>
                                        <th>{{transm('users.email')}}</th>
                                        <th>{{transm('users.address')}}</th>
                                        <th>{{transm('users.fb_id')}}</th>
                                        <th class="text-center">{{transm('users.status')}}</th>
                                        <th class="text-center">{{transa('delete')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($entities as $entity)
                                        <tr>
                                            <td>{{ $entity->id }}</td>
                                            <td>{{ $entity->username }}</td>
                                            <td>{{ $entity->tel }}</td>
                                            <td>{!! $entity->email !!}</td>
                                            <td>{!! $entity->address !!}</td>
                                            <td>{!! $entity->fb_id !!}</td>
                                            <td class="text-center">{!! $entity->getStatus() !!}</td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#del_confirm" data-route="{{route('backend.users.destroy', $entity->id)}}" onclick="SystemController.delete(this);">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @include('layouts.backend.pagination', ['object' => transa('users.name')])
                        @else
                            @include('layouts.backend.no_result', ['object' => transa('users.name')])
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

    <!-- Modal -->
    @include('layouts.backend.modal_del_confirm')

@endsection
