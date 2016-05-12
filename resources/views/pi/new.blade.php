@extends('layout')

@section('content')
		<h1>Add New Performa Invoice</h1>
		@if(count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<form action="/pi/" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="description">Description: </label>
				<input name="description" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="date">Date: </label>
				<input name="date" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="billing_address">Billing Address: </label>
				<textarea name="billing_address" type="text" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label for="shipping_address">Shipping Address: </label>
				<textarea name="shipping_address" type="text" class="form-control"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Add Performa Invoice</button>
		</form>
@endsection