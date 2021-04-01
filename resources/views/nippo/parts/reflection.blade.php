
<div class="col-12"><legend >{{ __('Reflections') }}</legend></div>
    <div class="col-12">
        <hr class="dashed">
    </div>
<div class="form-group input-group  col-12">
        <div class="input-group-prepend">
            <span class="input-group-text align-middle input-required  upright" id="">{{ __('Achievement') }}</span>
        </div>
        <textarea class="form-control" rows="5" id="comment" required></textarea>
    </div>
    <div class="form-group input-group col-12">
        <div class="input-group-prepend">
            <span class="input-group-text align-middle input-required  upright" id="">{{ __('Failures') }}</span>
        </div>
        <textarea class="form-control" rows="5" id="comment" required></textarea>
    </div>
    <div class="form-group input-group col-12 mb-5">
        <div class="input-group-prepend">
            <span class="input-group-text input-required  align-middle upright" id="">{{ __('Learned') }}</span>
        </div>
        <textarea class="form-control" rows="5" id="comment" required></textarea>
    </div>

    <div class="fixed-bottom">

        <div class="col-12">
            <button type="submit" class="btn btn-lg btn-primary btn-block">{{ __('Save') }}</button>
        </div>
    </div>