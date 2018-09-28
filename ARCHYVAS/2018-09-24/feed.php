
<?php
// include 'header.php';
include 'config.php';
include 'sessionCheck.php';
?>

<div class="container">
<?php

$sql = "SELECT user_id, title, content FROM blogs";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<h2>" . $row["title"]."</h2>" . "<br>" . 
             $row["content"]. "<br><br><br>" . 
            "<i>by:</i> " . $row["user_id"]. "<br>";
    }
} else {
    echo "0 results";
}

?>

</div>