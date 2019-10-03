@extends('layouts.frontend.layouts.main')
@section('content')
    <section class="bgwhite p-t-30 p-b-60">
        <div class="container">
            @include('layouts.frontend.notify')
            <div class="row">
                {{-- Login --}}
                <div class="col-md-6 p-b-30">
                    @include('frontend.auth._login')
                </div>

                {{-- Register --}}
                <div class="col-md-6 p-b-30">
                    @include('frontend.auth._register')
                </div>
            </div>
        </div>
    </section>
@endsection
