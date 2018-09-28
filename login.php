<?php
include 'config.php'; 
include 'header.php'; 
?>


<div class="container">
    <form action="" method="POST">
        <label for="Username"><b>Email</b></label>
        <input type="text" placeholder="Email" name="email" required>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Password" name="pass1" required>
        <div class="mygtukas">
            <button type="submit" name="doLogin">Prisijungti</button>
        </div>
    </form>

<form action="form.php" method="POST">
    <button class="mygtukasReg" type="submit">Registruotis!</button>
</form>

<?php

if (!empty($_POST)){
    $email = $_POST['email'];
    $sql = "select * from users where email='$email' ";
 
    // var_dump($sql);
 
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
 
    // var_dump($user);
 
    $loginpass = md5($_POST['pass1']);
 
    // var_dump($loginpass);
 
    if ($loginpass == $user['password']){
 
        $_SESSION = [
            'id'   => $user['id']
        ];
 
        header('location: index.php');
    } else {
        echo 'Blogas slaptazodis';
    }
 } else {
    echo 'Uzpildykite visus laukus';
 }

?>

<?php include('footer.php')?>

