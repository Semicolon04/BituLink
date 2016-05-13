@extends('layout')

@section('content')
	<h1>Voucher Details</h1>
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">
			{{ $voucher->vNo }}
				{{$voucher->vender}}
		</div>
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr><td>vNo</td><td>{{ $voucher->vNo}}</td></tr>
				<tr><td>Vender</td><td>{{ $voucher->vender}}</td></tr>
				<tr><td>Type</td><td>{{ $voucher->paymentType}}</td></tr>
				<tr><td>Description</td><td>{{ $voucher->description}}</td></tr>
				<tr><td>Amount</td><td>{{ $voucher->amount}}</td></tr>
				<tr><td>Signed By</td><td>{{ $voucher->signedBy}}</td></tr>
				<tr><td>Approved BY</td><td>{{ $voucher->approvedBy}}</td></tr>
			</table>
		</div>
	</div>
	<div class="pull-right">
	<a href="/voucher/{{ $voucher->id }}/edit" class="btn btn-primary">Edit Details</a>
		<form action="/voucher/{{ $voucher->id }}" method="post" style="display: inline-block">
			{{ csrf_field() }}
			{{ method_field('DELETE')}}
			<button type="submit" class="btn btn-danger">Delete Voucher</button>
		</form>
	</div>

@endsection