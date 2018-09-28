<?php include 'header.php';?>

<div class="paieska">
    <form action="" method="POST">
        <label for="vrd"><b>Vardas</b></label>
        <input type="text" placeholder="Vardas" name="vard" required>
        <label for="pvd"><b>Pavarde</b></label>
        <input type="text" placeholder="Pavarde" name="pavd" required>
        <br><br>
        <div class="mygtukasPaieska">
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
  

if (!empty($_POST)) {
    $fileName = $_POST['vard'] . "_" . $_POST['pavd'] . '.json'; 
    searchUser($info2, $fileName, $_POST);
}

?>
<br><br><br>
<div class="linkBack">
<a href="index.php" class="button">Grizti i registracijos forma</a>
</div>

