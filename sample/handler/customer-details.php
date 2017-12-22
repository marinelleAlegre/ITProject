<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>

<!-- script for tooltip -->
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- Navigation Bar -->
	<?php include("navbar.php") ?>

	<!-- main content -->
	<div class="container">
		<h1>Customer Details</h1>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Address</th>
						<th>Contact Number</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
						<tr>
							<td><a href="customer-event.php" role="button" class="btn btn-link" data-toggle="tooltip" title="View Events"><span class="glyphicon glyphicon-list-alt"></span></a>Abc</td>
							<td>Def St. Baguio City</td>
							<td>09123456789</td>
							<td>email@email.com</td>
						</tr>
						<tr>
							<td><a href="" role="button" class="btn btn-link" data-toggle="tooltip" title="View Events"><span class="glyphicon glyphicon-list-alt"></span></a>Some Name</td>
							<td>Ghi St. Baguio City</td>
							<td>09125678934</td>
							<td>email@email.com</td>
						</tr>
						<tr>
							<td><a href="" role="button" class="btn btn-link" data-toggle="tooltip" title="View Events"><span class="glyphicon glyphicon-list-alt"></span></a>Kwa</td>
							<td>Jkl St. Baguio City</td>
							<td>09125600034</td>
							<td>email@email.com</td>
						</tr>		
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>