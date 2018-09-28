<?php 
include 'header.php'; 
?>


<div class="container">
    <form action="" method="POST">
        <label for="Username"><b>Email</b></label>
        <input type="text" placeholder="Email" name="email" required>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Password" name="pass1" required>
        <div class="mygtukas">
            <button type="submit">Prisijungti</button>
        </div>
    </form>

<form action="form.php" method="POST">
    <button class="mygtukasReg" type="submit">Registruotis!</button>
</form>

<?php

if (!empty($_POST)) {
    loginU($_POST);
}
?>

<?php include('footer.php')?>
