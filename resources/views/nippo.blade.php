@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ URL::asset('css/form_nippo.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/form_global.css') }}">

<div class="container">
  <!-- Content here -->
  <hr class="dashed"/>
    <form class="row g-3">
    <div class=" form-group input-group col-12 ">
        <div class="input-group-prepend ">
            <span class="input-group-text" id="">{{ __('Date') }}</span>
        </div>
        <input type="date" class="form-control" value="" id="date_today" required>
    </div>

    <div class="col-12">
        <hr class="dashed">
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Interviews') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" id="mendansu" required>
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
    <div class="form-group input-group col-12">
        <div class="input-group-prepend">
            <span class="input-group-text align-middle upright" id="">{{ __('Learned') }}</span>
        </div>
        <textarea class="form-control" rows="5" id="comment" required></textarea>
    </div>


    <div class="col-12">
        <button type="submit" class="btn btn-lg btn-primary btn-block">{{ __('Save') }}</button>
    </div>

    </form>
    </div>



@endsection
