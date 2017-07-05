@extends('layouts.master')

@section('content')

<div class="col-sm-8 blog-main">

	<h1>Login</h1>

	<form method="POST" action="/login">
	
		{{ csrf_field() }}

		<div class="form-group">
			<label for="email">Email</label>
			<input class="form-control" type="email" id="email" name="email">
		</div>

		<div class="form-group">
			<label for="password">Password</label>
			<input class="form-control" type="password" id="password" name="password">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Sign In</button>
		</div>

		@include('layouts.errors')

	</form>

</div>

@endsection