
<?php
include 'config.php';
include 'sessionCheck.php';

$sql = "SELECT post_id, user_id, title, date, timestamp, image, image_text, content FROM blogs ORDER BY timestamp DESC";
$result = mysqli_query($conn, $sql);
$posts = mysqli_fetch_array($result);

?>

<div class="feed">
    <?php if (! empty($posts)) { ?>
        <?php foreach ($posts as $post) { ?>
            <div class="feed-box">
                <div class="feed-box-image-container">
                    <?php if (!empty($post['image'])){ ?>
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($post['image']); ?>" class="feed-box-image" />
                    <?php } ?>
                </div>
                <div class="feed-box-title"> 
                    <h2 class="feed-box-heading">
                        <?php   $post["title"];
                                $str = substr($post['title'], 0, 120); 
                                // echo $row['title'];
                                echo $str . "<a href='post.php?ID={$post['post_id']}'>Read more</a>";   
                                // if($_SESSION['id']===$row['user_id']) {
                                //     echo "<a href='post_edit.php?ID={$row['post_id']}'>Edit</a>";
                                //     echo "<a href='post_delete.php?ID={$row['post_id']}'>Delete</a>";
                                // } 
                                // $check=$row["user_id"];
                                // $sql2="select * from users where id = '$check'";
                                // $result2=mysqli_query($conn, $sql2);
                                // $roww=mysqli_fetch_assoc($result2);
                                // echo "Posted by: " . $roww['name'];
                                // echo "<i>Posted</i>: " . $row['date'];
                        ?>
                    </h2>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>
        0 results
    <?php } ?>
</div>
