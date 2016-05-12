<?php $__env->startSection('content'); ?>
		<h1>Sales Invoices List</h1>
		<a class="btn btn-default pull-right" href="/sales_invoices/new">New</a>
		<br><br>
		<ul class="list-group">
		<?php foreach($sales_invoices as $si): ?>
			<li class="list-group-item">
				<?php echo e($si->description); ?>

				<a class="pull-right" href="/sales_invoices/<?php echo e($si->id); ?>">Details</a>
			</li>
		<?php endforeach; ?>
		</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>