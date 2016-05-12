@extends('layout')

@section('content')
		<h1>Sales Invoices List</h1>
		<a class="btn btn-default pull-right" href="/sales_invoices/new">New</a>
		<br><br>
		<ul class="list-group">
		@foreach($sales_invoices as $si)
			<li class="list-group-item">
				{{ $si->description }}
				<a class="pull-right" href="/sales_invoices/{{$si->id}}">Details</a>
			</li>
		@endforeach
		</ul>
@endsection