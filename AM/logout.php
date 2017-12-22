<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: adminLogin.php"); // Redirecting To Home Page
}
?>