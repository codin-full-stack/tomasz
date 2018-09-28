<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "tomasz";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// var_dump ($conn);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>