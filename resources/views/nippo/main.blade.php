@extends('nippo.layout')



@push('header')

@endpush


@section('form')

<div class="container">
  <!-- Content here -->
    @if(isset($nippo) && !empty($nippo)) 
      
        <form  action="{{ route('nippo.update', $nippo->generated_at) }}" method="POST" class="row g-3">
        @method('put')
    @else
      
        <form action="{{ route('nippo.store') }}" method="POST" class="row g-3">
        
    @endif

    @csrf
    
    <div class="col-12"><h1>{{ __('Journal') }}</h1></div>
    <div class="col-12">
        <hr class="dashed">
    </div>
     <div class=" form-group input-group col-12 ">
        <div class="input-group-prepend ">
            <span class="input-group-text" id="">{{ __('Date') }}</span>
        </div>
        <input type="date" data-date-format="YYYY-MM-DD" class="form-control" value="{{ old('generated_at', $nippo->generated_at ?? $generated_at ) }}"  id="generated_at" name="generated_at" required>
    </div>
    
    <div class="col-12"><legend >{{ __('Job') }}</legend></div>
    <div class="col-12">
        <hr class="dashed">
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Interviews') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0"  pattern="[0-9]*" value="{{ old('interview', $nippo->interview ?? 0) }}" name="interview" id="interview" >
    </div>

    <div class=" form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Assistances') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" value="{{ old('assistance', $nippo->assistance ?? 0) }}" name="assistance" id="assistance" >
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Purchases') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" value="{{ old('purchase', $nippo->purchase ?? 0) }}" name="purchase" id="purchase" >
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Contracts') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" value="{{ old('contract', $nippo->contract ?? 0) }}" name="contract" id="contract" >
    </div>


    <div class=" form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Settlements') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" value="{{ old('settlement', $nippo->settlement ?? 0 ) }}" name="settlement" id="settlement" >
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Intermediaries') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" value="{{ old('intermediary', $nippo->intermediary ?? 0 ) }}" name="intermediary" id="intermediary" >
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Distributions') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" value="{{ old('distribution', $nippo->distribution ?? 0 ) }}" name="distribution" id="distribution" >
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Rollers') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" value="{{ old('roller', $nippo->roller ?? 0 ) }}" name="roller" id="roller" >
    </div>

    <div class="col-12"><legend >{{ __('Type') }}</legend></div>
    <div class="col-12">
        <hr class="dashed">
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Buy') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0" pattern="[0-9]*" value="{{ old('buy', $nippo->buy ?? 0 ) }}" name="buy" id="buy" required>
    </div>

    <div class="form-group input-group col-sm-6">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Sell') }}</span>
        </div>
        <input type="number" class="form-control" placeholder="0"  pattern="[0-9]*" value="{{ old('sell', $nippo->sell ?? 0 ) }}" name="sell" id="sell" required>
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
        <input type="number" class="form-control" inputmode="decimal"  placeholder="0.00" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" value="{{ old('brokerage', $nippo->brokerage ?? 0 ) }}"  name="brokerage"  id="brokerage" required>
    </div>
    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Loan Agency') }}</span>
        </div>
        <input type="number" class="form-control" inputmode="decimal"  placeholder="0.00" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" value="{{ old('loan', $nippo->loan ?? 0 ) }}"  name="loan" id="loan" required>
    </div>
    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Fine') }}</span>
        </div>
        <input type="number" class="form-control" inputmode="decimal"  placeholder="0.00" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" value="{{ old('fine', $nippo->fine ?? 0 ) }}" name="fine" id="fine" required>
    </div>

    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Fire Insurance') }}</span>
        </div>
        <input type="number" class="form-control" inputmode="decimal"  placeholder="0.00" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" value="{{ old('fire_insurance', $nippo->fire_insurance ?? 0 ) }}" name="fire_insurance" id="fire_insurance" required>
    </div>
    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Reform') }}</span>
        </div>
        <input type="number" class="form-control" inputmode="decimal"  placeholder="0.00" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" value="{{ old('reform', $nippo->reform ?? 0 ) }}" name="reform" id="reform" required>
    </div>
    <div class="form-group input-group col-sm-6 col-md-4">
        <div class="input-group-prepend numbers">
            <span class="input-group-text" id="">{{ __('Solar Panel') }}</span>
        </div>
        <input type="number" class="form-control" inputmode="decimal"  placeholder="0.00" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" value="{{ old('solar_panel', $nippo->solar_panel ?? 0 ) }}"  name="solar_panel"  id="solar_panel" required>
    </div>

    <div class="col-12"><legend >{{ __('Reflections') }}</legend></div>
    <div class="col-12">
        <hr class="dashed">
    </div>

    <div class="form-group input-group col-12">
        <div class="input-group-prepend">
            <span class="input-group-text align-middle upright" id="">{{ __('Achievement') }}</span>
        </div>
        <textarea class="form-control" rows="5" name="achievements" id="achievements" required>{{ old('achievements', $nippo->achievements ?? null ) }}</textarea>
    </div>
    <div class="form-group input-group col-12">
        <div class="input-group-prepend">
            <span class="input-group-text align-middle upright" id="">{{ __('Failures') }}</span>
        </div>
        <textarea class="form-control" rows="5"  name="failures" id="failures" required>{{ old('failures', $nippo->failures ?? null ) }}</textarea>
    </div>
    <div class="form-group input-group col-12 mb-5">
        <div class="input-group-prepend">
            <span class="input-group-text align-middle upright" id="">{{ __('Learned') }}</span>
        </div>
        <textarea class="form-control" rows="5" name="learnings" id="learnings" required>{{ old('learnings', $nippo->learnings ?? null) }}</textarea>
    </div>


    <div class="fixed-bottom">

        <div class="col-12">
            <button type="submit" value="submit" class="btn btn-lg btn-primary btn-block">{{ __('Save') }}</button>
        </div>
    </div>
</form>

</div>

@endsection

@push('script_sub')

    $("#generated_at").change(function () {
        $d = $('#generated_at').val();
        console.log('/nippo/' + $d + '/edit');
        window.location.href = '/nippo/' + $d + '/edit';
    });

@endpush
