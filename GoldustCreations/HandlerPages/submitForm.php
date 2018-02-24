<?php
	require '../db.php';

	$clientname = $_POST["client-Name"];
	$contactnumber = $_POST["contact-number"];
	$regdate = $_POST[""];

	$newClient = "INSERT INTO clients (clientName, registrationDate, contactNumber) VALUES ('$clientname', '$regdate', '$contactnumber');";

?>