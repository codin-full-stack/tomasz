<div class="container">
    <form action="" method="POST">
        <label for="vrd"><b>Vardas</b></label>
        <input type="text" placeholder="Vardas" name="vard" required>
        <label for="pvd"><b>Pavarde</b></label>
        <input type="text" placeholder="Pavarde" name="pavd" required>
        <br><br>
        <div class="mygtukas">
            <button type="submit">Paieska</button>
        </div>
    </form>
    


<?php

if (!empty ($_POST)) {
    $info2 = [
        'vard' => 'Vardas',
        'pavd' => 'Pavarde',
        'amz' => 'Amzius',
        'email' => 'E-mail',
        'miest' => 'Miestas',
        'lyt' => 'Lytis'
    ];

$fileName = 'regFormJson' . DIRECTORY_SEPARATOR . $_POST['vard'] . "_" . $_POST['pavd'] . '.json';

if (file_exists ($fileName)) {  
    $info = file_get_contents($fileName); 
    $json = json_decode($info, true);
    // var_dump ($json);
    foreach ($json as $key => $item) {
        // var_dump(is_array($item));
       if (!empty($item)) {
        // var_dump ($item);
        echo ($info2[$key]) . ': ' .  ($item) . '<br>' ; 

       }
    }

} else{
    echo "Tokio vartotojo nera";
}
}
?>
<br><br><br>
<a href="index.php" class="button">Grizti i registracijos forma</a>
