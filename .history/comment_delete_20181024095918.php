<?php
include 'config.php';
include 'header.php';
include 'sessionCheck.php';
?>
<div class="delete">
<form action="" method="post">
<input type="submit" name="delete" value="delete" onclick="return confirm('you SURE???');">

<?php
if (isset($_POST['delete'])) {
    if (isset($_GET['ID'])) {
        $ID = mysqli_real_escape_string($conn, $_GET['ID']);
        $sql = "DELETE FROM comments WHERE id=$ID";  
        if($result = mysqli_query($conn, $sql)) {

        }
      
       
        
    } else {
        header('Location: index.php');
    }
} 
?>
</div>