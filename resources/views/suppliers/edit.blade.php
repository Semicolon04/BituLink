@extends('layout')

@section('content')
		<h1>Edit Supplier Details</h1>
		<form action="/suppliers/{{ $supplier->id }}" method="post">
			{{ method_field('PATCH') }}
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name">Name: </label>
				<input name="name" type="text" class="form-control"
							 value="{{$supplier->name}}">
			</div>
			<div class="form-group">
				<label for="address">Address: </label>
				<input name="address" type="text" class="form-control"
							 value="{{$supplier->address}}">
			</div>
			<div class="form-group">
				<label for="email">Email: </label>
				<input name="email" type="text" class="form-control"
							 value="{{ $supplier->email}}">
			</div>
			<button type="submit" class="btn btn-primary">Change Details</button>
		</form>
@endsection