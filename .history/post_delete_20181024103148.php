
<?php
include 'config.php';
include 'header.php';
include 'sessionCheck.php';

if (isset($_POST['delete'])) {
    if (isset($_GET['ID'])) {
        $ID = mysqli_real_escape_string($conn, $_GET['ID']);
        $sql = "DELETE FROM blogs WHERE post_id=$ID";  
        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");
        echo "Post was deleted";
        } else {
            header('Location: index.php');
    }
} 



?>




       
