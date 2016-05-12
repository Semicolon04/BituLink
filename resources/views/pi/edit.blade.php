@extends('layout')

@section('content')
		<h1>Edit Performa Invoice Details</h1>
		<form action="/pi/{{ $pi->id }}" method="post">
			{{ method_field('PATCH') }}
			{{ csrf_field() }}
			<div class="form-group">
				<label for="description">Description: </label>
				<input name="description" type="text" class="form-control"
							 value="{{$pi->description}}">
			</div>
			<div class="form-group">
				<label for="date">Date: </label>
				<input name="date" type="text" class="form-control"
							 value="{{$pi->date}}">
			</div>
			<div class="form-group">
				<label for="billing_address">Billing Address: </label>
				<input name="billing_address" type="text" class="form-control"
							 value="{{$pi->billing_address}}">
			</div>
			<div class="form-group">
				<label for="shipping_address">Shipping Address: </label>
				<input name="shipping_address" type="text" class="form-control"
							 value="{{ $pi->shipping_address}}">
			</div>
			<button type="submit" class="btn btn-primary">Change Details</button>
		</form>
@endsection