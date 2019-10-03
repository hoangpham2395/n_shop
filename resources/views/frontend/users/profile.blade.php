@extends('layouts.frontend.layouts.main')
@section('content')
    <table>
        <tr>
            <td>Họ tên</td>
            <td>{{frontendGuard()->user()->username}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{frontendGuard()->user()->email}}</td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td>{{frontendGuard()->user()->tel}}</td>
        </tr>
    </table>
@endsection
