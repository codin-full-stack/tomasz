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
        $sqlExists = "SELECT id FROM comments WHERE id=" . $_GET['ID'];
        $resultExists = mysqli_query($conn, $sqlExists);

        if(mysqli_num_rows($resultExists) > 0) {

        } else {
            echo 'Tokio id nera';
        }



       
      
       
        
    } else {
        header('Location: index.php');
    }
} 
?>
</div>