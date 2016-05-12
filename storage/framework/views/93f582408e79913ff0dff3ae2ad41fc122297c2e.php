<?php $__env->startSection('content'); ?>
		<h1>Add New Performa Invoice</h1>
		<?php if(count($errors) > 0): ?>
			<div class="alert alert-danger">
				<ul>
					<?php foreach($errors->all() as $error): ?>
						<li><?php echo e($error); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>
		<form action="/pi/" method="post">
			<?php echo e(csrf_field()); ?>

			<div class="form-group">
				<label for="description">Description: </label>
				<input name="description" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="date">Date: </label>
				<input name="date" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="billing_address">Billing Address: </label>
				<textarea name="billing_address" type="text" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label for="shipping_address">Shipping Address: </label>
				<textarea name="shipping_address" type="text" class="form-control"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Add Performa Invoice</button>
		</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>