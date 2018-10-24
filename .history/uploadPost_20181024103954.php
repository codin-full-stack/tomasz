<?php
include 'config.php';

$imagename=$_FILES["myimage"]["name"]; 
if (!empty($_POST['myimage'])) {
    $pID=$_SESSION['id'];
    $date=date("Y-m-d");
    $imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));
    $title=mysqli_real_escape_string($conn, $_POST['title']);
    $content=mysqli_real_escape_string($conn, $_POST['content']);
    $sql = "INSERT INTO blogs (user_id, title, content, date, image, image_text) VALUES('$pID', '$title', '$content', '$date', '$imagetmp', '$imagename')";

    // var_dump($sql);

    // exit;

    if(mysqli_query($conn, $sql)){
        echo "Ikelta.";
    } else {
        $sql = "INSERT INTO blogs (user_id, title, content, date, image, image_text) VALUES('$pID', '$title', '$content', '$date')";
    }
}

mysqli_close($conn);

?>
