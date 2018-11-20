
<?php
include 'config.php';
// include 'sessionCheck.php';

$sql = "SELECT post_id, user_id, title, date, timestamp, image, image_text, content FROM blogs ORDER BY timestamp DESC";
$result = mysqli_query($conn, $sql);
?>
<?php header( "refresh:30;url=index.php" ); ?>
<div class="feed">
    <?php if (mysqli_num_rows($result) > 0) { ?>
        <?php while ($post = mysqli_fetch_assoc($result)) { ?>
            <div class="feed-box">
                <div class="feed-box-image-container">
                    <?php if (!empty($post['image'])){ ?>
                        <?php $url_title = strtolower(str_replace(' ', '-', $post['title'])); ?>
                            <a href="post/<?php echo $post['post_id'] .'/' . $url_title;?>"><img src="data:image/jpeg;base64,<?php echo base64_encode($post['image']); ?>" class="feed-box-image" /></a>
                    <?php } ?>
                </div>
                <div class="feed-box-title"> 
                    <h2 class="feed-box-heading">
                        <?php
                            $str = substr($post['title'], 0, 60);
                        ?>
                           <a href="post/<?php echo $post['post_id'] .'/' . $url_title;?>"><?php echo $str; ?></a>
                    </h2>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>
        0 results
    <?php } ?>
</div>

