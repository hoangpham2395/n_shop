@extends('layouts.backend.layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{transa('contacts.name')}}
            <small>{{transa('list')}}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('backend.dashboard.index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#">{{transa('contacts.name')}}</a></li>
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
                        {!! Form::open(['backend.contacts.index', 'method' => 'GET']) !!}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{transm('contacts.email')}}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        {!! Form::text('email', Request::get('email'), ['class' => 'form-control', 'placeholder' => transm('contacts.email')]) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{transm('contacts.tel')}}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        {!! Form::text('tel', Request::get('tel'), ['class' => 'form-control', 'placeholder' => transm('contacts.tel')]) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-danger margin-right"><i class="fa fa-search"></i> {{transa('search')}}</button>
                                <a href="{{route('backend.contacts.index')}}" class="btn btn-default"><i class="fa fa-share"></i> {{transa('reset')}}</a>
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
                        <h3 class="box-title">{{transa('contacts.index')}}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if (!empty($entities) && $entities->total() > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>{{transm('contacts.id')}}</th>
                                        <th>{{transm('contacts.username')}}</th>
                                        <th>{{transm('contacts.tel')}}</th>
                                        <th>{{transm('contacts.email')}}</th>
                                        <th>{{transm('contacts.user_id')}}</th>
                                        <th>{{transm('contacts.content')}}</th>
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
                                            <td>{!! $entity->getAccountName() !!}</td>
                                            <td>{!! ebr($entity->content) !!}</td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#del_confirm" data-route="{{route('backend.contacts.destroy', $entity->id)}}" onclick="SystemController.delete(this);">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @include('layouts.backend.pagination', ['object' => transa('contacts.name')])
                        @else
                            @include('layouts.backend.no_result', ['object' => transa('contacts.name')])
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
