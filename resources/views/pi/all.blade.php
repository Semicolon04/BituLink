@extends('layout')

@section('content')
		<h1>Performa Invoices List</h1>
		<a class="btn btn-default pull-right" href="/pi/new">New</a>
		<br><br>
		<ul class="list-group">
		@foreach($pis as $pi)
			<li class="list-group-item">
				{{ $pi->description }}
				<a class="pull-right" href="/pi/{{$pi->id}}">Details</a>
			</li>
		@endforeach
		</ul>
@endsection