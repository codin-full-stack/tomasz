<?php
session_start();
// include('sessionCheck.php');
include('jsonFunctions.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>
    <?php 
        if(isset($_SESSION['email'])) {
            echo "Prisijunges: " . $_SESSION['email'];
        } else {
            echo 'Prisjunk';
        }
    ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/styles.css" type="text/css">
</head>
<body background="media/bgwp.jpg">
    <div class="navigation">  
        <?php include('TopMenu.php')?>    
    </div>
