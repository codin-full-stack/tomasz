
<?php
include 'config.php';
include 'header.php';
include 'sessionCheck.php';
?>


<div class="textPad">
    <form action="" method="POST" enctype="multipart/form-data">
    
        <input type="text" placeholder="title" name="title" required>
        <textarea name="content" id="content" rows="20" cols="48"></textarea>
        <!-- <input type="text" name="content" required> -->
        <input type="file" name="myimage">
        <button type="submit">POST</button>
   
   
<?php 
if (!empty($_POST)){
        include('uploadPost.php');
    } else {
        //
    }
?>

</form>
</div>



