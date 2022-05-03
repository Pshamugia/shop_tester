@extends('layout')

@section('content')
<form method="post" action="{{ route('products.delete')}}">
    @csrf
<div class="row">
    <div class="col-md-4"> 
Product Add 
</div>
<div class="col-md-8" style="text-align: right;"> 
<input type="button" value="ADD" onclick="document.location.href='{{ route('products.add') }}'">
 
<input type="submit" value="MASS DELETE">
 
</div>
</div>
<hr>
 

<div class="row">

    @foreach ($products as $product)
    <div class="col-md-4">
        
        <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <div> <input type="checkbox" name="ids[]" value="{{ $product->id }}"> </div>
            <div class="card-text"> {{$product->name}} </div>
            <div class="card-text"> {{$product->sku}} </div>
            <div class="card-text"> {{$product->price}} </div>
            @foreach ($product->options as $option)
                {{ $option->name }}: {{ $option->value }}<br>
            @endforeach
        </div>
        </div>
    </div>
@endforeach
</div>
</form>
@endsection