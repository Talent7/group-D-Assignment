<?php
// Define the database connection details
$hostName = "localhost";    // The hostname of the database server
$dbUser = "root";           // The username for the database
$dbPassword = "";           // The password for the database
$dbName = "login_register"; // The name of the database

// Establish a connection to the database
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

// Check if the connection was successful
if (!$conn) {
    // If the connection fails, display an error message and stop the script execution
    die("Something went wrong;");
}
?>
