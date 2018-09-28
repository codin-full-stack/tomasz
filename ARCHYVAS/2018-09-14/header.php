<?php
include('sessionCheck.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo "Prisijunges: " . $_SESSION['uname']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/styles.css" type="text/css">
</head>
<body background="media/bgwp.jpg">
    <div class="navigation">  
        <?php include('TopMenu.php')?>    
    </div>
