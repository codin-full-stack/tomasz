<?php
$servername = "localhost";
// $username = "admin";
// $password = "12345678";
$username = "root";
$password = "12345678";     
$db = "tomasz";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

?>
