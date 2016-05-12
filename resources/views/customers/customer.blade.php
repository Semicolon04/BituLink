@extends('layout')

@section('content')
	<h1>Customer Details</h1>
	<div class="panel panel-default">
		<div class="panel-heading">{{ $customer->name }}</a></div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr><td>Name</td><td>{{ $customer->name}}</td></tr>
				<tr><td>Address</td><td>{{ $customer->address}}</td></tr>
				<tr><td>Email</td><td>{{ $customer->email}}</td></tr>
                <tr><td>Phone</td><td>{{ $customer->phone}}</td></tr>
			</table>
		</div>
	</div>
<div  class="container">
	<a href="/customers/{{ $customer->id }}/edit" class="btn btn-primary">Edit Details</a>
	<form action="/customers/{{ $customer->id }}" method="post">
			{{ csrf_field() }}
			{{ method_field('DELETE')}}
		<button type="submit" class="btn btn-danger">Delete Customer</button>
	</form>

</div>

@endsection