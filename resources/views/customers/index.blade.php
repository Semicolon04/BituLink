@extends('layout')

@section('content')
		<h1>Customer List</h1>
		<a class="btn btn-default pull-right" href="/customers/new">New</a>
		<br><br>
		<ul class="list-group">

		@foreach($customers as $customer)
			<li class="list-group-item">
				{{ $customer->name }}
				<a class="pull-right" href="/customers/{{$customer->id}}/details">Details</a>
			</li>
		@endforeach
          
		</ul>



@endsection