
<?php
include 'config.php';
include 'header.php';
include 'sessionCheck.php';
?>



<div class="textPad">
    <form action="" method="POST">
        <input type="text" placeholder="title" name="title" required>
        <textarea name="content" id="content" rows="20" cols="54"></textarea>
        <!-- <input type="text" name="content" required> -->
        <input type="file" name="myimage">
        <button type="submit">POST</button>
</div>
</form>

<?php


if (!empty($_POST)) {
    $pID=$_SESSION['id'];
    $date=date("Y-m-d");
    $imagename=$_FILES["myimage"]["name"]; 
    $imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));
    $title=mysqli_real_escape_string($conn, $_POST['title']);
    $content=mysqli_real_escape_string($conn, $_POST['content']);
    $sql = "INSERT INTO blogs (user_id, title, content, date, image, image_text) VALUES('$pID', '$title', '$content', '$date', '$imagetmp', '$imagename')";

    // var_dump($sql);

    // exit;

    if(mysqli_query($conn, $sql)){
        echo "Ikelta.";
    } else {
        echo "KLAIDA!! NEIKELTA $sql. " . mysqli_error($conn);
    }
}

mysqli_close($conn);

?>
