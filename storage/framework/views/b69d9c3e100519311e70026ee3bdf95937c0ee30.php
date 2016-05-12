<?php $__env->startSection('content'); ?>
		<h1>Edit Supplier Details</h1>
		<form action="/suppliers/<?php echo e($supplier->id); ?>" method="post">
			<?php echo e(method_field('PATCH')); ?>

			<?php echo e(csrf_field()); ?>

			<div class="form-group">
				<label for="name">Name: </label>
				<input name="name" type="text" class="form-control"
							 value="<?php echo e($supplier->name); ?>">
			</div>
			<div class="form-group">
				<label for="address">Address: </label>
				<input name="address" type="text" class="form-control"
							 value="<?php echo e($supplier->address); ?>">
			</div>
			<div class="form-group">
				<label for="email">Email: </label>
				<input name="email" type="text" class="form-control"
							 value="<?php echo e($supplier->email); ?>">
			</div>
			<button type="submit" class="btn btn-primary">Change Details</button>
		</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>