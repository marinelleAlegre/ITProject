<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login1.php");
exit(); }
?>
