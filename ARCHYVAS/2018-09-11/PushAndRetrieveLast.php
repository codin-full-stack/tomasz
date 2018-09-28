<?php
include 'jsonFunctions.php';
$dir = 'regFormJson';

arrayToJsonFile($dir, $_POST);

$array = [
        'vard' => 'Vardas',
        'pavd' => 'Pavarde',
        'amz' => 'Amzius',
        'email' => 'E-mail',
        'miest' => 'Miestas',
        'lyt' => 'Lytis'
    ];

// pushAndRetrieve($dir, $_POST);
// encode to json
$fileName = $_POST['vard'] . "_" . $_POST['pavd'] . '.json';
retrieve($array, $fileName, $_POST);

// retrieve from json and show last registered user
//     $yourJson = file_get_contents($fileName);
//     $json = json_decode($yourJson, true);
//     foreach ($json as $key => $item) {
//         if (!is_array($item)) {
//             echo $key . '=>' . $item . '<br/>';
//         } else {
//             foreach ($item as $key => $val) {
//                 echo $key . '=>' . $val . '<br/>';
//             }
//         }
//     }
// }


?>