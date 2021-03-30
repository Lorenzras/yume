@extends('layouts.app')

@section('title', '日報')

@push('header')
<link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/favicon.ico') }}">
<link rel="apple-touch-icon" href="{{ URL::asset('img/nippo.png') }}">
<link rel="stylesheet" href="{{ URL::asset('css/form_nippo.css') }}">
@endpush

@section('content')

<div class="container">
  <!-- Content here -->
  
    <form class="row g-3">
        <div class="col-12"><h1>{{ __('Journal') }}</h1></div>
        <div class="col-12">
            <hr class="dashed">
        </div>
    <div class=" form-group input-group col-12 ">
        <div class="input-group-prepend ">
            <span class="input-group-text" id="">{{ __('Date') }}</span>
        </div>
        <input type="date" data-date-format="YYYY-MM-DD" class="form-control" value="" id="date_picker" required>
    </div>

    <div class="col-12"><legend >{{ __('Job') }}</legend></div>
    <div class="col-12">
        <hr class="dashed">
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Interviews') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0"  pattern="[0-9]*" id="interview" required>
    </div>

    <div class=" form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Assistances') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" id="mendansu" required>
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Purchases') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" id="mendansu" required>
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Contracts') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" id="mendansu" required>
    </div>

    
    <div class=" form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Settlements') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" id="mendansu" required>
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Intermediaries') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" id="mendansu" required>
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Distributions') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" id="mendansu" required>
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Rollers') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" id="mendansu" required>
    </div>

    <div class="col-12"><legend >{{ __('Type') }}</legend></div>
    <div class="col-12">
        <hr class="dashed">
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Buy') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" id="mendansu" required>
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Sell') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0"  pattern="[0-9]*" id="mendansu" required>
    </div>
    <!-- Money -->
    <div class="col-12"><legend >{{ __('Contract Details') }}</legend></div>
    <div class="col-12">
        <hr class="dashed">
    </div>

    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Brokerage Fee') }}</span>
        </div>
        <input type="number" class="form-control" inputmode="decimal"  placeholder="0.00" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" id="mendansu" required>
    </div>
    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Loan Agency') }}</span>
        </div>
        <input type="number" class="form-control" inputmode="decimal"  placeholder="0.00" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" id="mendansu" required>
    </div>
    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Fine') }}</span>
        </div>
        <input type="number" class="form-control" inputmode="decimal"  placeholder="0.00" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" id="mendansu" required>
    </div>

    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Fire Insurance') }}</span>
        </div>
        <input type="number" class="form-control" inputmode="decimal"  placeholder="0.00" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" id="mendansu" required>
    </div>
    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Reform') }}</span>
        </div>
        <input type="number" class="form-control" inputmode="decimal"  placeholder="0.00" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" id="mendansu" required>
    </div>
    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Solar Panel') }}</span>
        </div>
        <input type="number" class="form-control" inputmode="decimal"  placeholder="0.00" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" id="mendansu" required>
    </div>

    <div class="col-12"><legend >{{ __('Reflections') }}</legend></div>
    <div class="col-12">
        <hr class="dashed">
    </div>

    <div class="form-group input-group col-12">
        <div class="input-group-prepend">
            <span class="input-group-text align-middle upright" id="">{{ __('Achievement') }}</span>
        </div>
        <textarea class="form-control" rows="5" id="comment" required></textarea>
    </div>
    <div class="form-group input-group col-12">
        <div class="input-group-prepend">
            <span class="input-group-text align-middle upright" id="">{{ __('Failures') }}</span>
        </div>
        <textarea class="form-control" rows="5" id="comment" required></textarea>
    </div>
    <div class="form-group input-group col-12 mb-5">
        <div class="input-group-prepend">
            <span class="input-group-text align-middle upright" id="">{{ __('Learned') }}</span>
        </div>
        <textarea class="form-control" rows="5" id="comment" required></textarea>
    </div>

    <div class="fixed-bottom">

        <div class="col-12">
            <button type="submit" class="btn btn-lg btn-primary btn-block">{{ __('Save') }}</button>
        </div>
    </div>


    </form>

</div>


@endsection


@push('footer')
<script defer>
window.onload = function() {
     $(function () {

        //$('#example').datetimepicker({"useCurrent":true});
        $('#date_picker ').val(moment().format("YYYY-MM-DD"));
    }); 
    
  
};
</script>
@endpush