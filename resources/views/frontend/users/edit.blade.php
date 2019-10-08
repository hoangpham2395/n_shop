@extends('layouts.frontend.layouts.main')
@section('content')
    <!-- breadcrumb -->
    <div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
        <a href="{{route('frontend.home.index')}}" class="s-text16">
            {{transa('home')}}
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <a href="{{route('frontend.users.profile')}}" class="s-text16">
            {{transa('profile')}}
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <span class="s-text17">{{transa('edit_profile')}}</span>
    </div>

    <section class="bgwhite p-t-30 p-b-60">
        <div class="container">
            @include('layouts.frontend.notify')
            <div class="row">
                {{-- Login --}}
                <div class="col-md-12 p-b-30">
                    {!! Form::model($entity, ['route' => 'frontend.users.update_profile', 'method' => 'POST', 'class' => 'leave-comment']) !!}
                        {!! Form::hidden('id', $entity->id) !!}
                        <h4 class="m-text26 p-b-36 p-t-15">{{transa('edit_profile')}}</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="s-text7 bold required">{{transm('users.username')}}</label>
                                <div class="bo4 of-hidden size15 m-b-20">
                                    {!! Form::text('username', $entity->username, ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('users.username')]) !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="s-text7 bold required">{{transm('users.email')}}</label>
                                <div class="bo4 of-hidden size15 m-b-20">
                                    {!! Form::text('email', $entity->email, ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('users.email')]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="s-text7 bold required">{{transm('users.tel')}}</label>
                                <div class="bo4 of-hidden size15 m-b-20">
                                    {!! Form::text('tel', $entity->tel, ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('users.tel')]) !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="s-text7 bold">{{transm('users.address')}}</label>
                                <div class="bo4 of-hidden size15 m-b-20">
                                    {!! Form::text('address', $entity->address, ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('users.address')]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="s-text7 bold">{{transm('users.password')}}</label>
                                <div class="bo4 of-hidden size15 m-b-20">
                                    {!! Form::password('password', ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('users.password')]) !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="s-text7 bold">{{transm('users.confirm_password')}}</label>
                                <div class="bo4 of-hidden size15 m-b-20">
                                    {!! Form::password('confirm_password', ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('users.confirm_password')]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="w-size25">
                            <!-- Button -->
                            <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" type="submit">{{transa('edit')}}</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection
