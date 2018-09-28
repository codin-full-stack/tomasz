<?php
include 'jsonFunctions.php';
$dir = 'regFormJson';



$array = [
        'vard' => 'Vardas',
        'pavd' => 'Pavarde',
        'amz' => 'Amzius',
        'email' => 'E-mail',
        'miest' => 'Miestas',
        'lyt' => 'Lytis'
    ];

   
if (!empty($_POST)) {
    arrayToJsonFile($dir, $_POST);
    $fileName = $_POST['vard'] . "_" . $_POST['pavd'] . '.json'; 
    retrieve($fileName, $_POST, $array);
}

?>