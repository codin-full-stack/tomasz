<?php
include 'config.php';
include 'header.php';
include 'sessionCheck.php';
?>

<?php
if (isset($_GET['ID'])) {
    $ID = mysqli_real_escape_string($conn, $_GET['ID']);
    $sql = "SELECT * FROM comments where id='$ID' ";
    $result = mysqli_query($conn, $sql) or die("error: $sql");
    $row = mysqli_fetch_assoc($result);
    } else {
        header('Location: index.php');
    }


?>

<div class="textPad">
    <form action="" method="POST">
        <textarea name="comment" id="comment" rows="20" cols="43" value="" ><?php echo (! empty($row['comment']) ? $row['comment'] : ''); ?></textarea>
        <div class="mygtukas">
            <button type="submit">ATNAUJINTI</button>
        </div>
    </form>
</div>
<?php
if (!empty($_POST)) {
    $comment=mysqli_real_escape_string($conn, $_POST['comment']);
    $usql = "UPDATE comments SET comment ='".$comment."' where id = '" . $row['id']. "'";
    $uresult= mysqli_query($conn, $usql);
    if($uresult) {
            echo "Atnaujinta";
            header('Location: post.php?ID=' . $row['post_id']);
    } else {
            echo "KLAIDA!! NEIKELTA $usql. " . mysqli_error($conn);
    }   
}
?>