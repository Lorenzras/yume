@extends('shuekibattle.layout')

@section('form')

<div class="container my-5">
  
<h1>収益バトル</h1>
    
<hr>

  <div class="card bg-light">
<form class="card-body" novalidate="" action="" method="" id="bootstrapForm">
  
    <div class="form-group">
        <label class="h4 form-control-label" for="generated_at">日付<abbr class="text-danger" title="This is required">*</abbr></label>
        <input type="date" data-date-format="YYYY-MM-DD" class="form-control" id="generated_at" name="generated_at" required>
    </div>
  
    <div class="form-group">
        <label class="h4 form-control-label" for="select-type">種類<abbr class="text-danger" title="This is required">*</abbr></label>
        <select class="form-control selectpicker" id="select-type" data-live-search="true">
            <option data-tokens="shinchiku">新築(紹介)</option>
            <option data-tokens="shinchiku">新築(請負受注)</option>
            <option data-tokens="futai">付帯(100~200万円未満)</option>
            <option data-tokens="付帯">付帯(200万円以上)</option>
            <option data-tokens="taiyou">太陽光</option>
            <option data-tokens="chikuden">蓄電池</option>
            <option data-tokens="waterserver">ウォーターサーバー</option>
            <option data-tokens="yuushidaikou">融資代行</option>
            <option data-tokens="futai">融資代行</option>
            <option data-tokens="kaitori">買取(案件検討)</option>
            <option data-tokens="kaitori">買取(契約)</option>
            <option data-tokens="risubakku">リースバック(案件検討)</option>
            <option data-tokens="risubakku">リースバック(契約)</option>
            <option data-tokens="9kisei">9期生(合格3回につき)</option>
        </select>
    </div>

    <div class="form-group">
        <label class="h4 form-control-label" for="generated_at">金額<abbr class="text-danger" title="This is required">*</abbr></label>
        <input type="number"  min="0.00" step="0.05" class="form-control" id="kingaku" name="kingaku" required>
    </div>

    <hr>
    <div class="form-group">
        <label class="h4 form-control-label" for="select-type">種類<abbr class="text-danger" title="This is required">*</abbr></label>
        <select class="form-control selectpicker" id="select-type" data-live-search="true">
            <option data-tokens="shinchiku">ゆめてつ</option>
            <option data-tokens="shinchiku">ここすも</option>
            <option data-tokens="futai">すてくら</option>

        </select>
    </div>
    <div class="form-group">
        <label class="h4 form-control-label" for="select-type">店舗<abbr class="text-danger" title="This is required">*</abbr></label>
        <select class="form-control selectpicker" id="select-type" data-live-search="true">
            <option data-tokens="shinchiku">豊田店</option>
            <option data-tokens="shinchiku">豊川店</option>
            <option data-tokens="futai">豊橋店</option>
            <option data-tokens="shinchiku">大林店</option>
            <option data-tokens="shinchiku">八幡店</option>
            <option data-tokens="shinchiku">千種店</option>
            <option data-tokens="shinchiku">高浜店</option>
            <option data-tokens="shinchiku">蒲郡店</option>
            <option data-tokens="shinchiku">豊橋店</option>
            <option data-tokens="shinchiku">大垣店</option>
        </select>
    </div>
    <div class="form-group">
        <label class="h4 form-control-label" for="select-type">担当者<abbr class="text-danger" title="This is required">*</abbr></label>
        <select class="form-control selectpicker" id="select-type" data-live-search="true">
           
        </select>
    </div>

    <hr>

    <div>
        <button type="submit" class="btn btn-secondary">Send Form</button>
    </div>  
  
</form>


</div>
<!-- /.card -->


</div>
<!-- /.container -->

@endsection

@push('script_sub')

process.version;
@endpush
