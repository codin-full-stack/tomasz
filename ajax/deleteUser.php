<?php
include 'config.php';

$id = $_POST['id'];

$deleteQuery = "DELETE FROM users WHERE id='$id' LIMIT 1";
mysqli_query($conn, $deleteQuery);
exit;