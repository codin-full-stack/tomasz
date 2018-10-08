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
                <input type="text" name="vrd" value="<?php echo (! empty($data['name']) ? $data['name'] : ''); ?>">
                </div>
                <div class="box-item">
                <label for="" class="label">
                    Surename<br>
                </label>
                <input type="text" name="pvd" value="<?php echo (! empty($data['surename']) ? $data['surename'] : ''); ?>">
                </div>
                <div class="box-item">
                <label for="" class="label">
                    Password<br>
                </label>
        <input type="password" placeholder="Slaptazodis" name="pass">
        <label for="pass"><b>Slaptazodis</b></label>
        <input type="password" placeholder="Pakartok slaptazodi" name="passconf">
        <label for="email"><b>Email</b></label>
        <input type="text" name="email" value="<?php echo (! empty($data['email']) ? $data['email'] : ''); ?>">
        <label for="amz"><b>Amzius</b></label>
        <input type="text" name="amz" value="<?php echo (! empty($data['age']) ? $data['age'] : ''); ?>">
        <label for="city"><b>Miestas</b></label><br>
        <select name="city" id="">
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
        <br><br>Vyras <input type="radio" name="lyt" <?=$data['gender']=="M" ? "checked" : ""?> value="M" >
        Moteris <input type="radio" name="lyt" <?=$data['gender']=="F" ? "checked" : ""?> value="F" >
        <div class="mygtukas">
            <button type="submit">ATNAUJINTI</button>
        </div>
    </form>
</div>

<?php

if (!empty($_POST)) {
    if ($_POST['pass'] != $_POST['passconf']) {
        echo("Neatitinka slaptazodziai.");
    } else {
        $_POST['pass'] = md5($_POST['pass']);
        $usql = "UPDATE users SET name ='".$_POST['vrd']."', surename = '" . $_POST['pvd'] . "', email = '" . $_POST['email'] . "', city = '" . $_POST['city'] . "', age = '" . $_POST['amz'] . "', password = '" . $_POST['pass'] . "', gender = '" . $_POST['lyt'] . "' where id = '" . $data['id']. "'";
        $result= mysqli_query($conn, $usql);
        if($result) {
                echo "Atnaujinta";
        } else {
                echo "KLAIDA!! NEIKELTA $usql. " . mysqli_error($conn);
        }   
    }
}

?>
</body> 
</html>