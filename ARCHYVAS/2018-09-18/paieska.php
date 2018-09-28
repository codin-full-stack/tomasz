<?php include 'header.php';
include 'sessionCheck.php';
?>

<div class="paieska">
    <form action="" method="POST">
        <label for="email"><b>Paieska pagal E-mail</b></label>
        <input type="text" placeholder="E-mail" name="email" required>
        <br><br>
        <div class="mygtukasPaieska">
            <button type="submit">Paieska</button>
        </div>
    </form>
    


<?php 


$info2 = [
    'vard' => 'Vardas',
    'pavd' => 'Pavarde',
    'amz' => 'Amzius',
    'email' => 'E-mail',
    'miest' => 'Miestas',
    'lyt' => 'Lytis'
];
  

if (!empty($_POST)) {
    $fileName = urlencode($_POST['email'] . '.json'); 
    echo "<br><br>";
    searchUser($info2, $fileName, $_POST);
}

?>
<br><br><br>
<div class="linkBack">
<a href="index.php" class="button">Grizti i registracijos forma</a>
</div>

<?php include('footer.php'); ?>
