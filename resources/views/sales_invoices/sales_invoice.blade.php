@extends('layout')

@section('content')
	<h1>Sales Invoice Details</h1>
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">
			{{ $sales_invoice->name }}
		</div>
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr><td>Description</td><td>{{ $sales_invoice->description}}</td></tr>
				<tr><td>Date</td><td>{{ $sales_invoice->date}}</td></tr>
				<tr><td>Billing Address</td><td>{{ $sales_invoice->billing_address}}</td></tr>
				<tr><td>Shipping Address</td><td>{{ $sales_invoice->shipping_address}}</td></tr>
			</table>
		</div>
	</div>
	<div class="pull-right">
	
		
	<a href="/sales_invoices/{{ $sales_invoice->id }}/edit" class="btn btn-primary">Edit Details</a>
	<form action="/sales_invoices/{{ $sales_invoice->id }}" method="post" style="display: inline-block">
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
			@foreach($sales_invoice->items() as $item)
				<tr>
					<td>{{$item->item_code}}</td>
					<td>{{$item->description}}</td>
					<td>{{$item->quantity}}</td>
					<td>{{$item->price}}</td>
					<td>{{$item->quantity * $item->price}}</td>
					<td>Delete</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<a class="btn btn-default" href="/sales_invoices/{{$sales_invoice->id}}/new_item">Add Item</a>
@endsection