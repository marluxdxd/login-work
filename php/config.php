<?php
// Database configuration
$servername = "localhost"; // Your database server hostname

$username = "root";        // Your database username

$password = "";            // Your database password

$dbname = "mydb";          // Your database create name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
} else {
    echo "";

}

?> 