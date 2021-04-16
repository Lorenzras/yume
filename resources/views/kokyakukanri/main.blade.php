@extends('kokyakukanri.layout')



@push('header')
<link rel="stylesheet" href="{{ URL::asset('css/form_kokyaku.css') }}">
@endpush


@section('form')

<div class="container">
  <!-- Content here -->
<link rel="stylesheet" href="{{ URL::asset('css/form_nippo.css') }}">
    <div class="col-12"><h1 class="pagetitle">{{ __('Customer Management') }}</h1></div>
    <div class="row">
        <div class="col-12">
            <input class="form_input" type="text" placeholder="キーワードから探す"/>    
        </div>
    </div>
 

</div>

@endsection

@push('script_sub')

    $("#generated_at").change(function () {
        $d = $('#generated_at').val();
        console.log('/nippo/' + $d + '/edit');
        window.location.href = '/nippo/' + $d + '/edit';
    });

@endpush
