@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ URL::asset('css/form_nippo.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/form_global.css') }}">

<div class="container">
  <!-- Content here -->


    <form class="row g-3">

        <div class="col-12"><legend >{{ __('Date') }}</legend></div>
        <div class="col-12">
            <hr class="dashed">
        </div>
    <div class=" form-group input-group col-12 ">
        <div class="input-group-prepend ">
            <span class="input-group-text" id="">{{ __('Date') }}</span>
        </div>
        <input type="date" data-date-format="YYYY-MM-DD" class="form-control" value="" id="date_today" required>
    </div>

    <div class="col-12"><legend >Numbers</legend></div>
    <div class="col-12">
        <hr class="dashed">
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Interviews') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" id="interview" required>
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

    <div class="col-12"><legend >Money</legend></div>
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

    <div class="col-12"><legend >Story</legend></div>
    <div class="col-12">
        <hr class="dashed">
    </div>

    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Brokerage Fee') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" id="mendansu" required>
    </div>
    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Loan Agency') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" id="mendansu" required>
    </div>
    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" placeholder="0" id="">{{ __('Fine') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" id="mendansu" required>
    </div>

    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Fire Insurance') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" id="mendansu" required>
    </div>
    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Reform') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" id="mendansu" required>
    </div>
    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Solar Panel') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" id="mendansu" required>
    </div>

    <div class="col-12"><legend >Story</legend></div>
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

    <script>
        window.onload = function() {
        var today = new Date();
        var month = (today.getMonth()+1);
        if ((month+'').length == 1) {
            month = "0" + month;
        }
        var date = today.getFullYear()+'-' +month+'-'+today.getDate();
        document.getElementById("date_today").value = date;

        }
    </script>

@endsection
