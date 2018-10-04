<?php include('config.php');
include('header.php')?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Registracija</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/styles.css" type="text/css">
</head>

<html>
<body>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="buttons">
            <button type="button" onclick="window.location.href='http://localhost:8081/tomasz/login.php'" class="lButton" required>Login</button>
            <button type="button" onclick="window.location.href='http://localhost:8081/tomasz/registration.php'" class="rButton"required>Register</button>
        </div>
        <div class="boxReg">
            <div class="box-item">
                <label for="" class="label">
                    Name<br>
                </label>
                <input type="text" name="vard" class="field" placeholder="Name">
            </div>
            <div class="box-item">
                <label for="" class="label">
                    Surename<br>
                </label>
                <input type="text" name="pavd" class="field" placeholder="Surename">
            </div>
            <div class="box-item">
                <label for="" class="label">
                    Password<br>
                </label>
                <input type="password" name="pass" class="field" placeholder="*********">
            </div>
            <div class="box-item">
                <label for="" class="label">
                    Confirm Password<br>
                </label>
                <input type="password" name="passconf" class="field" placeholder="*********">
            </div>
            <div class="box-item">
                <label for="" class="label">
                    Email<br>
                </label>
                <input type="text" name="email" class="field" placeholder="example@gmail.com">
            </div>
            <div class="box-item">
                <label for="" class="label">
                    Age<br>
                </label>
                <input type="text" name="amz" class="field" placeholder="Age">
            </div>
            <div class="box-item">
                <label for="" class="labelspace">
                  <br>Miestas&nbsp;&nbsp;&nbsp;&nbsp;
                </label>
                <select id="miest" name="miest" required>
            <option value="0">Pasirink miesta</option>
            <?php
                $citiesArray = [
                    'vln'   => 'Vilnius',
                    'kns'   => 'Kaunas',
                    'klp'   => 'Klaipeda',
                    'pnvz'  => 'Panevezys',
                    'siau'  => 'Siauliai',
                    'taur'  => 'Taurage',
                ];
            ?>
            <?php foreach ($citiesArray as $key=> $value) { ?>
                <option value="<?php echo $key; ?>">
                    <?php echo $value; ?>
                </option>              
            <?php } ?>
        </select>    
            </div>
            <div class="box-item">
                <label for="" class="labelradio">
                    <br><br>Vyras <input type="radio" name="lyt" value="M" checked="checked">
                    Moteris <input type="radio" name="lyt" value="F"><br><br>
                </label>
            </div>
            <div class="photo-upload"
            <div class="box-bottom">
                <button name="reg" type="sumbit" class="regButton">
                    Register
                </button>
            </div>
        </div>
    </div> 
    </form>
    <?php 


if (!empty($_POST)){
    if ($_POST['pass'] != $_POST['passconf']) {
        echo("Neatitinka slaptazodziai.");
    } else {
        include('PushAndRetrieveLast.php');
    }
}
?>

</div>
<?php include('footer.php')?>        
</body> 
</html>