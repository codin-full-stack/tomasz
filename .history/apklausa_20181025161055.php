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
                <label for="" class="labelradio">
                    <br><br>Male <input type="radio" name="lyt" value="Vyras" checked="checked">
                    Female <input type="radio" name="lyt" value="Moteris"><br><br>
                </label>
            </div>
            <div class="box-item">
                <label for="" class="label">
                    Your age<br>
                </label>
                <input type="text" name="amz" class="field" placeholder="">
            </div>
            <div class="box-item">
                <label for="" class="label">
                    Phone you have?<br>
                </label>
                <input type="text" name="phoneatm" class="field" placeholder="">
            </div>
            <div class="box-item">
                <label for="" class="label">
                    How often do you change your smartphones?<br>
                </label>
                <input type="text" name="phonechange" class="field" placeholder="">
            </div>
            <div class="box-item">
            </div>
            <div class="box-item">
                <label for="" class="label">
                Why do you change your phone?<br>
                </label>
                <input type="text" name="whychange" class="field" placeholder="">
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
 
            <div class="photo-upload">
            <label for="" class="labelspace">
                Anything else you would like to add..
            </label>
                 <textarea name="content" id="content" rows="3.5" cols="36" value="" ></textarea>
            </div>
            <div class="box-bottom">
                <button name="reg" type="sumbit" class="regButton">
                    Finish
                </button>
            </div>
        </div>
    </div> 
    </form>
    <?php 




if (!empty($_POST)){

    $name=$_POST['vard']; //
    $content=$_POST['content']; //
    $phoneatm=$_POST['phoneatm']; //
    $phonechange=$_POST['phonechange'];
    $age=$_POST['amz']; //
    $city=$_POST['miest']; //
    $gender=$_POST['lyt']; 
    $whychange=$_POST['whychange'];
    $ip = $_SERVER['REMOTE_ADDR']; 
 
    
    if (!empty($_POST)) {
        $sqlc = "SELECT user_ip from projectx";
        $res = mysqli_query($conn, $sqlc);
        $row = mysqli_fetch_assoc($res);
            if

        $sql = "INSERT INTO projectx (user_ip, name, content, phoneatm, phonechange, age, favbrand, gender, whychange)
        VALUES('$ip', '$name', '$content', '$phoneatm', '$phonechange', '$age', '$city', '$gender', '$whychange')";     
       
       } if(mysqli_query($conn, $sql)){
            echo "Ikelta.";
        } else {
            echo "KLAIDA!! NEIKELTA $sql. " . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
    ?>
    
</div>    
</body> 
</html>