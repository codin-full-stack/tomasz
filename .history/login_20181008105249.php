<?php
include 'config.php'; 
include 'header.php'; 
?>


<html>
<body>
    <div class="feed">
        <div class ="container">
        <form action="" method="POST">
        <div class="buttons">
            <button type="button" onclick="window.location.href='http://localhost:8081/tomasz/login.php'" class="rButton" required><b>Login</b></button>
            <button type="button" onclick="window.location.href='http://localhost:8081/tomasz/registration.php'" class="lButton"required>Register</button>
        </div>
        <div class="box">
            <div class="box-item">
                <label for="" class="label">
                    Email<br>
                </label>
                <input type="text" name="email" class="field" placeholder="example@gmail.com">
            </div>
            <div class="box-item">
                <label for="" class="label">
                    Password
                </label>
                <input type="password" name="pass1" class="field" placeholder="**********">
            </div>
            <div class="box-bottom">
                <a href="" class="forgot-link">Forgot password?</a>
                <button name="doLogin" class="sigin">
                    SignIn
                </button>
            </div>
        </div>
    </div>
</div> 
    </form>        
</body> 
</html>
<?php

if (!empty($_POST)){
    $email = $_POST['email'];
    $sql = "select * from users where email='$email' ";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
    $loginpass = md5($_POST['pass1']);
    if ($loginpass == $user['password']){
 
        $_SESSION = [
            'id'   => $user['id']
        ];
 
        header('location: index.php');
    } else {
        echo 'Blogas slaptazodis';
    }
 } else {
    //none
 }

?>

<?php include('footer.php')?>

