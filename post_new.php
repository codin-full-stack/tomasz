
<?php
include 'config.php';
include 'header.php';
include 'sessionCheck.php';
?>


<div class="textPad">
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" class="fieldPost" placeholder="Title here" name="title" required><br>
        <textarea name="content" id="content" rows="20" cols="42"></textarea>
        <!-- <input type="text" name="content" required> -->
        <input type="file" name="myimage" class="inputFile">
        <div class="box-bottom">
        <button type="submit" class="postButton">POST</button>
        </div>
   
   
<?php 
if (!empty($_POST)){
        include('uploadPost.php');
    } else {
        //
    }
?>

</form>
</div>



