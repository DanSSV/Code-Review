<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "trisakaydb";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);


if ($conn === false) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";

?>