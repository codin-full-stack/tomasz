<?php
include 'config.php';
include 'header.php';
include 'sessionCheck.php';
?>
<div class="myposts">
<?php
if (isset($_SESSION['id'])) {
    $ID=$_SESSION['id'];
    $gsql = "SELECT * FROM blogs where user_id='$ID' ORDER BY timestamp DESC ";
    $gresult = mysqli_query($conn, $gsql);
        while ( $grow = mysqli_fetch_assoc($gresult)) {
            echo "<h2>" . $grow["title"]."</h2>" . "<br><br>";
            if (!empty($grow['image'])){
               ?> <img src="data:image/jpeg;base64,<?php echo base64_encode($grow['image']); ?>" class="photosize" /></a>
            <?php } ?> <?php echo "<br><br><br><br>";
            
            echo "<h3>" . $grow["content"]."<br><br><br>" . "</h3>";
            if($ID===$grow['user_id']) {
                echo "<a href='post_edit.php?ID={$grow['post_id']}'>Edit</a>&nbsp&nbsp";
                echo "<a href='post_delete.php?ID={$grow['post_id']}'onclick='return confirm(\"you SURE???\");'>Delete</a>&nbsp&nbsp&nbsp";            
                }                
            $check=$grow["user_id"];
            $sql2="select * from users where id = '$check'";
            $result2=mysqli_query($conn, $sql2);
            $roww=mysqli_fetch_assoc($result2); 
            echo "Posted by: " . $roww['name'];    
            }
    } else {
        echo "0 results";
    }
?>
</div>

