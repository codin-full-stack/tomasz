
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
        <button type="submit">POST</button>
</div>
</form>

<?php
$imagename=$_FILES["myimage"]["name"]; 

if (!empty($_POST)) {
    $pID=$_SESSION['id'];
    $date=date("Y-m-d");
    $title=mysqli_real_escape_string($conn, $_POST['title']);
    $content=mysqli_real_escape_string($conn, $_POST['content']);

    $imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));
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
