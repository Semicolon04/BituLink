@extends('layout')

@section('content')
		<h1>Add New customer</h1>
		<form action="/customers/create" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name">Name: </label>
				<input name="name" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="address">Address: </label>
				<input name="address" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">Email: </label>
				<input name="email" type="text" class="form-control">
			</div>
            <div class="form-group">
				<label for="phone">Phone: </label>
				<input name="phone" type="text" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Add Customer </button>
		</form>
@endsection