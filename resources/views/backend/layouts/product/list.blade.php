@extends('backend.master')

@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add New Product
</button>


    @if(Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif

<div class="row" style="padding: 15px;">
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

@foreach($products as $key=>$singleProduct)


    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$singleProduct->name}}</td>
      <td>{{$singleProduct->price}}</td>
      <td>{{$singleProduct->status}}</td>
      <td>
      	<a href="" class="btn btn-primary">view {{$singleProduct->id}}</a>

      </td>
    </tr>

   @endforeach


  </tbody>
    </table>
    {{$products->links()}}

</div>





<!-- add new product Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          <form action="{{route('product.create')}}" method="POST" role="form">
              @csrf
              <div class="form-group">
              <label for="product">Product Name</label>
              <input required id="product" name="product_name" type="text" class="form-control" placeholder="Please Enter product name">
              </div>

              <div class="form-group">
              <label for="price">Product Price</label>
              <input required id="price" name="product_price" type="number" class="form-control" placeholder="Please Enter product Price">
              </div>

            <button class="btn btn-success form-control" type="submit">Save Product</button>
          </form>



      </div>

    </div>
  </div>
</div>


@stop
