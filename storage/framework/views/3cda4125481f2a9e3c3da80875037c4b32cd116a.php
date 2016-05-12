<?php $__env->startSection('content'); ?>
		<h1>Customer List</h1>
		<a class="btn btn-default pull-right" href="/customers/new">New</a>
		<br><br>
		<ul class="list-group">

		<?php foreach($customers as $customer): ?>
			<li class="list-group-item">
				<?php echo e($customer->name); ?>

				<a class="pull-right" href="/customers/<?php echo e($customer->id); ?>/details">Details</a>
			</li>
		<?php endforeach; ?>
          
		</ul>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>