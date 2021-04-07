@extends('nippo.layout')



@push('header')

@endpush


@section('form')

<div class="container">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                <h1>{{ __('Ranking') }}</h1>
                <div class="card">
                    <div class="card-body">
                        <label for="month"></label>
                        <input id="month_sel" type="month" name="month_sel" value="2017-06">
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>


@endsection

@push('footer')

@endpush
