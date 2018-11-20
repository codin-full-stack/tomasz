<?php
session_start();
// include('sessionCheck.php');
include('jsonFunctions.php');
include 'config.php';
?>

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
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>styles/styles.css">                   
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script type="text/javascript" src="<?php echo $baseUrl; ?>js/jquery-1.12.4.min.js"></script>

</head>
<header>
    <div class="nav">
        <div class="navh"></div> 
        <?php include('TopMenu.php')?>    
    </div>
</header>
