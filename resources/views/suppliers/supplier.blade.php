@extends('layout')

@section('header')
	Supplier Details
@endsection
@section('content')
	<div class="panel panel-default">
	<div class="panel-heading">{{ $supplier->name }}</a></div>
	<div class="panel-body">
		<table>
			<tr><td>Name</td><td>{{ $supplier->name}}</td></tr>
			<tr><td>Address</td><td>{{ $supplier->address}}</td></tr>
			<tr><td>Email</td><td>{{ $supplier->email}}</td></tr>
		</table>
	</div>
</div>
@endsection