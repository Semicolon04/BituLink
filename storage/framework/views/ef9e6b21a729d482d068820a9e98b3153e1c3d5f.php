<?php $__env->startSection('content'); ?>
		<h1>Edit Sales Invoice Details</h1>
		<form action="/sales_invoices/<?php echo e($sales_invoice->id); ?>" method="post">
			<?php echo e(method_field('PATCH')); ?>

			<?php echo e(csrf_field()); ?>

			<div class="form-group">
				<label for="description">Description: </label>
				<input name="description" type="text" class="form-control"
							 value="<?php echo e($sales_invoice->description); ?>">
			</div>
			<div class="form-group">
				<label for="date">Date: </label>
				<input name="date" type="text" class="form-control"
							 value="<?php echo e($sales_invoice->date); ?>">
			</div>
			<div class="form-group">
				<label for="billing_address">Billing Address: </label>
				<input name="billing_address" type="text" class="form-control"
							 value="<?php echo e($sales_invoice->billing_address); ?>">
			</div>
			<div class="form-group">
				<label for="shipping_address">Shipping Address: </label>
				<input name="shipping_address" type="text" class="form-control"
							 value="<?php echo e($sales_invoice->shipping_address); ?>">
			</div>
			<button type="submit" class="btn btn-primary">Change Details</button>
		</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>