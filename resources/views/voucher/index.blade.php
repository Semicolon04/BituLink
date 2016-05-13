@extends('layout')

@section('content')
		<h1>Voucher List</h1>
		<a class="btn btn-default pull-right" href="/voucher/new">New</a>
		<br><br>
		<ul class="list-group">
		@foreach($vouchers as $voucher)
			<li class="list-group-item">
				{{ $voucher->vNo}}
				{{"."}}
				{{$voucher->vender}}
				<a class="pull-right" href="/voucher/{{$voucher->id}}">Details</a>
			</li>
		@endforeach
		</ul>
@endsection