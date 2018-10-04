
<?php
include 'config.php';
include 'header.php';
include 'sessionCheck.php';
?>


<div class="textPad">
    <form action="" method="POST">
        <input type="text" placeholder="title" name="title" required>
        <textarea name="content" id="content" rows="20" cols="54"></textarea>
        <!-- <input type="text" name="content" required> -->
        <input type="file" name="myimage">
        <button type="submit">POST</button>
   
   
<?php 
if (!empty($_POST)){
    if ($_POST['pass'] != $_POST['passconf']) {
        echo("Neatitinka slaptazodziai.");
    } else {
        include('PushAndRetrieveLast.php');
    }
}
?>



</form>
</div>



