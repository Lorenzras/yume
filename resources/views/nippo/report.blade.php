@extends('nippo.layout')



@push('header')

@endpush

@section('form')
<div class="container">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-12">
                <h1>月報</h1>
                <div class="card mb-3">
                    <div class="card-body">
                        <label for="month_sel"></label>
                        <input id="month_sel" type="month" name="month_sel" value="{{ $month }}">
                    </div>
                </div>
                @foreach ($weeks as $week)
                    <div class="card mb-1 mx-auto">
                    <div class="card-header text-center">
                        第{{ $loop->iteration }}週　
                        <h4>
                        {{ $loop->iteration == 1 ? 
                            Carbon\carbon::parse($week)
                            ->firstOfMonth()
                            ->format("m月d日") :
                            Carbon\carbon::parse($week)
                            ->startOfWeek(Carbon\carbon::SUNDAY)
                            ->format("m月d日")
                        }} ~ 
                        {{ Carbon\carbon::parse($week)
                            ->format("m月d日")
                        }}
                        </h4>    
                    </div>
                        <div class="card-body">
                            Hello
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>

</div>


@endsection

@push('footer')

@endpush
