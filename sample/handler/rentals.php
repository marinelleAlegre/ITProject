<!-- Handler page -->
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>

<!DOCTYPE html>
<html>
<head>
	<title>Handler page</title>
</head>
<body>
	<!-- Navigation Bar -->
	<?php include("navbar.php") ?>
	
	<!-- main content -->
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				<h1>Rented Items</h1>
			</div>
			<div class="col-lg-2">
				<a href="" role="" class="btn btn-primary">Add Rental</a>
			</div>
		</div>
		
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>Item</th>
						<th>Quantity</th>
						<th>Event</th>
						<th>Client</th>
						<th>Location</th>
						<th>Date Rented</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Attire [image?]</td>
						<td>6</td>
						<td>Wedding</td>
						<td>Abc</td>
						<td>Baguio Cathedral</td>
						<td>Dec 20, 2017</td>
					</tr>
					<tr>
						<td>Spoons</td>
						<td>150</td>
						<td>Wedding</td>
						<td>Abc</td>
						<td>Baguio Cathedral</td>
						<td>Dec 20, 2017</td>
					</tr>
					<tr>
						<td>Forks</td>
						<td>150</td>
						<td>Wedding</td>
						<td>Abc</td>
						<td>Baguio Cathedral</td>
						<td>Dec 20, 2017</td>
					</tr>
					<tr>
						<td>Drinking Glasses</td>
						<td>150</td>
						<td>Wedding</td>
						<td>Abc</td>
						<td>Baguio Cathedral</td>
						<td>Dec 20, 2017</td>
					</tr>
					<tr>
						<td>Plates</td>
						<td>170</td>
						<td>Wedding</td>
						<td>Abc</td>
						<td>Baguio Cathedral</td>
						<td>Dec 20, 2017</td>
					</tr>
					<tr>
						<td>Chafing Dishes</td>
						<td>10</td>
						<td>Wedding</td>
						<td>Abc</td>
						<td>Baguio Cathedral</td>
						<td>Dec 20, 2017</td>
					</tr>
					<tr>
						<td>Attire [image?]</td>
						<td>1</td>
						<td>Prom</td>
						<td>Student</td>
						<td>MNHS</td>
						<td>Dec 22, 2017</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>