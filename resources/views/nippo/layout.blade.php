@extends('layouts.app')

@section('title', '日報')

@push('header')
<link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/favicon.ico') }}">
<link rel="apple-touch-icon" href="{{ URL::asset('img/nippo.png') }}">
<link rel="stylesheet" href="{{ URL::asset('css/form_nippo.css') }}">
@endpush


@push('nav')
<li class="nav-item"> <a href="{{ route('nippo_sample') }}" class="nav-link"><i class="fa fa-fw fa-calendar fa-2x"></i> </a> </li>
<li class="nav-item"> <a href="{{ route('nippo') }}" class="nav-link"><i class="fa fa-fw fa-calendar fa-2x"></i> </a> </li>

@endpush


@section('content')
    @yield('form')
    @stack('footer')
@endsection



