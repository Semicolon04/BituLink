@extends('layout')

@section('content')
		<h1>Add New Voucher</h1>
		@include('errors.form_errors')
		<form action="/voucher/create" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="vNo">Voucher No </label>
				<input name="vNo" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="amount">Amount: </label>
				<input name="amount" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="description">Description: </label>
				<input name="description" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="signedBy">Signed By: </label>
				<input name="signedBy" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="approvedBy">Approved By: </label>
				<input name="approvedBy" type="text" class="form-control">
			</div>

			<div class="form-group">
				<label for="paymentType">Payment Type:</label>
				<select name="paymentType" class="form-control">
					<option value="cash">Cash</option>
					<option value="cheque">Cheque</option>
				</select>
			</div>

			<div class="form-group">
				<label for="vender"> Vender: </label>
				<input name="vender" type="text" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Add Voucher</button>
			</div>

		</form>
@endsection