<?php
include 'config.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$returnArr = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $surename = $row['surename'];
        $name = $row['name'];
        $email = $row['email'];

        $returnArr[] = [
            "id"        => $id,
            "username"  => $surename,
            "name"      => $name,
            "email"     => $email
        ];
    }
    echo json_encode($returnArr);
  
mysqli_close($conn);
exit;


?>