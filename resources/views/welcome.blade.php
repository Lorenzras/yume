@extends('layouts.app')

@section('title', 'YUMETETSU - ようこそ')

@push('header')
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-2">
            <img  src="{{ URL::asset('img/nav_icon.png') }}" class=" img-welcome d-inline-block" class="logo" alt="">
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12 apptitle"><h1>夢てつ</h1> </div>
                <div class="col-12 "><h4>業務アプリ</h4> </div>
            </div>
        </div>
    </div>
</div>
@endsection
