@extends('product.master')
@section('content')
	<h1>This is the list of products</h1>
	<div class="container">      
	<a href="{{URL('products/create')}}" class="btn btn-success">New Entry </a>  
	<!-- <a href="{{ROUTE('products.create')}}" class="btn btn-success">New Entry </a>  -->

	@include('product.success')
	@include('product.error')

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Details</th>
        <th>Photo</th>
        <th>Action</th>
      </tr>
    </thead>
    	@foreach ($products as $product)
    <tbody>
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->detail}}</td>
        <td>{{$product->photo}}</td>
        <td>	        
            <form action="{{ route('products.destroy',$product->id) }}" method="POST">   
                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>   

                @csrf
                @method('DELETE')
  
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        	<!--  <button class="btn btn-info" href="">Edit</button>
        	<button class="btn btn-danger">Delete</button> -->
        </td>
      </tr>
    </tbody>
    	@endforeach
  </table>
@endsection