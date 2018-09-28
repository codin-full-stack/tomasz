<?php

function scanFiles($dir) {
    $path = __DIR__ . DIRECTORY_SEPARATOR . $dir;
    $files = scandir($path);

    return $files;
}

/**
 * 
 */
function jsonFileToArray($dir, $file) {
    $path = __DIR__ . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR;
    $file = file_get_contents($path . $file, FILE_USE_INCLUDE_PATH);
    $allInfo = json_decode($file, true);

    return $allInfo;
}

function arrayToJsonFile($dir, $data) {
    $path = __DIR__ . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR;
    $encodeFileName = urlencode($data['vard'] . "_" . $data['pavd'] . '.json');
    $json = json_encode($data, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
    file_put_contents($path . $encodeFileName , $json);
    echo "Ikelta: $path . $encodeFileName . ' ' . ";
    // var_dump ($path . $encodeFileName );
}
/**
 * 
 * 
 * 
 * 
 */

function allRegisteredList($files, $dir) {
    foreach ($files as $key => $value) {
        $pos = strpos($value, '.json');
        if ($pos != false) {
           $allInfo = jsonFileToArray($dir, $value);
            
            foreach ($allInfo as $key => $item) {
                if (!is_array($item)) {
                    echo $key . '=>' . $item . '<br/>';
                } else {
                    foreach ($item as $key => $val) {
                        echo $key . '=>' . $val . '<br/>';
                    }
                }
            }
            echo '<br/>';    
        }
    }
}

function fileExists($dir, $fileName) {
    $path = __DIR__ . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR;

    if(file_exists($path . $fileName)) {
        return true;
    } else {
        return false;
    }
}
/**
 * SEARCH
 */
function searchUser($labelsArray, $fileName, $data) {
    // $labelsArray = $info2;
    // var_dump($data);
    if (!empty ($data)) {

        if (fileExists('regFormJson', $fileName)) {  

            $json = jsonFileToArray('regFormJson', $fileName);
    //   var_dump( $json);
            foreach ($json as $key => $item) {
                if (!empty($item)) {
                    echo $labelsArray[$key] . ': ' .  $item . '<br>' ; 
                } else {
                    echo "Tokio vartotojo nera";
                }
            }
        }
    }
}

function retrieve($labelsArray, $fileName, $data) {
    // $labelsArray = $info2;
    // var_dump($data);
    if (!empty ($data)) {

        // if (fileExists('regFormJson', $fileName)) {  

            $json = jsonFileToArray('regFormJson', $fileName);
    //   var_dump( $json);
            foreach ($json as $key => $item) {
                if (!empty($item)) {                    
                    echo $labelsArray[$key] . ': ' .  $item . '<br>' ;      
            }
        }
    }
}




?>







