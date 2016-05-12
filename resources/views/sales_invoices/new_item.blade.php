@extends('layout')

@section('content')
<form target="/new" method="post">
	{{ csrf_field() }}
	<div class="form-group">
				<label for="item_code">Item Code: </label>
				<input name="item_code" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="description">Description: </label>
				<input name="description" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="quantity">Quantity: </label>
				<textarea name="quantity" type="text" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label for="price">Price: </label>
				<textarea name="price" type="text" class="form-control"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Add Item</button>
</form>
@endsection