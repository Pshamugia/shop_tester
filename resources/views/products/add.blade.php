@extends('layout')

@section('content')

<form action="{{ route ('products.store')}}" method="POST">
    @csrf
<div class="row">
    <div class="col-md-4"> 
Product Add 
</div>
<div class="col-md-8" style="text-align: right;"> 
<input type="submit" value="save"> 
 
<input type="button" value="cancel" onclick="document.location.href='{{route ('products.index')}}'">
 
</div>
</div>
<hr>
<br>
<script>
    function productTypeSwitcher(value) {
        if(value == 1) { 
            $('#dvd').show(); 
            $('#furniture').hide(); 
            $('#book').hide(); 
        } 
        if(value == 2) { 
            $('#furniture').show(); 
            $('#dvd').hide(); 
            $('#book').hide(); 
        } if(value == 3) { 
            $('#book').show(); 
            $('#furniture').hide(); 
            $('#dvd').hide(); 
        }
    }
</script>

    <div class="row">
        <div class="col-md-2">
            SKU
        </div>
        <div class="col-md-10">
            <input type="text" class="form-control" id="sku" name="sku" value="{{ old('sku') }}">
            @if($errors->has('sku')) <div style="color: red;"> {{ $errors->first('sku') }} </div> @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
        Name
        </div>
        <div class="col-md-10">
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            @if($errors->has('name')) <div style="color: red;"> {{ $errors->first('name') }} </div> @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
        Price
        </div>
        <div class="col-md-10">
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
            @if($errors->has('price')) <div style="color: red;"> {{ $errors->first('price') }} </div> @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
        Type Switcher
        </div>
        <div class="col-md-10">
        <select class="form-control" id="productType" name="productType" onchange="productTypeSwitcher(this.value)">
            <option value="1" {{ (old('productType') == 1 ? 'selected' : '') }}>DVD</option>
            <option value="2" {{ (old('productType') == 2 ? 'selected' : '') }}>Furniture</option>
            <option value="3" {{ (old('productType') == 3 ? 'selected' : '') }}>Book</option>
        </select> 
        </div>
    </div> 
    @include('products/inc/book')
    @include('products/inc/dvd')
    @include('products/inc/furniture')

</form>

<script>
    productTypeSwitcher({{ old('productType') }});
</script>

@endsection