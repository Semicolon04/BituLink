<?php $__env->startSection('content'); ?>
	<h1>Customer Details</h1>
	<div class="panel panel-default">
		<div class="panel-heading"><?php echo e($customer->name); ?></a></div>
		<div class="panel-body">
			<table class="table table-bordered">
				<tr><td>Name</td><td><?php echo e($customer->name); ?></td></tr>
				<tr><td>Address</td><td><?php echo e($customer->address); ?></td></tr>
				<tr><td>Email</td><td><?php echo e($customer->email); ?></td></tr>
                <tr><td>Phone</td><td><?php echo e($customer->phone); ?></td></tr>
			</table>
		</div>
	</div>
<div  class="container">
	<a href="/customers/<?php echo e($customer->id); ?>/edit" class="btn btn-primary">Edit Details</a>
	<form action="/customers/<?php echo e($customer->id); ?>" method="post">
			<?php echo e(csrf_field()); ?>

			<?php echo e(method_field('DELETE')); ?>

		<button type="submit" class="btn btn-danger">Delete Customer</button>
	</form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>