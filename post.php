
<?php
include 'config.php';
include 'header.php';
include 'sessionCheck.php';
?>
<div class="feed">
<?php
if (isset($_GET['ID'])) {
    $ID = mysqli_real_escape_string($conn, $_GET['ID']);
    $sql = "SELECT * FROM blogs where post_id='$ID' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo "<h2>".$row['title'] . "</h2><br><br>";
    echo $row['content'];
    } else {
        header('Location: index.php');
    }
?>
</div>
</form>
<?php
include 'comments.php';
include 'getComments.php';
?>

