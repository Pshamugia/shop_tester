<div id="dvd"> 
    <div class="row">
        <div class="col-md-2">
        Size (MB)
        </div>
        <div class="col-md-10">
            <input type="text" class="form-control" id="size" name="size" value="{{ old('size')}}">
            @if($errors->has('size')) <div style="color: red;"> {{ $errors->first('size') }} </div> @endif
        </div>
    </div>

    Please, provide size
</div>