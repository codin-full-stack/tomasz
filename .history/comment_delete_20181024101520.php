<?php
include 'config.php';
include 'sessionCheck.php';

if (isset($_GET['ID']) && isset($_GET['postId'])) {
    $sqlExists = "SELECT * FROM comments WHERE id=" . $_GET['ID'];
    $resultExists = mysqli_query($conn, $sqlExists);

    if(mysqli_num_rows($resultExists) > 0) {
        $sql = "DELETE FROM comments WHERE id=" . $_GET['ID'];
        
        if($result = mysqli_query($conn, $sql)) {
            header('Location: post.php?ID=' . $_GET['postId']);
        }
    } else {
        echo 'Tokio `id` nera';
    }

    
} else {
    header('Location: index.php');
}
