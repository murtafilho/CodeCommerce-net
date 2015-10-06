@extends('app')

@section('content')
    <div class="container">
        <h1>Products</h1>
        <a href="{{route('products.create')}}" class="btn btn-default">New Product</a>
        <br><br>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Price</th>
                <th>Featured</th>
                <th>Recommended</th>
                <th>Action</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{!! Form::checkbox('featured', $product->featured, $product->featured,['disabled'=>'disabled']) !!}</td>
                    <td>{!! Form::checkbox('recommended', $product->recommended, $product->recommended,['disabled'=>'disabled']) !!}</td>
                    <td>
                        <a href={{route('products.destroy',['id'=>$product->id])}}>Delete</a> |
                        <a href={{route('products.edit',['id'=>$product->id])}}>Edit</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {!! $products->render() !!}
    </div>
@endsection




