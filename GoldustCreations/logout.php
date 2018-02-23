<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: ../goldustcreations/login/login1.php"); // Redirecting To Home Page
}
?>