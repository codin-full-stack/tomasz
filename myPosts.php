<?php
include 'config.php';
include 'header.php';
include 'sessionCheck.php';
?>
<div class="feed">
<?php
if (isset($_SESSION['id'])) {
    $ID=$_SESSION['id'];
    $gsql = "SELECT * FROM blogs where user_id='$ID' ";
    $gresult = mysqli_query($conn, $gsql);
        while ( $grow = mysqli_fetch_assoc($gresult)) {
            echo "<h2>" . $grow["title"]."</h2>" . "<br>";
            echo $grow["content"]."<br><br><br>";
            if($ID===$grow['user_id']) {
                echo "<a href='post_edit.php?ID={$grow['post_id']}'>Edit</a>&nbsp&nbsp";
                echo "<a href='post_delete.php?ID={$grow['post_id']}'>Delete</a>&nbsp&nbsp&nbsp";            
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

