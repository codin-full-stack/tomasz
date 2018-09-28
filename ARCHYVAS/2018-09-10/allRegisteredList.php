<a href="index.php" class="button">Grizti i registracijos forma</a>
<br><br>
<?php
$dir = "C:/wamp/www/TomasZ/regFormJson/";
$files = scandir($dir);
foreach ($files as $key => $value) {
    $pos = strpos($value, '.json');
    if ($pos === false) {
        //nothing
    }
    else
    {
        //echo $value;
        $ext = pathinfo($value, PATHINFO_EXTENSION);
        if($ext=='json')
        {
            $file = file_get_contents($dir.$value, FILE_USE_INCLUDE_PATH);
            $allInfo = json_decode($file, true);
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
?>