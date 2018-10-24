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
        $sql = "DELETE FROM comments WHERE id=" . $_GET['ID'];  
        if() {
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