@extends('layouts.frontend.layouts.main')
@section('content')
    <!-- breadcrumb -->
    <div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
        <a href="{{route('frontend.home.index')}}" class="s-text16">
            {{transa('home')}}
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <span class="s-text17">{{transa('profile')}}</span>
    </div>

    <section class="bgwhite p-t-30 p-b-60">
        <div class="container">
            @include('layouts.frontend.notify')
            <div class="row">
                <div class="col-md-8 p-b-30">
                    <h4 class="m-text26 p-b-36 p-t-15">{{transa('profile')}}</h4>

                    <table class="table table-dark">
                        <tr>
                            <td>{{transm('users.username')}}</td>
                            <td>{{$entity->username}}</td>
                        </tr>
                        <tr>
                            <td>{{transm('users.email')}}</td>
                            <td>{{$entity->email}}</td>
                        </tr>
                        <tr>
                            <td>{{transm('users.tel')}}</td>
                            <td>{{$entity->tel}}</td>
                        </tr>
                        <tr>
                            <td>{{transm('users.address')}}</td>
                            <td>{{$entity->address}}</td>
                        </tr>
                        <tr>
                            <td>{{transm('users.orders')}}</td>
                            <td>{{count($entity->orders)}}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4 p-b-30">
                    <h4 class="m-text26 p-b-36 p-t-15">{{transa('link')}}</h4>

                    <table class="table table-dark">
                        <tr>
                            <td><a href="{{route('frontend.users.edit_profile')}}"><i class="fa fa-caret-right"></i> &nbsp;{{transa('edit_profile')}}</a></td>
                        </tr>
                        <tr>
                            <td><a href="#"><i class="fa fa-caret-right"></i> &nbsp;{{transa('my_orders')}}</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{route('frontend.products.cart')}}"><i class="fa fa-caret-right"></i> &nbsp;{{transa('cart')}}</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{route('frontend.products.index')}}"><i class="fa fa-caret-right"></i> &nbsp;{{transa('view_product')}}</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{route('frontend.logout')}}"><i class="fa fa-caret-right"></i> &nbsp;{{transa('logout')}}</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
