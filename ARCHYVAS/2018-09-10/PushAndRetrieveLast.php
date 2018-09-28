<?php
    $array = [
        'vard' => 'Vardas',
        'pavd' => 'Pavarde',
        'amz' => 'Amzius',
        'email' => 'E-mail',
        'miest' => 'Miestas',
        'lyt' => 'Lytis'
    ];
   
if (!empty ($_POST)) {
// encode to json
    $fileName = 'regFormJson' . DIRECTORY_SEPARATOR . urlencode($_POST['vard'] . "_" . $_POST['pavd'] . '.json');

    $myJson = json_encode($_POST, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);

    // var_dump($fileName);
    file_put_contents($fileName, $myJson);
    // var_dump($myJson);
// retrieve from json and show last registered user
    $yourJson = file_get_contents($fileName);
    $json = json_decode($yourJson, true);
    // var_dump ($yourJson);
    // var_dump ($json);
    foreach ($json as $key => $item) {
        if (!is_array($item)) {
            echo $key . '=>' . $item . '<br/>';
        } else {
            foreach ($item as $key => $val) {
                echo $key . '=>' . $val . '<br/>';
            }
        }
    }
}


?>