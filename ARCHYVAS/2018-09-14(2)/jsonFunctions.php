<?php

function scanFiles($dir) {
    $path = __DIR__ . DIRECTORY_SEPARATOR . $dir;
    $files = scandir($path);

    return $files;
}

/** DECODE json to array and return  */
function jsonFileToArray($dir, $file) {
    $path = __DIR__ . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR;
    $file = file_get_contents($path . $file, FILE_USE_INCLUDE_PATH);
    $allInfo = json_decode($file, true);

    return $allInfo;
}

/** ENCODE array to JSON */
function arrayToJsonFile($dir, $data) {
    $path = __DIR__ . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR;
    $encodeFileName = urlencode($data['email'] . '.json');
    $json = json_encode($data, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
    file_put_contents($path . $encodeFileName , $json);
    echo "Ikelta: $path . $encodeFileName . <br> . <br>";
}

/** Show all registered users data  */
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
 * SEARCH FOR USER
 */
function searchUser($labelsArray, $fileName, $data) {
    if (!empty ($data)) {
        // var_dump (fileExists('regFormJson', $fileName)); FUNKCIJOS test
        if (fileExists('regFormJson', $fileName)) {  
            $json = jsonFileToArray('regFormJson', $fileName);           
            foreach ($json as $key => $item) {
                if (!empty($item)) {
                    echo $labelsArray[$key] . ': ' .  $item . '<br>' ; 
                }
            }
        } else {
            echo "Tokio vartotojo nera";
        }
    }
}

/** Show registered info */
function retrieve($fileName, $data, $labelsArray ) {
    if (!empty ($data)) {
            $json = jsonFileToArray('regFormJson', $fileName);
            foreach ($json as $key => $item) {
                if (!empty($item)) {                    
                    echo $labelsArray[$key] . ': ' .  $item . '<br>' ;      
            }
        }
    }
}


function loginU($fileName, $data) {
    if (!empty($data) && fileExists('regFormJson', $fileName)) {
        
        header("location: index.php");
    } else {
        header("location: login.php");
    }
}


?>




