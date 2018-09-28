<?php
include 'jsonFunctions.php';
$dir = 'regFormJson';

$_POST['pass'] = md5($_POST['pass']);

$array = [
        'vard' => 'Vardas',
        'pavd' => 'Pavarde',
        'amz' => 'Amzius',
        'email' => 'E-mail',
        'miest' => 'Miestas',
        'lyt' => 'Lytis'
    ];


if (!empty($_POST)) {
    unset($_POST['passconf']);
    arrayToJsonFile($dir, $_POST);
    // $fileName = $_POST['email'] . '.json'; 
    // $fileName = $_POST['vard'] . "_" . $_POST['pavd'] . '.json'; 
    // retrieve($fileName, $_POST, $array);
}


?>