<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "pg_life";

$conn = mysqli_connect($hostname,$username,$password,$database);

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
