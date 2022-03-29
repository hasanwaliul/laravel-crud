@extends('product.master')
  @section('content')
	<h1>Product information</h1> 
    <form action="" method="">
      <div class="form-group">
        <label for="nam">Product Id:</label>
        <input type="text" id="nam" class="form-control" placeholder="Enter product name" name="name" value="{{$product->id}}">
      </div>
      <div class="form-group">
        <label for="nam">Product Name:</label>
        <input type="text" id="nam" class="form-control" placeholder="Enter product name" name="name" value="{{$product->name}}">
      </div>
      <div class="form-group">
        <label for="nam">Product:</label>
        <img src="images/{{$product->photo}}" alt="">
        <input type="text" id="nam" class="form-control" placeholder="Enter product name" name="name" value="{{$product->photo}}">
      </div><br>
      <div class="form-group">
        <label for="des">Product Description:</label>
        <textarea name="details" id="des"  class="form-control"placeholder="Enter details" cols="20" rows="5">{{$product->detail}}</textarea>
      </div>
    </form>
    <a href="{{URL('products')}}" class="btn btn-primary">Back to product list</a>
  @endsection