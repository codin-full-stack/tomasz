
<html>
    <head>
        <title>Prisiunk!</title>
    </head>
<html>
<div class="container">
    <form action="" method="POST">
        <label for="Username"><b>Username</b></label>
        <input type="text" placeholder="Username" name="uname" required>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Password" name="upswd" required>
        <div class="mygtukas">
            <button type="submit">Log in!</button>
        </div>
    </form>

<?php
session_start();
if (!empty($_POST)) {
    $_SESSION = [
        'uname' => $_POST['uname'],
        'upswd' => $_POST['upswd'],
    ];
    // echo $_SESSION['uname'] . '<br>' . $_SESSION['upswd'] . '<br>' ;
}


if(isset($_SESSION['uname'])){
    header("location: index.php");
}

?>

