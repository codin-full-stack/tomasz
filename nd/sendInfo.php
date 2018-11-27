<?php
include 'config.php';

$name = $_POST['vrd'];
$surename = $_POST['pvd'];


if (empty($name && $surename)) {
    echo "KLAIDA!! NEIKELTA";
    } else {
        $sql = "INSERT INTO users (name, surename)VALUES('$name', '$surename')";
        if(mysqli_query($conn, $sql)){
             echo "Įrašas sėkmingai sukurtas";                 
    }      
}

mysqli_close($conn);
exit;




