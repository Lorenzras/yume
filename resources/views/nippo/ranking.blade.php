@extends('nippo.layout')



@push('header')

@endpush

@section('form')
<div class="container">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-12">
                <h1>{{ auth()->user()->name }}さんのランキング</h1>
                <div class="card border-primary mb-3">
                    <div class="card-header text-center">
                        <label for="month_sel"></label>
                        <input id="month_sel" type="month" name="month_sel" value="{{ $month }}">
                    </div>
                    <div class="card-body text-center">
                        <div class="row ">
                            <div class="col-6 col-md-3 ">
                            <span class="text-secondary">{{ __('Interviews') }}</span>
                            <h4>{{ $nippo->sum('interview') }}</h4>
                            </div>
                            <div class="col-6 col-md-3">
                            <span class="text-secondary">{{ __('Assistances') }}</span>
                            <h4>{{ $nippo->sum('assistance') }}</h4>
                            </div>
                            <div class="col-6 col-md-3">
                            <span class="text-secondary">{{ __('Purchases') }}</span>
                            <h4>{{ $nippo->sum('purchase') }}</h4>
                            </div>
                            <div class="col-6 col-md-3">
                            <span class="text-secondary">{{ __('Contracts') }}</span>
                            <h4>{{ $nippo->sum('contract') }}</h4>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-6 col-md-3 ">
                            <span class="text-secondary">{{ __('Settlements') }}</span>
                            <h4>{{ $nippo->sum('settlement') }}</h4>
                            </div>
                            <div class="col-6 col-md-3">
                            <span class="text-secondary">{{ __('Intermediaries') }}</span>
                            <h4>{{ $nippo->sum('intermediary') }}</h4>
                            </div>
                            <div class="col-6 col-md-3">
                            <span class="text-secondary">{{ __('Distributions') }}</span>
                            <h4>{{ $nippo->sum('distribution') }}</h4>
                            </div>
                            <div class="col-6 col-md-3">
                            <span class="text-secondary">{{ __('Rollers') }}</span>
                            <h4>{{ $nippo->sum('roller') }}</h4>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-6 ">
                            <span class="text-secondary">{{ __('Buy') }}</span>
                            <h4>{{ $nippo->sum('buy') }}</h4>
                                </div>
                            <div class="col-6 col-md-6">
                                <span class="text-secondary">{{ __('Sell') }}</span>
                                <h4>{{ $nippo->sum('sell') }}</h4>
                            </div>
                            
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="row ">
                            <div class="col-6 col-md-4 ">
                                <span class="text-secondary">{{ __('Brokerage Fee') }}</span>
                                <h4>{{ $nippo->sum('brokerage') }}</h4>
                            </div>
                            <div class="col-6 col-md-4">
                                <span class="text-secondary">{{ __('Loan Agency') }}</span>
                                <h4>{{ $nippo->sum('loan') }}</h4>
                            </div>
                            <div class="col-6 col-md-4">
                                <span class="text-secondary">{{ __('Fine') }}</span>
                                <h4>{{ $nippo->sum('fine') }}</h4>
                            </div>
                            <div class="col-6 col-md-4">
                                <span class="text-secondary">{{ __('Fire Insurance') }}</span>
                                <h4>{{ $nippo->sum('fire_insurance') }}</h4>
                            </div>
                            <div class="col-6 col-md-4">
                                <span class="text-secondary">{{ __('Reform') }}</span>
                                <h4>{{ $nippo->sum('reform') }}</h4>
                            </div>
                            <div class="col-6 col-md-4">
                                <span class="text-secondary">{{ __('Solar Panel') }}</span>
                                <h4>{{ $nippo->sum('solar_panel') }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('script_sub')

    $("#month_sel").change(function () {
        $d = $('#month_sel').val();
        console.log('/nippo/ranking/' + $d);
        window.location.href = '/nippo/ranking/' + $d;
    });

@endpush
