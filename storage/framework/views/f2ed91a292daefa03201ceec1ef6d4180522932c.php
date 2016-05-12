<?php $__env->startSection('content'); ?>
		<h1>Performa Invoices List</h1>
		<a class="btn btn-default pull-right" href="/pi/new">New</a>
		<br><br>
		<ul class="list-group">
		<?php foreach($pis as $pi): ?>
			<li class="list-group-item">
				<?php echo e($pi->description); ?>

				<a class="pull-right" href="/pi/<?php echo e($pi->id); ?>">Details</a>
			</li>
		<?php endforeach; ?>
		</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>