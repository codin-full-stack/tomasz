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
            unset($json['pass']);          
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


// function loginU($fileName, $data) {
//     if (!empty($data) && fileExists('regFormJson', $fileName)) {
        
//         header("location: index.php");
//     } else {
//         header("location: login.php");
//     }
// }

function getFilePath($logindata){
    $filePath = __DIR__ . DIRECTORY_SEPARATOR . 'regFormJson' . DIRECTORY_SEPARATOR . urlencode($logindata['email'] . '.json');
 
    return $filePath;
 }
 
 /** Funkcija vartotojo duomenu istraukimui */
 
 function getUserInfo($filePath){
    if(file_exists($filePath)){
        $info2 = file_get_contents($filePath);
        $masyv = json_decode($info2, true);
        return $masyv;
    } else {
        return null;
    }
 }
 
 function loginU($data){
 
    $filePath = getFilePath($data);
    $userInfo = getUserInfo($filePath);
 
    if(!empty($userInfo)){
 
        checkPass($filePath, $data);

    /** jei vartotojas egzistuoja issitraukti jo duomenis, patikrinti issaugota slaptazodi su postinamu passu ir jei jei sutampa uzsetinti sesija */
    } else {
        echo 'Neteisingas slaptazodis';
    }
 }
 
 /** funkcija slaptazodzio palyginimui */
 function checkPass($filePath, $data){
 
    $data['pass1'] = md5($data['pass1']);
 
    $userInfo = getUserInfo($filePath);
 
    if ($userInfo['pass'] == $data['pass1']){
        
        $_SESSION = [
            'email'   => $userInfo['email'],
        ];

        header('refresh:0.1; index.php');
    } else {
        echo 'Neteisingas slaptazodis';
    }
 }


 function userInfo($labelsArray, $fileName) {  
    if (fileExists('regFormJson', $fileName)) {  
        $json = jsonFileToArray('regFormJson', $fileName);
        unset($json['pass']);          
        foreach ($json as $key => $item) {
            if (!empty($item)) {
                echo $labelsArray[$key] . ': ' .  $item . '<br>' ; 
            }
        }
    }
 }


?>




