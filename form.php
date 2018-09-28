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
<body background="media/bgwp.jpg">
    <!-- <div class="navigation">  
        <?php //include('TopMenu.php')?>    
    </div> -->

<div class="container">
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="vrd"><b>Vardas</b></label>
        <input type="text" placeholder="Vardas" name="vard" required>
        <label for="pvd"><b>Pavarde</b></label>
        <input type="text" placeholder="Pavarde" name="pavd" required>
        <label for="pass"><b>Slaptazodis</b></label>
        <input type="password" placeholder="Slaptazodis" name="pass" required>
        <label for="pass"><b>Slaptazodis</b></label>
        <input type="password" placeholder="Pakartok slaptazodi" name="passconf" required>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="E-mail" name="email" required>
        <label for="amz"><b>Amzius</b></label>
        <input type="text" placeholder="Amzius" name="amz" required>
        <label for="miest"><b>Miestas</b></label><br>
        <!-- <input type="text" placeholder="Miestas" name="miest" required> -->
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
        <br><br>Vyras <input type="radio" name="lyt" value="M" checked="checked">
        Moteris <input type="radio" name="lyt" value="F"><br><br>
        <label for="image"><b>Nuotrauka</b></label><br>
        <input type="hidden" name="size" value="1000000">
            <div>
            <input type="file" name="image"><br><br><br>
            </div>
        <div class="mygtukas">
            <button type="submit">Registruotis!</button>
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


