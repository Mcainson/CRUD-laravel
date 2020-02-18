@extends('products.layout')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>
@endif

<a class="btn btn-primary" href="/products/create" role="button">Create Product</a>
<br><br>
<table class="table">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->price }}</td>
        <td>
            <div class="row">
                <form action="/products/{{$product->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-link" type="submit"><i class="material-icons">delete</i></button>
                </form>
                <a href="products/{{$product->id}}/edit"><i class="material-icons">edit</i></a>
            </div>
        </td>
    </tr>
    @endforeach
</table>

{{ $products->links() }}

@endsection
