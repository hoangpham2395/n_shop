@extends('layouts.frontend.layouts.main')
@section('content')
    <!-- breadcrumb -->
    <div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
        <a href="{{route('frontend.home.index')}}" class="s-text16">
            {{transa('home')}}
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <a href="{{route('frontend.products.cart')}}" class="s-text16">
            {{transa('cart')}}
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <span class="s-text17">{{transa('orders.success')}}</span>
    </div>

    <!-- Cart -->
    <section class="cart bgwhite p-t-70 p-b-100">
        <div class="container">
            <h2 class="m-text20 p-b-24">{{transa('order_success')}}</h2>
            <div id="cart_no_product">
                {{getMessage('order_thank')}}
                <div class="m-t-30 m-b-60">
                    <!-- Button -->
                    <a href="{{route('frontend.products.index')}}" class="flex-c-m bg7 bo-rad-15 hov1 s-text14 trans-0-4 p-t-10 p-b-10 p-r-25 p-l-25" style="width: 250px;">
                        {{transa('return_store')}}
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
