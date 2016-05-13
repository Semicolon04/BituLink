@extends('layout')

@section('content')
		<h1>Edit Supplier Details</h1>
		<form action="/voucher/{{ $voucher->id }}" method="post">
			{{ method_field('PATCH') }}
			{{ csrf_field() }}
			<div class="form-group">
				<label for="vNo">Voucher No </label>
				<input name="vNo" type="text" class="form-control" value="{{$voucher->vNo}}">
			</div>
			<div class="form-group">
				<label for="amount">Amount: </label>
				<input name="amount" type="text" class="form-control" value="{{$voucher->amount}}">
			</div>
			<div class="form-group">
				<label for="description">Description: </label>
				<input name="description" type="text" class="form-control" value="{{$voucher->description}}">
			</div>
			<div class="form-group">
				<label for="signedBy">Signed By: </label>
				<input name="signedBy" type="text" class="form-control" value="{{$voucher->signedBy}}">
			</div>
			<div class="form-group">
				<label for="approvedBy">Approved By: </label>
				<input name="approvedBy" type="text" class="form-control" value="{{$voucher->approvedBy}}">
			</div>

			<div class="form-group">
				<label for="paymentType">Payment Type:</label>
				<select name="paymentType" class="form-control" value="{{$voucher->paymentType}}">
					<option value="cash">Cash</option>
					<option value="cheque">Cheque</option>
				</select>
			</div>

			<div class="form-group">
				<label for="vender"> Vender: </label>
				<input name="vender" type="text" class="form-control" value="{{$voucher->vender}}">
			</div>

			<button type="submit" class="btn btn-primary">Change Details</button>
		</form>
@endsection