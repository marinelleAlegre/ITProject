<?php
$con = new mysqli("localhost", "root", "adawd", "gc");

//Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>