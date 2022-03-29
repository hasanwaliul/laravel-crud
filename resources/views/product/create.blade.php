@extends('product.master')
  @section('content')
    <h2>New products entry</h2>
    @if($errors->any())
      <div class="alert alert-success">
        @foreach($errors->all() as $error)
          <div class="alert alert-danger">
            {{$error}} <br>
          </div>
        @endforeach
      </div>
    @endif
      <form action="{{ROUTE('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="nam">Product Name:</label>
          <input type="text" id="nam" class="form-control" placeholder="Enter product name" name="name">
        </div>
        <div class="form-group">
          <label for="des">Description:</label>
          <textarea name="details" id="des"  class="form-control"placeholder="Enter details" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
          <label for="img">Product</label>
          <input type="file" id="img" class="form-control" name="img">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    @endsection