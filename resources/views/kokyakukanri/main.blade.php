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
            <input class="form_input form-control" type="text" placeholder="キーワードから探す"/>    
        </div>
    </div>
    <div class="row mt-2">
        <div class="col">
            <select　class="custom-select" name="category" id="category">
                <optgroup>
                <option value="豊橋向山店">豊橋向山店</option>
                <option value="豊川中央店">豊川中央店</option>
                <option value="豊川八幡店">豊川八幡店</option>
                <option value="蒲郡店">蒲郡店</option>
                <option value="豊田中央店">豊田中央店</option>
                <option value="豊田大林店">豊田大林店</option>
                <option value="豊橋向山店">豊橋向山店</option>
                <option value="高浜店">高浜店</option>
                <option value="千種店">千種店</option>
                <option value="中川店">中川店</option>
                <option value="大垣店">大垣店</option>

                </optgroup>
            </select>    
        </div>
        <div class="col-auto pl-0">
            <button type="button " class="btn btn-dark form_input "><i class="fas  fa-search"></i></button>    
        </div>
    </div>

    <div class="row mt-3 justify-content-center">
        <div class="col-auto">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">詳細検索</button>
                <button type="button" class="btn btn-secondary">並び変え</button>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">顧客名</th>
                <th scope="col">店舗</th>
                <th scope="col">担当名</th>
                <th scope="col">TEL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">安倍</th>
                <td>豊川店</td>
                <td>吉村</td>
                <td>9999999999</td>
                </tr>
                <tr>
                <th scope="row">花子</th>
                <td>豊橋店</td>
                <td>須賀</td>
                <td>111111111t</td>
                </tr>
                <tr>
                <th scope="row">森</th>
                <td>豊田店</td>
                <td>小池</td>
                <td>3333333333</td>
                </tr>
            </tbody>   
        </table>

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
