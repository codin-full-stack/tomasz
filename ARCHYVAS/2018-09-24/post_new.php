
<?php
include 'header.php';
include 'config.php';
include 'sessionCheck.php';
?>



<div class="container">
    <form action="" method="POST">
        <input type="text" placeholder="title" name="title" required>
        <input type="text" name="content" required>
        <button type="submit">POST</button>
</div>
</form>

<?php

if (!empty($_POST)) {
    $pID=$_SESSION['id'];
    $title=$_POST['title'];
    $content=$_POST['content'];
    $sql = "INSERT INTO blogs (user_id, title, content)
    VALUES('$pID', '$title', '$content')";
    
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