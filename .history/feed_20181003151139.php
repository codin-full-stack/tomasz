
<?php
include 'config.php';
include 'sessionCheck.php';
?>


<?php
$sql = "SELECT post_id, user_id, title, date, timestamp, content FROM blogs ORDER BY timestamp DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<h2>" . $row["title"]."</h2>" . "<br>";
        $row["content"];
        $str = substr($row['content'], 0, 220);      
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
} else {
    echo "0 results";
}
?>

<div class="feed">
    <div class="feedBox">
        <div class="feedBox-image">
        <div><img src="something.jpg" alt="" /></div>
        
        
        </div>
        <div class="feedBox-title">
            <div>Title 1</div>
            <div>Title2</div>
            <div>Title 3</div>  
            <div>Title 4</div>
            <div>Title 5</div>
            <div>Title 6</div>  
        </div>
    </div>    
</div>