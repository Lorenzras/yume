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
                    <h1 class="pagetitle ">{{ auth()->user()->name }}さんのランキング</h1>
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
                        <h4>{{ $nippo['totalPurchase'] }}</h4>
                        </div>
                        <div class="col-6 col-*">
                        <span class="text-secondary">{{ __('Contracts') }}</span>
                        <h4>{{ $nippo['totalContract'] }}</h4>
                        </div>
                        <div class="col-6 col-*">
                        <span class="text-secondary">{{ __('Intermediaries') }}</span>
                        <h4>{{ $nippo['totalIntermediary'] }}</h4>
                        </div>
                        <div class="col-6 col-*">
                        <span class="text-secondary">{{ __('Distributions') }}</span>
                        <h4>{{ $nippo['totalDistribution'] }}</h4>
                        </div>
                        <div class="col-6 col-*">
                        <span class="text-secondary">{{ __('Rollers') }}</span>
                        <h4>{{ $nippo['totalRoller'] }}</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-6 ">
                        <span class="text-secondary">{{ __('Buy') }}</span>
                        <h4>{{ $nippo['totalBuy'] }}</h4>
                            </div>
                        <div class="col-6 col-md-6">
                            <span class="text-secondary">{{ __('Sell') }}</span>
                            <h4>{{ $nippo['totalSell'] }}</h4>
                        </div>
                        
                    </div>
                    <div class="col-12">
                        <hr>
                    </div>
                    <div class="row ">
                        <div class="col-6 col-md-4 ">
                            <span class="text-secondary">{{ __('Brokerage Fee') }}</span>
                            <h4>{{ $nippo['totalBrokerage'] }}</h4>
                        </div>
                        <div class="col-6 col-md-4">
                            <span class="text-secondary">{{ __('Loan Agency') }}</span>
                            <h4>{{ $nippo['totalLoan'] }}</h4>
                        </div>
                        <div class="col-6 col-md-4">
                            <span class="text-secondary">{{ __('Fine') }}</span>
                            <h4>{{ $nippo['totalFine'] }}</h4>
                        </div>
                        <div class="col-6 col-md-4">
                            <span class="text-secondary">{{ __('Fire Insurance') }}</span>
                            <h4>{{ $nippo['totalFireInsurance'] }}</h4>
                        </div>
                        <div class="col-6 col-md-4">
                            <span class="text-secondary">{{ __('Reform') }}</span>
                            <h4>{{ $nippo['totalReform'] }}</h4>
                        </div>
                        <div class="col-6 col-md-4">
                            <span class="text-secondary">{{ __('Solar Panel') }}</span>
                            <h4>{{ $nippo['totalSolarPanel'] }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center mb-3 mt-3">
        <div class="col-5 d-flex align-items-end flex-column">
            <h6 class="mt-2">種別を選択してください:</h6>
        </div>
        <div class="col-3">
            <select name="category" id="category">
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
            </select>
        </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-9">
        <table class="table table-hover" id="records_table">
        <thead>
            <tr>
            <th scope="col">ランキング</th>
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
    $d = $('#month_sel').val();

    $("#month_sel").change(function () {
        
        console.log('/nippo/ranking/' + $d);
        window.location.href = '/nippo/ranking/' + $d;
    });

    

    $("#category").change(function () {
        $.ajax({
            type:'get',
            url: '/nippo/ranking/' + $d + '/' + $('#category').val(),
            data:{'month': $d},
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
