<?php
include 'config.php';


if (!empty($_POST['myimage'])) {
    var_dump($post)
    $pID=$_SESSION['id'];
    $date=date("Y-m-d");
    $imagename=$_FILES["myimage"]["name"]; 
    $title=mysqli_real_escape_string($conn, $_POST['title']);
    $content=mysqli_real_escape_string($conn, $_POST['content']);
    $imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));
    $sql = "INSERT INTO blogs (user_id, title, content, date, image, image_text) VALUES('$pID', '$title', '$content', '$date', '$imagetmp', '$imagename')";
    mysqli_query($conn, $sql);

    // var_dump($sql);

    // exit;

    // if(mysqli_query($conn, $sql)){
    //     echo "Ikelta.";
    } else {
        $pID=$_SESSION['id'];
        $date=date("Y-m-d");
        $title=mysqli_real_escape_string($conn, $_POST['title']);
        $content=mysqli_real_escape_string($conn, $_POST['content']);
        $sql2 = "INSERT INTO blogs (user_id, title, content, date) VALUES('$pID', '$title', '$content', '$date')";
        mysqli_query($conn, $sql2);

    }


mysqli_close($conn);

?>