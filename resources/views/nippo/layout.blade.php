@extends('layouts.app')

@section('title', '日報')

@push('header')
<link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/favicon.ico') }}">
<link rel="apple-touch-icon" href="{{ URL::asset('img/nippo.png') }}">
<link rel="stylesheet" href="{{ URL::asset('css/form_nippo.css') }}">
@endpush


@push('nav')

@endpush


@section('content')
    @yield('form')
    @stack('footer')
@endsection



