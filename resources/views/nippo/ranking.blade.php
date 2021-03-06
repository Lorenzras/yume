@extends('nippo.layout')



@push('header')

@endpush

@section('form')

<div class="container-fluid mt-3 ">
    <div class="row d-flex justify-content-center align-items-center ">
        <div class="col-md-12">
            <div class="row">
                <div class="col-12 d-flex justify-content-center  ">
                    <i class="fas fa-crown fa-5x"></i>
                </div>
                <div class="col-12">
                    <div class="pagetitle ">{{ auth()->user()->name }}さん</div>
                </div>
                <div class="col-12">
                    <h1 class="pagetitle ">ランキング</h1>
                </div>

            </div>

            <div class="card border-primary mb-3 mt-4">
                <div class="card-header text-center">
                    <label for="month_sel"></label>
                    <input id="month_sel" type="month" name="month_sel" value="{{ $month }}">
                </div>
                <div class="card-body text-center">
                    <div class="row justify-content-center">

                        <div class="col-6 col-*">
                        <span class="text-secondary">{{ __('Purchases') }}</span>
                        <h2 >{{ $nippo['totalPurchase'] ?? 'X' }}</h2>
                        </div>
                        <div class="col-6 col-*">
                        <span class="text-secondary">{{ __('Contracts') }}</span>
                        <h2>{{ $nippo['totalContract'] ?? 'X'}}</h2>
                        </div>
                        <div class="col-6 col-*">
                        <span class="text-secondary">{{ __('Intermediaries') }}</span>
                        <h2>{{ $nippo['totalIntermediary'] ?? 'X' }}</h2>
                        </div>
                        <div class="col-6 col-*">
                        <span class="text-secondary">{{ __('Distributions') }}</span>
                        <h2>{{ $nippo['totalDistribution'] ?? 'X' }}</h2>
                        </div>
                        <div class="col-6 col-*">
                        <span class="text-secondary">{{ __('Rollers') }}</span>
                        <h2>{{ $nippo['totalRoller'] ?? 'X' }}</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-6 ">
                        <span class="text-secondary">{{ __('Buy') }}</span>
                        <h4>{{ $nippo['totalBuy'] ?? 'X' }}</h4>
                            </div>
                        <div class="col-6 col-md-6">
                            <span class="text-secondary">{{ __('Sell') }}</span>
                            <h4>{{ $nippo['totalSell'] ?? 'X' }}</h4>
                        </div>

                    </div>
                    <div class="col-12">
                        <hr>
                    </div>
                    <div class="row ">
                        <div class="col-6 col-md-4 ">
                            <span class="text-secondary">{{ __('Brokerage Fee') }}</span>
                            <h4>{{ $nippo['totalBrokerage'] ?? 'X' }}</h4>
                        </div>
                        <div class="col-6 col-md-4">
                            <span class="text-secondary">{{ __('Loan Agency') }}</span>
                            <h4>{{ $nippo['totalLoan'] ?? 'X' }}</h4>
                        </div>
                        <div class="col-6 col-md-4">
                            <span class="text-secondary">{{ __('Fine') }}</span>
                            <h4>{{ $nippo['totalFine'] ?? 'X' }}</h4>
                        </div>
                        <div class="col-6 col-md-4">
                            <span class="text-secondary">{{ __('Fire Insurance') }}</span>
                            <h4>{{ $nippo['totalFireInsurance'] ?? 'X' }}</h4>
                        </div>
                        <div class="col-6 col-md-4">
                            <span class="text-secondary">{{ __('Reform') }}</span>
                            <h4>{{ $nippo['totalReform'] ?? 'X' }}</h4>
                        </div>
                        <div class="col-6 col-md-4">
                            <span class="text-secondary">{{ __('Solar Panel') }}</span>
                            <h4>{{ $nippo['totalSolarPanel'] ?? 'X' }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mb-5">
    <div class="row justify-content-center mt-3">
        <div class=" center-block col-xs-6 col-md-4 pt-2">
            {{-- <h1 class="pagetitle ">トップ５</h1> --}}
            <img class="" width="200px" src="{{ URL::asset('img/top5.png') }}" alt="">
        </div>
        <div class="col-xs-6 col-md-4">

            <select　class="custom-select" name="category" id="category">
                <optgroup>
                <option value="purchase">{{ __('Purchases') }}</option>
                <option value="contract">{{ __('Contracts') }}</option>
                <option value="intermediary">{{ __('Intermediaries') }}</option>
                <option value="distribution">{{ __('Distributions') }}</option>
                <option value="roller">{{ __('Rollers') }}</option>
                <option value="buy">{{ __('Buy') }}</option>
                <option value="sell">{{ __('Sell') }}</option>
                <option value="brokerage">{{ __('Brokerage Fee') }}</option>
                <option value="loan">{{ __('Loan Agency') }}</option>
                <option value="fine">{{ __('Fine') }}</option>
                <option value="fire_insurance">{{ __('Fire Insurance') }}</option>
                <option value="reform">{{ __('Reform') }}</option>
                <option value="solar_panel">{{ __('Solar Panel') }}</option>
                </optgroup>
            </select>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-xs-12 col-md-8">
            <table class="table table-hover" id="records_table">
            <thead>
                <tr>
                <th scope="col">ランク</th>
                <th scope="col">数字</th>
                <th scope="col">氏名</th>
                </tr>
            </thead>
            <tbody id="tbody_ranking">

            </tbody>
            </table>

        </div>

    </div>

</div>


@endsection

@push('script_sub')

    $("#month_sel").change(function () {

        window.location.href = '/nippo/ranking/' + $('#month_sel').val();
    });



    $("#category").change(function () {
        $.ajax({
            type:'get',
            url: '/nippo/ranking/' + $('#month_sel').val() + '/' + $('#category').val(),
            data:{'month': $('#month_sel').val()},
            success:function(response){
                //console.log(response);
                //console.log(data);
                // console.log(data.length);
                var rank = 1;
                $("#tbody_ranking").empty();
                $.each(response, function(index, value) {
                    console.log(value.user_id);
                    console.log(value.name);
                    console.log(value.totalResult);
                    $('#records_table').find('tbody').append([
                    '<tr>',
                        '<td>' + rank + '</td>',
                        '<td>' + value.totalResult + '</td>',
                        '<td>' + value.name + '</td>',
                    '</tr>'
                    ].join(''));

                    rank++;
                });
            },
            error:function(){
                console.log(response);
            }
         });

    });

    $('#category').trigger('change');

@endpush
