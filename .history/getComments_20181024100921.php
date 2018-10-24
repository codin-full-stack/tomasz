<?php
include 'config.php';
?>
<div class="commentsBox">  
<h2>KOMENTARAI</h2>
<?php

if (isset($_GET['ID'])) {
    $ID = mysqli_real_escape_string($conn, $_GET['ID']);
    $gsql = "SELECT * FROM comments where post_id='$ID' ";
    $gresult = mysqli_query($conn, $gsql);
        while ( $grow = mysqli_fetch_assoc($gresult)) {
        echo "<b>" . $grow['name'] . "</b><br><br>";
        echo $grow['comment']. "<br><br><br>";
        $search_value=$_SESSION["id"];
        $sql3="select * from users where id ='$search_value'";
        $result3=mysqli_query($conn, $sql3);
        $row3=mysqli_fetch_assoc($result3);
        if($row3['name']===$grow['name']) {
            echo "<a href='comment_edit.php?ID={$grow['id']}'>Edit</a>&nbsp&nbsp";
            echo "<a href='comment_delete.php?ID={$grow['id']}' onclick="return confirm('you SURE???');">Delete</a>&nbsp&nbsp&nbsp<br><br><br>";            
        }         
    }
}        
?>

</div>
