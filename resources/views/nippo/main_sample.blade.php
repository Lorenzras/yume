@extends('nippo.layout')


@section('form')
<div class="container">
  <!-- Content here -->

    <form class="row g-3">
        <div class="col-12"><h1>{{ __('Journal') }}</h1></div>
        <div class="col-12">
            <hr class="dashed">
        </div>
    <div class=" form-group input-group col-12 ">
        <div class="input-group-prepend ">
            <span class="input-group-text" id="">{{ __('Date') }}</span>
        </div>
        <input type="date" data-date-format="YYYY-MM-DD" class="form-control" value="" id="date_picker" required>
    </div>


    @include('nippo.parts.reflection')
    @include('nippo.parts.dynamictable')
    
    </form>
</div>
@endsection


@push('footer')

@endpush
