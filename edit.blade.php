@extends('products.layout')
@section('content')
<form action="/products/{{$product->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-row">
        <div class="col-8">
            <label for="name">Name</label>
            <input class="form-control" type="text" value="{{$product->name}}" name="name" id="name">
        </div>
        <div class="col-4">
            <label for="price">Price</label>
            <input class="form-control" type="text" value="{{$product->price}}" name="price" id="price">
        </div>
    </div>
    <div class="form-row">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" cols="15" rows="5">{{$product->description}}</textarea>
    </div>
    <div class="col-12"><button class="btn btn-primary" type="submit">Editar</button></div>
</form>
    
@endsection