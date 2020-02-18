@extends('products.layout')
@section('content')
<form action="/products" method="post">
    @csrf
    <div class="form-row">
        <div class="col-8">
            <label for="name">Name</label>
            <input class="form-control" type="text" value="" name="name" id="name">
        </div>
        <div class="col-4">
            <label for="price">Price</label>
            <input class="form-control" type="text" value="" name="price" id="price">
        </div>
    </div>
    <div class="form-row">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" cols="15" rows="5"></textarea>
    </div>
    <br>
    <div class="col-12"><button class="btn btn-primary" type="submit">Create</button></div>
</form>
    
@endsection