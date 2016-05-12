@extends('layout')

@section('content')
	<h1>Performa Invoice Details</h1>
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">
			{{ $pi->description }}
		</div>
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr><td>Description</td><td>{{ $pi->description}}</td></tr>
				<tr><td>Date</td><td>{{ $pi->date}}</td></tr>
				<tr><td>Billing Address</td><td>{{ $pi->billing_address}}</td></tr>
				<tr><td>Shipping Address</td><td>{{ $pi->shipping_address}}</td></tr>
			</table>
		</div>
	</div>
	<div class="pull-right">
	<a href="/pi/{{ $pi->id }}/edit" class="btn btn-primary">Edit Details</a>
		<form action="/pi/{{ $pi->id }}" method="post" style="display: inline-block">
			{{ csrf_field() }}
			{{ method_field('DELETE')}}
			<button type="submit" class="btn btn-danger">Delete Invoice</button>
		</form>
	</div>
	<br><br>
	<h3>Items</h3>
	<table class="table">
		<thead>
			<tr>
				<th>Item Code</th>
				<th>Description</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Total Amount</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($pi->items as $item)
				<tr>
					<td>{{$item->item_code}}</td>
					<td>{{$item->description}}</td>
					<td>{{$item->quantity}}</td>
					<td>{{$item->price}}</td>
					<td>{{$item->quantity * $item->price}}</td>
					<td>
						<form target="/pi/{{$item->id}}" method="post">
							{{ csrf_field() }}
							{{ method_field('delete')}}
							<button type="submit" class="btn btn-danger btn-small">Delete</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<h3>Add a New Item</h3>
	<form target="/pi/{{$pi->id}}" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="item_code">Item Code: </label>
				<input name="item_code" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="description">Description: </label>
				<input name="description" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="quantity">Quantity: </label>
				<input name="quantity" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="price">Price: </label>
				<input name="price" type="text" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Add Item</button>
	</form>

<h3>Add a PO</h3>

<a href="/po/{{$pi->id}}" class="btn btn-primary">Add PO</a>

@endsection