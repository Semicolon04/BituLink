@extends('layout')

@section('header')
Suppliers List
<a class="label label-default pull-right" href="/suppliers/new">New</a>
@endsection

@section('content')
		<ul class="list-group">
		@foreach($suppliers as $supplier)
			<li class="list-group-item">
				{{ $supplier->name }}
				<a class="pull-right" href="/suppliers/details/{{$supplier->id}}">Details</a>
			</li>
		@endforeach
		</ul>
@endsection