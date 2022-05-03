<div id="book" style="display: none;"> 
<div class="row">
        <div class="col-md-2">
       Weight (KG)
        </div>
        <div class="col-md-10">
            <input type="text" class="form-control" id="weight" name="weight" value="{{ old('weight')}}">
            @if($errors->has('weight')) <div style="color: red;"> {{ $errors->first('weight') }} </div> @endif
        </div>
    </div>

    Please, provide weight
</div>