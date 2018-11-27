<?php include 'config.php';

$sql = "INSERT INTO users(name, surename) VALUES('".$_POST["first_name"]."', '".$_POST["last_name"]."')";  
 if(mysqli_query($conn, $sql)) {  
      echo 'Data Inserted';  
 }  
 ?>