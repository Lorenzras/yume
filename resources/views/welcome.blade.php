@extends('layouts.app')

@section('title', 'YUMETETSU - ようこそ')

@push('header')
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

@endpush

@push('nav')
<li class="nav-item"> <a href="#" class="nav-link"><i class="fas fa-edit"></i>&nbsp; 日報</a> </li>
<li class="nav-item"> <a href="#" class="nav-link"><i class="fas fa-users"></i>&nbsp; 顧客管理</a> </li>
<li class="nav-item"> <a href="#" class="nav-link"><i class="fas fa-images"></i>&nbsp; 物件写真管理</a> </li>
<li class="nav-item"> <a href="#" class="nav-link"><i class="fas fa-link"></i>&nbsp; リンク</a> </li>
<li class="nav-item"> <a href="#" class="nav-link"><i class="fas fa-store-alt"></i>&nbsp; 店舗情報</a> </li>
<li class="nav-item"> <a href="#" class="nav-link"><i class="fas fa-user-cog"></i>&nbsp; 個人設定</a> </li>
@endpush

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center mb-3">
        <div class="col-2">
            <img  src="{{ URL::asset('img/nav_icon.png') }}" class=" img-welcome d-inline-block" class="logo" alt="">
        </div>
        <div class="col-5">
            <div class="row">
                <div class="col-12 apptitle glow">夢てつ</div>
                <div class="col-12 appsub text-secondary">業務アプリ</div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mb-3">
        <div class="col-10 mb-4 ">
            <a class="btn btn-primary  btn-lg btn-block shadow rounded-pill buttontext" href="{{ route('nippo.create') }}" role="button"><i class="fasbtn fas fa-edit"></i>日報</a>
        </div>
        <div class="col-10 mb-4 ">
            <a class="btn btn-lg btn-primary btn-block shadow rounded-pill buttontext" href="{{ route('kokyaku.index') }}" role="button"><i class="fasbtn fas fa-users"></i>顧客管理</a>
        </div>
        <div class="col-10 mb-4 ">
            <a class="btn btn-lg btn-primary  btn-block shadow rounded-pill buttontext" href="#" role="button"><i class="fasbtn fas fa-images"></i>物件写真管理</a>
        </div>
        <div class="col-10 mb-4 ">
            <a class="btn btn-lg btn-primary  btn-block shadow rounded-pill buttontext" href="#" role="button"><i class="fasbtn fas fa-link"></i>リンク</a>
        </div>
        <div class="col-10 mb-4 ">
            <a class="btn btn-lg btn-primary  btn-block shadow rounded-pill buttontext" href="#" role="button"><i class="fasbtn fas fa-store-alt"></i>店舗情報</a>
        </div>
        <div class="col-10 mb-4 ">
            <a class="btn btn-lg btn-primary btn-block shadow rounded-pill buttontext" href="#" role="button"><i class="fasbtn fas fa-user-cog"></i>個人設定</a>
        </div>
    </div>
</div>
@endsection
