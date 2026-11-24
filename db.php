<?php
// Database connection details
$host = "localhost";
$username = "root";
$password = "";
$database = "school_db";

// Connect PHP to MySQL
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>