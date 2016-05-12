<?php $__env->startSection('content'); ?>
		<h1>Add New Supplier</h1>
		<?php echo $__env->make('errors.form_errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<form action="/suppliers/create" method="post">
			<?php echo e(csrf_field()); ?>

			<div class="form-group">
				<label for="name">Name: </label>
				<input name="name" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="address">Address: </label>
				<input name="address" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">Email: </label>
				<input name="email" type="text" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Add Supplier</button>
		</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>