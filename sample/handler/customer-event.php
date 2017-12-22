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
	<title></title>
</head>
<body>
	<!-- Navigation Bar -->
	<?php include("navbar.php") ?>

	<!-- main content -->
	<div class="container">
		<h1>Events</h1>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>Event</th>
						<th>Date</th>
						<th>Time</th>
						<th>Location</th>
						<th>Status</th>
						<th>Entourage</th>
						<th>Handler</th>
						<!--<th>Remarks</th>-->
						<!-- eg. overdue payments, unreturned items -->
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Wedding</td>
						<td>Dec 22, 2017</td>
						<td>10:00</td>
						<td>Baguio Cathedral</td>
						<td>Ongoing</td>
						<td><a href="">View Entourage</a></td>
						<td>Ichi</td>
						<!--<td>eg. overdue payments, unreturned items...not sure :D</td>-->
					</tr>
					<tr>
						<td>Data</td>
						<td>Data</td>
						<td>Data</td>
						<td>Data</td>
						<td>Data</td>
						<td><a href="">View Entourage</a></td>
						<td>Data</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

</body>
</html>