@extends('layouts.app')

@section('title', '収益バトル')

@push('header')

@endpush


@push('nav')

@endpush


@section('content')
    @yield('form')
@endsection

@push('script')
    @stack('script_sub')
@endpush
