
<?php
include 'config.php';
include 'header.php';
include 'sessionCheck.php';
?>
<div class="paieska">
    <form action="" method="POST">
        <label for="email"><b>Paieska</b></label>
        <input type="text" name="search" onchange="searchfor();" required>
        <br><br>
        <div class="mygtukasPaieska">
            <button type="submit">Paieska</button>
        </div>
    </form>
<br><br>
<?php
function searchfor() {
    if(isset($_POST['search'])){
        $search=$_POST['search'];
        $gsql = "SELECT * FROM blogs where content like '%$search%' OR title like '%$search%'";
        $gresult = mysqli_query($conn, $gsql);
            while ( $grow = mysqli_fetch_assoc($gresult)) {
            echo "<b>" . $grow['title'] . "</b><br><br>";
            //  $grow["content"];
            $str = substr($grow['content'], 0, 80);
            echo $str . '&nbsp&nbsp&nbsp' . "<a href='post.php?ID={$grow['post_id']}'>Read more</a>&nbsp&nbsp<br><br><br>";  
        }
    }
}
?>




       
