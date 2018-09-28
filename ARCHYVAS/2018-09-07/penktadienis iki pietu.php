<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
<title>Registracija</title>
<meta name="viewport"
      content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body background="bgwp.jpg">
<!-- <body bgcolor="#b27429"> -->
    <div>
    <?php //include('form.php');?>
    </div>
    </body>
</html>
<!-- <div class="container"> -->
    <?php
    //      $array = [
    //         1=>[
    //             'vard'=>'Vardas1',
    //             'pavd'=>'Pavarde1',
    //             'email'=>'E-mail1',
    //             'amz'=>'Amzius1',
    //             'miest'=>'Miestas1',
    //             'lyt'=>'Lytis1',
    //         ],
    //         2=> [
    //             'vard'=>'Vardas2',
    //             'pavd'=>'Pavarde2',
    //             'email'=>'E-mail2',
    //             'amz'=>'Amzius2',
    //             'miest'=>'Miestas2',
    //             'lyt'=>'Lytis2',
    //             'pravarde' => [
    //                 'prvd' => 'Pravarde',
    //                 'drvn' => 'Dar viena',
    //             ],
    //         ],
    // ];
// $json = json_encode($array);
// var_dump ($array);
// echo $json;
// $json = json_decode($json, true);
// var_dump ($json);
// foreach ($json as $key=>$item) {
//     foreach ($item as $key2 => $item2) {
//         if (is_array($item2)) {
//             foreach ($item2 as $key3 => $item3) {
//                 echo "$key3:   $item3 <br>";
//             }
//         }   else {
//                 echo "$key2:   $item2 <br>";
//             }
//     }
// }
        
        

    
    // var_dump ($array[1]);
    // var_dump ($array[2]);


    // foreach ($array as $key=>$item) { 
    //     foreach ($item as $key1=>$item1) {
    //         if (is_array($item1)) {
    //             foreach ($item1 as $key2=>$item2) {
    //                 echo "$item2 <br>";
    //             }
    //         } else {
    //             echo "$item1 <br>";
    //         }
    //     }                   
    // }

    
    ?>
    </div>

<?php
// $json = file_get_contents("dzeksonas.json");
// $array = json_decode($json, true);
//     foreach ($array as $key => $value) {
//         foreach ($value as $key1 => $value1) {
//             foreach($value1 as $key2 => $value2) {
//                 if(is_array($value2)) {
//                     foreach($value2 as $key3 => $value3) {
//                         if(is_array($value2)){
//                             echo $key3 . '' . $value3 . '<br>';
//                         }
//                     }
//                 }      
//             }
//         }
//     }

?>

<!-- foreach ($array as $key => $value) {
    var_dump($value);
    
    if(! is_array($value)) {
        $value = json_decode($value, true);
    }
    
    var_dump($value);
    -->

<?php
// $json = file_get_contents('dzeksonas.json');
// $array = json_decode($json, true);
// foreach ($array as $key => $value){
//     if(is_array($value)){
//         foreach ($value as $key2 => $value2) {
//             if(is_array($value2)) {
//                 foreach ($value2 as $key3 => $value3) {
//                     if (is_array($value3)) {
//                         foreach ($value3 as $key4 => $value4) {
//                             echo '<br>' . $key4 .':' . ' ' . $value4; 
//                         }                              
//                     } else {
//                         echo $value3;
//                     } 
//                 }
//             } else {
//                 echo $value2; 
//             }   
//         }
//     }
// }
?>

<?php
// $json = file_get_contents('dzeksonas.json');
// $array = json_decode($json, true);
// echo $array['menu']['header'] . '<br>';
// $array = $array['menu']['items'];
// foreach ($array as $key => $value) {
//     if (!empty($value)) {
//         foreach ($value as $key2 => $value2) {
//             echo $key2 . ': ' . $value2 . '<br>';
//         }
//     }
// }

?> 

<?php
$json = file_get_contents('dzeksonas.json');
$array = json_decode($json, true);
$array = $array['menu']['items'];
// var_dump ($array);
foreach ($array as $key => $value) {
    // var_dump($value);
    if (!empty($value)) {
        ?>
        <a href="<?php echo $value['id']; ?>">
            <?php 
                if (!empty($value['label'])) {
                    echo $value['label'];
                } else {
                    echo "empty label";
                }
            ?>
        </a>
        &nbsp;
    <?php 
    }
}


?>

<?php include('form.php');?>
<br><br>
