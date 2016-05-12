@extends('layout')

@section('content')
		<h1>Suppliers List</h1>
		<a class="btn btn-default pull-right" href="/suppliers/new">New</a>
		<br><br>
		<ul class="list-group">
		@foreach($suppliers as $supplier)
			<li class="list-group-item">
				{{ $supplier->name }}
				<a class="pull-right" href="/suppliers/{{$supplier->id}}">Details</a>
			</li>
		@endforeach
		</ul>
@endsection