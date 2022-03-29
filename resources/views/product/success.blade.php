
@if($message = Session::get('success'))
	<div class="alert alert-success">
		{{$message}}
	</div>
@endif
@if($message = Session::get('success1'))
	<div class="alert alert-danger">
		{{$message}}
	</div>
@endif
