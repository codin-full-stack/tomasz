<?php
include 'config.php';
include 'header.php';
include 'sessionCheck.php';
?>

<form action="" method="post">
<input type="submit" name="delete" value="delete" ">

<?php
if (isset($_POST['delete'])) {
    if (isset($_GET['ID'])) {
        $ID = mysqli_real_escape_string($conn, $_GET['ID']);
        $sql = "DELETE FROM comments WHERE id=$ID";  
        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");
        echo "Post was deleted";
        } else {
            header('Location: index.php');
    }
} 
?>