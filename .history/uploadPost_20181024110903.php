<?php
include 'config.php';

$imagename=$_FILES["myimage"]["name"]; 
if (!empty($imagename)) {
    $pID=$_SESSION['id'];
    $date=date("Y-m-d");
    $imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));
    $title=mysqli_real_escape_string($conn, $_POST['title']);
    $content=mysqli_real_escape_string($conn, $_POST['content']);
    $sql = "INSERT INTO blogs (user_id, title, content, date, image, image_text) VALUES('$pID', '$title', '$content', '$date', '$imagetmp', '$imagename')";

    // var_dump($sql);

    // exit;

    mysqli_query($conn, $sql);
    } else {
        $pID=$_SESSION['id'];
        $date=date("Y-m-d");
   
        $title=mysqli_real_escape_string($conn, $_POST['title']);
        $content=mysqli_real_escape_string($conn, $_POST['content']);
            $sql = "INSERT INTO blogs (user_id, title, content, date, image, image_text) VALUES('$pID', '$title', '$content', '$date', '$imagetmp', '$imagename')";
    }


mysqli_close($conn);

?>