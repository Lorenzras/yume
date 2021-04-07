@extends('layouts.app')

@section('title', '日報')

@push('header')
<link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/favicon.ico') }}">
<link rel="apple-touch-icon" href="{{ URL::asset('img/nippo.png') }}">
<link rel="stylesheet" href="{{ URL::asset('css/form_nippo.css') }}">
@endpush


@push('nav')
<li class="nav-item"> <a href="{{ route('welcome') }}" class="nav-link"><i class="fa fa-fw fa-home fa-lg"></i>&nbsp; {{ __('Home') }}</a> </li>
<li class="nav-item"> <a href="{{ route('create') }}" class="nav-link"><i class="fa fa-fw fa-pencil-square fa-lg"></i>&nbsp; {{ __('Report') }}</a> </li>
<li class="nav-item"> <a href="{{ route('view') }}" class="nav-link"><i class="fa fa-fw fa-table fa-lg"></i>&nbsp; {{ __('View') }}</a> </li>
<li class="nav-item"> <a href="{{ route('ranking') }}" class="nav-link"><i class="fa fa-fw fa-trophy fa-lg"></i>&nbsp; {{ __('Ranking') }}</a> </li>
@endpush


@section('content')
    @yield('form')
    @stack('footer')
@endsection



