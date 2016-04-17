<!DOCTYPE html>
<html>
	<head>
		<title>Bitulink Dealings</title>
		<link rel="stylesheet" href="/bootstrap.min.css">
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
					<li><a href="#">Performa Invoice</a></li>
					<li><a href="#">Purchase Order</a></li>
					<li><a href="#">Sales Inovide</a></li>
					<li><a href="#">Stock</a></li>
				</ul>
			</div>
		</nav>
		<div class="container-fluid col-md-6 col-md-offset-3">
			@yield('content')
		</div>
	</body>
</html>