<?php
// include 'jsonFunctions.php';
include 'config.php';

$_POST['pass'] = md5($_POST['pass']);

$name=$_POST['vard'];
$surename=$_POST['pavd'];
$password=$_POST['pass'];
$email=$_POST['email'];
$age=$_POST['amz'];
$city=$_POST['miest'];
$gender=$_POST['lyt'];
$imagename=$_FILES["myimage"]["name"]; 

if (!empty($_POST)) {
    unset($_POST['passconf']);
    if(!empty)
    $imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));
    $sql = "INSERT INTO users (name, surename, email, age, city, password, gender, image, image_text)
    VALUES('$name', '$surename', '$email', '$age', '$city', '$password', '$gender', '$imagetmp', '$imagename')";     
    if(mysqli_query($conn, $sql)){
        echo "Ikelta.";
    } else {
        echo "KLAIDA!! NEIKELTA $sql. " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>




