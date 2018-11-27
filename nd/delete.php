<?php include 'config.php';

var_dump($_POST['id']);

$sql = "DELETE FROM users WHERE id = '".$_POST["id"]."'"; 
    if(mysqli_query($conn, $sql)) {  
        echo 'Data Deleted';  
    }  
 ?>