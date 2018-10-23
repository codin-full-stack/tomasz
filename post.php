
<?php
include 'config.php';
include 'header.php';
include 'sessionCheck.php';
?>
<div class="postin">
<?php
if (isset($_GET['ID'])) {
    $ID = mysqli_real_escape_string($conn, $_GET['ID']);
    $sql = "SELECT * FROM blogs where post_id='$ID' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo "<h2>".$row['title'] . "</h2><br><br>";
    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"" width="100%" height="70%"/>';
    
    echo "<br><br>" .$row['content'];
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

