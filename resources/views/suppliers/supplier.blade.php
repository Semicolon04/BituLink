@extends('layout')

@section('content')
	<h1>Supplier Details</h1>
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">
			{{ $supplier->name }}
		</div>
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr><td>Name</td><td>{{ $supplier->name}}</td></tr>
				<tr><td>Address</td><td>{{ $supplier->address}}</td></tr>
				<tr><td>Email</td><td>{{ $supplier->email}}</td></tr>
			</table>
		</div>
	</div>
	<div class="pull-right">
	<a href="/suppliers/{{ $supplier->id }}/edit" class="btn btn-primary">Edit Details</a>
		<form action="/suppliers/{{ $supplier->id }}" method="post" style="display: inline-block">
			{{ csrf_field() }}
			{{ method_field('DELETE')}}
			<button type="submit" class="btn btn-danger">Delete Supplier</button>
		</form>
        <a href="/pi/new" class="btn btn-primary">ADD PI</a>
	</div>

@endsection