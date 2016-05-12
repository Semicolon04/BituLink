<div class="panel panel-default">
	<div class="panel-heading"><a href="/suppliers/details/<?php echo e($supplier->id); ?>"><?php echo e($supplier->name); ?></a></div>
	<div class="panel-body">
		Name: <?php echo e($supplier->name); ?>

		<br>
		Address: <?php echo e($supplier->address); ?>

		<br>
		Email: <?php echo e($supplier->email); ?>

		<table>
			<tr><td>Name</td><td><?php echo e($supplier->name); ?></td></tr>
			<tr><td>Address</td><td><?php echo e($supplier->address); ?></td></tr>
			<tr><td>Email</td><td><?php echo e($supplier->email); ?></td></tr>
		</table>
	</div>
</div>