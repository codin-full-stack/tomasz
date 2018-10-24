<?php
include 'config.php';
include 'header.php';
include 'sessionCheck.php';
?>
<?php

$sql = "SELECT * FROM users WHERE id = '" . $_SESSION['id'] . "'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
?>
<html>
<body>
<div class="container">
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="boxReg">
            <div class="box-item">
                <label for="" class="label">
                    Name<br>
                </label>
                <input type="text" name="vrd" class="field" value="<?php echo (! empty($data['name']) ? $data['name'] : ''); ?>">
                </div>
                <div class="box-item">
                <label for="" class="label">
                    Surename<br>
                </label>
                <input type="text" name="pvd" class="field"  value="<?php echo (! empty($data['surename']) ? $data['surename'] : ''); ?>">
                </div>
                <div class="box-item">
                <label for="" class="label">
                    Password<br>
                </label>
                <input type="password" class="field"  placeholder="Slaptazodis" name="pass">
                </div>
                <div class="box-item">
                <label for="" class="label">
                    Confirm Password<br>
                </label>
                <input type="password" class="field"  placeholder="Pakartok slaptazodi" name="passconf">
                </div>
                <div class="box-item">
                <label for="" class="label">
                    Email<br>
                </label>
                <input type="text" name="email" class="field"  value="<?php echo (! empty($data['email']) ? $data['email'] : ''); ?>">
                </div>
                <div class="box-item">
                <label for="" class="label">
                    Age<br>
                </label>
                <input type="text" name="amz" class="field"  value="<?php echo (! empty($data['age']) ? $data['age'] : ''); ?>">
                </div>
                <div class="box-item">
                <label for="" class="labelspace">
                  <br>Miestas&nbsp;&nbsp;&nbsp;&nbsp;
                </label>
                    <select name="city" id="city">
                    <?php
                        $cities = [
                            'vln'   => 'Vilnius',
                            'kns'   => 'Kaunas',
                            'klp'   => 'Klaipeda',
                            'pnvz'  => 'Panevezys',
                            'siau'  => 'Siauliai',
                            'taur'  => 'Taurage',
                        ];
                            ?>
                <?php foreach ($cities as $key => $value) { ?>
                    <?php if($data['city'] == $key) { ?>
                        <option value="<?php echo $key; ?>" selected>
                            <?php echo $value; ?>
                        </option>
                    <?php } else { ?>
                        <option value="<?php echo $key; ?>">
                            <?php echo $value; ?>
                        </option>
                    <?php } ?>
                <?php } ?>
    </select>
                <div class="box-item">
                    <label for="" class="labelradio">
                    <br><br>Vyras <input type="radio" name="lyt" <?=$data['gender']=="M" ? "checked" : ""?> value="M" >
                    Moteris <input type="radio" name="lyt" <?=$data['gender']=="F" ? "checked" : ""?> value="F" >
                    </label>
                </div>
                <div class="photo-upload">
                    <input type="file" name="myimage">
                </div>
                <div class="box-bottom">
                    <button type="submit" class="regButton">ATNAUJINTI</button>
                </div>
         </form>
</div>

<?php

if (!empty($_POST)) {
    if ($_POST['pass'] != $_POST['passconf']) {
        echo("Neatitinka slaptazodziai.");
    } else {
        if($_FILES['myimage']['error'] == 0){
            $_POST['pass'] = md5($_POST['pass']);
            $usql = "UPDATE users SET name ='".$_POST['vrd']."', surename = '" . $_POST['pvd'] . "', email = '" . $_POST['email'] . "', city = '" . $_POST['city'] . "', age = '" . $_POST['amz'] . "', password = '" . $_POST['pass'] . "', gender = '" . $_POST['lyt'] . "' where id = '" . $data['id']. "'";
            $result= mysqli_query($conn, $usql);
        } else {
            $_POST['pass'] = md5($_POST['pass']);
            $imagename=$_FILES["myimage"]["name"]; 
            $imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));
            $usql = "UPDATE users SET name ='".$_POST['vrd']."', surename = '" . $_POST['pvd'] . "', email = '" . $_POST['email'] . "', city = '" . $_POST['city'] . "', age = '" . $_POST['amz'] . "', password = '" . $_POST['pass'] . "', gender = '" . $_POST['lyt'] . "',image = '" . $imagetmp . "',image_text = '" . $imagename . "' where id = '" . $data['id']. "'";
            $result= mysqli_query($conn, $usql);
        }   
    }
}

?>
</div>
</body> 
</html>