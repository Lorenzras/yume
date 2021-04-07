@extends('nippo.layout')

@section('title', '日報')

@push('header')

@endpush


@section('content')

<div class="container">
  <!-- Content here -->

<form  action="/nippo/{{ $nippo->id }}" method="POST" class="row g-3">
    @csrf
    @method('PUT')
    <div class="col-12"><h1>{{ __('Journal') }}</h1></div>
    <div class="col-12">
        <hr class="dashed">
    </div>
     <div class=" form-group input-group col-12 ">
        <div class="input-group-prepend ">
            <span class="input-group-text" id="">{{ __('Date') }}</span>
        </div>
        <input type="date" data-date-format="YYYY-MM-DD" class="form-control" value={{$nippo->generated_at}}  id="generated_at" required>
    </div>

    <div class="col-12"><legend >{{ __('Job') }}</legend></div>
    <div class="col-12">
        <hr class="dashed">
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Interviews') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0"  pattern="[0-9]*" value={{$nippo->interview}} name="interview" id="interview" required>
    </div>

    <div class=" form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Assistances') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" value={{$nippo->assistance}} name="assistance" id="assistance" required>
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Purchases') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" value={{$nippo->purchase}} name="purchase" id="purchase" required>
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Contracts') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" value={{$nippo->contract}} name="contract" id="contract" required>
    </div>


    <div class=" form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Settlements') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" value={{$nippo->settlement}} name="settlement" id="settlement" required>
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Intermediaries') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" value={{$nippo->intermediary}} name="intermediary" id="intermediary" required>
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Distributions') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" value={{$nippo->distribution}} name="distribution" id="distribution" required>
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Rollers') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" value={{$nippo->roller}} name="roller" id="roller" required>
    </div>

    <div class="col-12"><legend >{{ __('Type') }}</legend></div>
    <div class="col-12">
        <hr class="dashed">
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Buy') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" value={{$nippo->buy}} name="buy" id="buy" required>
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Sell') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0"  pattern="[0-9]*" value={{$nippo->sell}} name="sell" id="sell" required>
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
        <input type="number" class="form-control" inputmode="decimal"  placeholder="0.00" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" value={{$nippo->brokerage}}  name="brokerage"  id="brokerage" required>
    </div>
    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Loan Agency') }}</span>
        </div>
        <input type="number" class="form-control" inputmode="decimal"  placeholder="0.00" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" value={{$nippo->loan}}  name="loan" id="loan" required>
    </div>
    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Fine') }}</span>
        </div>
        <input type="number" class="form-control" inputmode="decimal"  placeholder="0.00" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" value={{$nippo->fine}} name="fine" id="fine" required>
    </div>

    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Fire Insurance') }}</span>
        </div>
        <input type="number" class="form-control" inputmode="decimal"  placeholder="0.00" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" value={{$nippo->fire_insurance}} name="fire_insurance" id="fire_insurance" required>
    </div>
    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Reform') }}</span>
        </div>
        <input type="number" class="form-control" inputmode="decimal"  placeholder="0.00" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" value={{$nippo->reform}} name="reform" id="reform" required>
    </div>
    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Solar Panel') }}</span>
        </div>
        <input type="number" class="form-control" inputmode="decimal"  placeholder="0.00" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" value={{$nippo->solar_panel}}  name="solar_panel"  id="solar_panel" required>
    </div>

    <div class="col-12"><legend >{{ __('Reflections') }}</legend></div>
    <div class="col-12">
        <hr class="dashed">
    </div>

    <div class="form-group input-group col-12">
        <div class="input-group-prepend">
            <span class="input-group-text align-middle upright" id="">{{ __('Achievement') }}</span>
        </div>
        <textarea class="form-control" rows="5" name="achievements" id="achievements" required>{{$nippo->achievements}}</textarea>
    </div>
    <div class="form-group input-group col-12">
        <div class="input-group-prepend">
            <span class="input-group-text align-middle upright" id="">{{ __('Failures') }}</span>
        </div>
        <textarea class="form-control" rows="5"  name="failures" id="failures" required>{{$nippo->failures}}</textarea>
    </div>
    <div class="form-group input-group col-12 mb-5">
        <div class="input-group-prepend">
            <span class="input-group-text align-middle upright" id="">{{ __('Learned') }}</span>
        </div>
        <textarea class="form-control" rows="5" name="learnings" id="learnings" required>{{$nippo->learnings}}</textarea>
    </div>


    <div class="fixed-bottom">

        <div class="col-12">
            <button type="submit" value="submit" class="btn btn-lg btn-primary btn-block">{{ __('Save') }}</button>
        </div>
    </div>



</form>

</div>


@endsection


@push('footer')
<script defer>
window.onload = function() {
     /* $(function () {

        //$('#example').datetimepicker({"useCurrent":true});
        $('#date_picker ').val(moment().format("YYYY-MM-DD"));
    }); */


};
</script>
@endpush
