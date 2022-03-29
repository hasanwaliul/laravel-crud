@extends('product.master')
  @section('content')
	<h1>Product update</h1> 
    <form action="{{ROUTE('products.update', $product->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="nam">Product Name:</label>
        <input type="text" id="nam" class="form-control" placeholder="Enter product name" name="name" value="{{$product->name}}">
      </div><br>
      <div class="form-group">
        <label for="des">Description:</label>
        <textarea name="details" id="des"  class="form-control"placeholder="Enter details" cols="30" rows="10">{{$product->detail}}</textarea>
      </div>
      <button type="submit" class="btn btn-default">Update</button>
    </form>
  @endsection