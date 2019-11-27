@extends('backend.master')

@section('content')
<!-- Button trigger modal -->



    @if(Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif

<div class="row" style="padding: 15px;">
    <form action="{{route('product.update',$product->id)}}" role="form" method="post">
        @csrf

        <div class="form-group">
            <label for="">Product Name: </label>
            <input class="form-control" required type="text" value="{{$product->name}}" name="name" >
        </div>

        <div class="form-group">
            <label for="">Product Price: </label>
            <input class="form-control" required type="text" value="{{$product->price}}" name="price" >
        </div>


        <button type="submit" class="btn btn-success">Update Product</button>

    </form>


</div>




@stop
