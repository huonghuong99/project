@extends('layouts.client.master')
@section('title', 'Thông tin cá nhân')


@section('content')
    <div class="row" style="margin-top: 20px">
        <div class="col-md-5 col-md-offset-3">
            <ul class="list-group">
                <li class="list-group-item text-muted">@yield('title') <i class="fa fa-user fa-1x"></i></li>
                <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>Họ tên</strong>
                            </span> {{ auth()->user()->ten }}
                </li>
                <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>Email</strong>
                            </span> {{ auth()->user()->email }}
                </li>
                <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>Số điện thoại</strong>
                            </span> {{ auth()->user()->sdt_lien_he }}
                </li>
            </ul>
        </div>
    </div>
@stop
