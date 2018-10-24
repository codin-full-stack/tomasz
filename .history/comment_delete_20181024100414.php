<?php
include 'config.php';
include 'header.php';
include 'sessionCheck.php';
?>
<div class="delete">
<form action="" method="post">
<input type="submit" name="delete" value="delete" onclick="return confirm('you SURE???');">

<?php
if (isset($_POST['delete'])) {
    if (isset($_GET['ID'])) {
        $sqlExists = "SELECT id FROM comments WHERE id=" . $_GET['ID'];
        $resultExists = mysqli_query($conn, $sqlExists);

        if()

var_dump($resultExists); exit;

        $sql = "DELETE FROM comments WHERE id=" . $_GET['ID'];
        $result = mysqli_query($conn, $sql);
        var_dump( $result);
        if( $result) {
            $post = mysqli_fetch_assoc($result);
            $post['post_id'] = $pd->post->id;
            header('Refresh: 1; url=post.php?ID=' . $pd->post->id);
        }
      
       
        
    } else {
        header('Location: index.php');
    }
} 
?>
</div>