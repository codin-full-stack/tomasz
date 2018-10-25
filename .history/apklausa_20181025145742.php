<?php include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Registracija</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/styles.css" type="text/css">
</head>

<html>
<body background="bgimage.jpg">
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="buttons">

        </div>
        <div class="boxReg">
            <div class="box-item">
                <label for="" class="label">
                    Name<br>
                </label>
                <input type="text" name="vard" class="field" placeholder="">
            </div>
            <div class="box-item">
                <label for="" class="label">
                    Phone you have?<br>
                </label>
                <input type="text" name="pavd" class="field" placeholder="">
            </div>
            <div class="box-item">
                <label for="" class="label">
                    How often you change your smartphone?<br>
                </label>
                <input type="text" name="pass" class="field" placeholder="">
            </div>
            <div class="box-item">
            </div>
            <div class="box-item">
                <label for="" class="label">
                Why do you change your phone?<br>
                </label>
                <input type="text" name="email" class="field" placeholder="">
            </div>
            <div class="box-item">
                <label for="" class="label">
                    Your age<br>
                </label>
                <input type="text" name="amz" class="field" placeholder="">
            </div>
            <div class="box-item">
                <label for="" class="labelspace">
                  <br>Your favorie smartphone brand?&nbsp;&nbsp;&nbsp;&nbsp;
                </label>
                <select id="miest" name="miest" onchange="miestaz()">
            <option value="0">Choose</option>
            <?php
                $citiesArray = [
                    'Iphone'   => 'Iphone',
                    'Samsung'   => 'Samsung',
                    'Huawei'   => 'Huawei',
                    'LG'  => 'LG',
                    'HTC'  => 'HTC',
                    'Nokia'  => 'Nokia',
                ];
            ?>
            <?php foreach ($citiesArray as $key=> $value) { ?>
                <option value="<?php echo $value; ?>">
                    <?php echo $value; ?>
                </option>              
            <?php } ?>
        </select>    
            </div>
            <p id="miestas"></p>
            <div class="box-item">
                <label for="" class="labelradio">
                    <br><br>Vyras <input type="radio" name="lyt" value="Vyras" checked="checked">
                    Moteris <input type="radio" name="lyt" value="Moteris"><br><br>
                </label>
            </div>
            <div class="photo-upload">
                 <textarea name="content" id="content" rows="10" cols="10" value="" ></textarea>
            </div>
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
</body> 
</html>