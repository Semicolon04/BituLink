<?php $__env->startSection('content'); ?>
		<h1>Suppliers List</h1>
		<a class="btn btn-default pull-right" href="/suppliers/new">New</a>
		<br><br>
		<ul class="list-group">
		<?php foreach($suppliers as $supplier): ?>
			<li class="list-group-item">
				<?php echo e($supplier->name); ?>

				<a class="pull-right" href="/suppliers/<?php echo e($supplier->id); ?>">Details</a>
			</li>
		<?php endforeach; ?>
		</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>