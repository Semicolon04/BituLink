<?php $__env->startSection('content'); ?>
	<h1>Supplier Details</h1>
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">
			<?php echo e($supplier->name); ?>

		</div>
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr><td>Name</td><td><?php echo e($supplier->name); ?></td></tr>
				<tr><td>Address</td><td><?php echo e($supplier->address); ?></td></tr>
				<tr><td>Email</td><td><?php echo e($supplier->email); ?></td></tr>
			</table>
		</div>
	</div>
	<div class="pull-right">
	<a href="/suppliers/<?php echo e($supplier->id); ?>/edit" class="btn btn-primary">Edit Details</a>
		<form action="/suppliers/<?php echo e($supplier->id); ?>" method="post" style="display: inline-block">
			<?php echo e(csrf_field()); ?>

			<?php echo e(method_field('DELETE')); ?>

			<button type="submit" class="btn btn-danger">Delete Supplier</button>
		</form>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>