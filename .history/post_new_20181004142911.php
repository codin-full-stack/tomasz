
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

if (!empty($_POST)) {
    $pID=$_SESSION['id'];
    $date=date("Y-m-d");
    $title=mysqli_real_escape_string($conn, $_POST['title']);
    $content=mysqli_real_escape_string($conn, $_POST['content']);
    $imagename=$_FILES["myimage"]["name"]; 
    $sql = "INSERT INTO blogs (user_id, title, content, date) VALUES('$pID', '$title', '$content', '$date')";

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
