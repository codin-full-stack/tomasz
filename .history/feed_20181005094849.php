
<?php
include 'config.php';
include 'sessionCheck.php';
?>


<?php
$sql = "SELECT post_id, user_id, title, date, timestamp, image, image_text, content FROM blogs ORDER BY timestamp DESC";
?>

<div class="feed">

<?php
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="feed-box">
        <div class="feed-box-image-container">
            <?php if (!empty($row['image'])){
                    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ). class="feed-box-image";'/>';
                }
            ?>
        </div>
        <div class="feed-box-title"> 
            <h2 class="feed-box-heading">
                <?php   $row["title"];
                        $str = substr($row['title'], 0, 220); 
                        // echo $row['title'];
                        echo $str . '&nbsp&nbsp&nbsp' . "<a href='post.php?ID={$row['post_id']}'>Read more</a>&nbsp&nbsp<br><br><br>";   
                        if($_SESSION['id']===$row['user_id']) {
                            echo "<a href='post_edit.php?ID={$row['post_id']}'>Edit</a>&nbsp&nbsp";
                            echo "<a href='post_delete.php?ID={$row['post_id']}'>Delete</a>&nbsp&nbsp&nbsp";
                        } 
                        $check=$row["user_id"];
                        $sql2="select * from users where id = '$check'";
                        $result2=mysqli_query($conn, $sql2);
                        $roww=mysqli_fetch_assoc($result2);
                        echo "Posted by: " . $roww['name']. "<br><br>";
                        echo "<i>Posted</i>: " . $row['date'];
                    }
                ?>
            </h2>
        </div>
    </div>
    <?php } else {
    echo "0 results";
} ?>
</div>

    