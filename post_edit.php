
<?php
include 'config.php';
include 'header.php';
include 'sessionCheck.php';
?>

<?php
if (isset($_GET['ID'])) {
    $ID = mysqli_real_escape_string($conn, $_GET['ID']);
    $sql = "SELECT * FROM blogs where post_id='$ID' ";
    $result = mysqli_query($conn, $sql) or die("error: $sql");
    $row = mysqli_fetch_assoc($result);
    } else {
        header('Location: index.php');
    }
?>

<div class="textPad">
    <form action="" method="POST">
        <input type="text" name="title" value="<?php echo (! empty($row['title']) ? $row['title'] : ''); ?>">
        <textarea name="content" id="content" rows="20" cols="48" value="" ><?php echo (! empty($row['content']) ? $row['content'] : ''); ?></textarea>
        <input type="file" name="myimage" class="inputFile">
        <div class="mygtukas">
            <button type="submit">ATNAUJINTI</button>
        </div>
    </form>
</div>

<?php


if (!empty($_POST)) {
    $title=mysqli_real_escape_string($conn, $_POST['title']);
    $content=mysqli_real_escape_string($conn, $_POST['content']);
    $usql = "UPDATE blogs SET title ='".$title."', content = '" . $content . "' where post_id = '" . $row['post_id']. "'";
    $uresult= mysqli_query($conn, $usql);
    if($uresult) {
            echo "Atnaujinta";
            header('Location: myposts.php');
    } else {
            echo "KLAIDA!! NEIKELTA $usql. " . mysqli_error($conn);
    }   
}


       
?>
<?php

// if (!empty($imagename)) {
//     $imagename=$_FILES["myimage"]["name"]; 
//     $date=date("Y-m-d");
//     $imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));
//     $title=($_POST['title']);
//     $content=($_POST['content']);
//     $usql = "UPDATE blogs SET (title, content, date, image, image_text) VALUES('$title', '$content', '$date', '$imagetmp', '$imagename') where post_id ='". $row['post_id']."'";
//     mysqli_query($conn, $usql);
//     header('Location: index.php');
//     } else {
//         $date=date("Y-m-d");
//         $title = $_POST['title'] ?? '';
//         $content= $_POST['content'] ?? '';
//         $usql = "UPDATE blogs SET (title, content, date) VALUES('$title', '$content', '$date') where post_id ='". $row['post_id']."'";
//         mysqli_query($conn, $usql);
//         header('Location: index.php');
//     }


mysqli_close($conn);
?>

