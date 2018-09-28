
<?php include 'header.php'; ?>

<div class="userInfo">
<?php 
$info2 = [
    'vard' => 'Vardas',
    'pavd' => 'Pavarde',
    'amz' => 'Amzius',
    'email' => 'E-mail',
    'miest' => 'Miestas',
    'lyt' => 'Lytis'
];
  

if (isset($_SESSION['email'])) {
    $fileName = urlencode($_SESSION['email'] . '.json');
    echo "<b>Aktyvaus vartotjo informacija:</b>";
    echo "<br><br>";
    userInfo($info2, $fileName);
}
?>
</div>