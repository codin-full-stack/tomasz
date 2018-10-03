
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

<div class="flex-feed feed">
  <div class="flex-feed__1">
    <img src="media/dd.jpg">
    <img src="holder.js/460x408" />
  </div>
  <div class="flex-feed___2">
    <img src="holder.js/645x813">
    <img src="holder.js/645x265">
  </div>
  <div class="flex-feed___3">
    <img src="holder.js/808x330"/>
    <img src="holder.js/452x748"/>
    <img src="holder.js/356x748"/>
  </div>
</div>
