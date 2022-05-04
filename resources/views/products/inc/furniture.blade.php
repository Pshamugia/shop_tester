<div id="furniture" style="display: none;"> 
    <div class="row">
        <div class="col-md-2">
       Height (CM)
        </div>
        <div class="col-md-10">
            <input type="text" class="form-control" id="height" name="height" value="{{ old('height')}}">
            @if($errors->has('height')) <div style="color: red;"> {{ $errors->first('height') }} </div> @endif

        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
       Width (CM)
        </div>
        <div class="col-md-10">
            <input type="text" class="form-control" id="width" name="width" value="{{ old('width') }}">
            @if($errors->has('width')) <div style="color: red;"> {{ $errors->first('width') }} </div> @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
       Lenght (CM)
        </div>
        <div class="col-md-10">
            <input type="text" class="form-control" id="length" name="length" value="{{ old('length')}}">
            @if($errors->has('length')) <div style="color: red;"> {{ $errors->first('length') }} </div> @endif

        </div>
    </div>

    Please, provide dimensions in HxWxL format
</div>