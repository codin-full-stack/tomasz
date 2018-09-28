<?php include('header.php'); ?>
<div class="container">
    <form action="" method="POST">
        <label for="vrd"><b>Vardas</b></label>
        <input type="text" placeholder="Vardas" name="vard" required>
        <label for="pvd"><b>Pavarde</b></label>
        <input type="text" placeholder="Pavarde" name="pavd" required>
        <label for="email"><b>Pavarde</b></label>
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
                <option value="<?php echo $value; ?>">
                    <?php echo $value; ?>
                </option>              
            <?php } ?>
        </select>
        <br><br>Vyras <input type="radio" name="lyt" value="Vyras" checked="checked">
        Moteris <input type="radio" name="lyt" value="Moteris"><br><br>
        <div class="mygtukas">
            <button type="submit">Registruotis!</button>
        </div>
    </form>

<?php include('PushAndRetrieveLast.php')?>

</div>
<?php include('footer.php')?>


