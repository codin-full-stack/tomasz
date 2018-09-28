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
include 'jsonFunctions.php'; 

$info2 = [
    'vard' => 'Vardas',
    'pavd' => 'Pavarde',
    'amz' => 'Amzius',
    'email' => 'E-mail',
    'miest' => 'Miestas',
    'miest' => 'Miestas',
    'lyt' => 'Lytis'
];

$fileName = $_POST['vard'] . "_" . $_POST['pavd'] . '.json';
   
searchUser($info2, $fileName, $_POST);
?>
<br><br><br>
<a href="index.php" class="button">Grizti i registracijos forma</a>
