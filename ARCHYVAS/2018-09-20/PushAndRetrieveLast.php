<?php
include 'jsonFunctions.php';
include 'config.php';

$_POST['pass'] = md5($_POST['pass']);

$name=$_POST['vard'];
$surename=$_POST['pavd'];
$password=$_POST['pass'];
$email=$_POST['email'];
$age=$_POST['amz'];
$city=$_POST['miest'];
$gender=$_POST['lyt'];

if (!empty($_POST)) {
    unset($_POST['passconf']);
    $sql = "INSERT INTO users (name, surename, email, age, city, password, gender)
    VALUES('$name', '$surename', '$email', '$age', '$city', '$password', '$gender')";
    
    // var_dump($sql);

    // exit;

    if(mysqli_query($conn, $sql)){
        echo "Ikelta.";
    } else {
        echo "KLAIDA!! NEIKELTA $sql. " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>




