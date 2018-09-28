
<?php

// $_SESSION = [
//     'uname' => $_POST['email']
// ];
// showInfo();
?>

<div class="container">
   <?php if(isset($_SESSION['email'])){
    echo "Sveiki: " . $_SESSION['email'];
   
    
}

   ?>
</div>
 


