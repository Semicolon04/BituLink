<!DOCTYPE html>
<html>
	<head>
		<title>Bitulink Dealings</title>
		<link rel="stylesheet" href="/bootstrap-darkly.min.css">
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Bitulink Dealings</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="/suppliers">Suppliers</a></li>
					<li><a href="#">Customers</a></li>
					<li><a href="/pi">Performa Invoice</a></li>
					<li><a href="#">Purchase Order</a></li>
					<li><a href="/sales_invoices">Sales Inovices</a></li>
					<li><a href="#">Stock</a></li>
				</ul>
			</div>
		</nav>
		<div class="container-fluid col-md-6 col-md-offset-3">
			<?php echo $__env->yieldContent('content'); ?>
		</div>
	</body>
</html>