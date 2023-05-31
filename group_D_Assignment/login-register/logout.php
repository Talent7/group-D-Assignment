<?php
session_start();

// Destroy the current session
session_destroy();

// Redirect the user to the login.php page
header("Location: login.php");
?>
