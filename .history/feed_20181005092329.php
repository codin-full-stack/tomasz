
<?php
include 'config.php';
include 'sessionCheck.php';
?>


<?php
$sql = "SELECT post_id, user_id, title, date, timestamp, image, image_text, content FROM blogs ORDER BY timestamp DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        // echo "<h2>" . $row["title"]."</h2>" . "<br>";
        $row["content"];
        $str = substr($row['content'], 0, 220);      
        // echo $str . '&nbsp&nbsp&nbsp' . "<a href='post.php?ID={$row['post_id']}'>Read more</a>&nbsp&nbsp<br><br><br>";             
            if($_SESSION['id']===$row['user_id']) {
            // echo "<a href='post_edit.php?ID={$row['post_id']}'>Edit</a>&nbsp&nbsp";
            // echo "<a href='post_delete.php?ID={$row['post_id']}'>Delete</a>&nbsp&nbsp&nbsp";            
            }
        $check=$row["user_id"];
        $sql2="select * from users where id = '$check'";
        $result2=mysqli_query($conn, $sql2);
        $roww=mysqli_fetch_assoc($result2);
        // echo "Posted by: " . $roww['name']. "<br><br>";
        // echo "<i>Posted</i>: " . $row['date'];
        }
} else {
    echo "0 results";
}
?>

<div class="feed">

<?php

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>

<div class="feed-box">
        <div class="feed-box-image-container">
            <?php if (!empty($row['postimg'])){
                            echo "<img src=". $row['postimg'] ." class='box-image' alt=\"\"  />";
                            }
            ?>
        </div>
        <div class="feed-box-title"> 
            <h2 class="feed-box-heading">
                Lorem ip amet consectetur adipisicing elit. Consequuntur est sequi cupiditate necessitatibus aliquam, dolores corporis laudantium perfe
            </h2>
        </div>
    </div>    

     <div class="feed-box">
        <div class="feed-box-image-container">
            <img src="media/333.jpg" alt="" class="feed-box-image"/>
        </div>
        <div class="feed-box-title"> 
            <h2 class="feed-box-heading">
            Ipsum non incidunt animi perspiciatis. 
            </h2>
        </div>
    </div>    

     <div class="feed-box">
        <div class="feed-box-image-container">
            <img src="media/login.jpg" alt="" class="feed-box-image"/>
        </div>
        <div class="feed-box-title"> 
            <h2 class="feed-box-heading">
            Dolores, error ad veniam esse eos possimus corrupti ex sapiente perferendis reiciendis non temporibus dicta, voluptatem quas!
            </h2>
        </div>
    </div>    

     <div class="feed-box">
        <div class="feed-box-image-container">
            <img src="media/moteriz.gif" alt="" class="feed-box-image"/>
        </div>
        <div class="feed-box-title"> 
            <h2 class="feed-box-heading">
                Lasddlkasjkdlkasjdlka#################dfghdhebyethvertdfsgdfhgpudhesjd
            </h2>
        </div>
    </div>    

     <div class="feed-box">
        <div class="feed-box-image-container">
            <img src="media/images.jpg" alt="" class="feed-box-image"/>
        </div>
        <div class="feed-box-title"> 
            <h2 class="feed-box-heading">
            Dolores, error ad veniam esse eos possimus corrupti ex sapiente perferendis reiciendis non temporibus dicta, voluptatem quas!
            </h2>
        </div>
    </div>    

     <div class="feed-box">
        <div class="feed-box-image-container">
            <img src="media/123.jpg" alt="" class="feed-box-image"/>
        </div>
        <div class="feed-box-title"> 
            <h2 class="feed-box-heading">
                WRX WRX WRX WRX WRX WRX WRX WRX WRX WRX WRX WRX WRX WRX
            </h2>
        </div>
    </div>    
</div>