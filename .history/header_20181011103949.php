<?php
session_start();
// include('sessionCheck.php');
include('jsonFunctions.php');
?>
<script src="scripts.js"></script>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>
    <?php 
        if(isset($_SESSION['id'])) {
            $search_value=$_SESSION["id"];
            $sql3="select * from users where id ='$search_value'";
            $result3=mysqli_query($conn, $sql3);
            $row3=mysqli_fetch_assoc($result3);
            echo "Prisijunges: " . $row3['name'];
        } else {
            echo 'Prisjunk';
        }
    ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<header>
    <div class="nav">  
        <?php include('TopMenu.php')?>    
    </div>
</header>