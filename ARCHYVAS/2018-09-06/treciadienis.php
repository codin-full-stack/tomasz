<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
<title>Registracija</title>
<meta name="viewport"
      content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css" type="text/css">
</head>
 <!-- <div id="Headeris">
     <div id="header">
         <img src="123.jpg" width="1000" height="200" alt"logo" / >
     </div>
 </div> -->
<body background="123.jpg">
    <div>
    <?php //include('form.php');?>
    </div>
 </body>
</html>
<div class="container">
    <?php
         $array  [
            'vard'=>'Vardas',
            'pavd'=>'Pavarde',
            'email'=>'E-mail',
            'amz'=>'Amzius',
            'miest'=>'Miestas',
            'lyt'=>'Lytis'
    ];
    // var_dump ($_POST);
     if (!empty($_POST)) {
         foreach ($_POST as $key=>$item) {             
             echo "$array[$key]: " . "$item <br>";
        }            
        // } if ($array['miest']==0) {
        //     echo "Ivesk miesta"; 
        }
         else {
        include 'form.php'; 
        }  
    ?>
    </div>

<?php
// var_dump ($citiesArray);
// $nr1 = $_POST["nr1"];
// $nr2 = $_POST["nr2"];
// $veiksmas = $_POST["veiksmas"];

// SU EVAL
// function countNumbers($a,$b,$c){
//     eval ('$rez = '.$a.$b.$c.';');

//     return round ($rez,2);
// }

// SU SWITCH
// function countNumbers($a, $c, $b) {
//     switch($c) {
//         case "+":
//             return $a+$b;
//         case "-":
//              return $a-$b;
//         case "*":
//              return $a*$b;
//         case "/":
//               return $a/$b;
//     }
// }


?>
<?php
//     $i = 0;
//     for ($i = 0; $i <= 100; $i++) {
//         // echo " $i <br>";
//         echo '<img src=download.jpg>';
//     $i++;
// }
?>

<?php
//     $array = [
//         'a'=>'antraste',
//         'b'=>'antraste2',
//         'c'=>'antraste3',
//         'd'=>'antraste3',
//     ];
//     foreach ($array as $key=>$item) {
//         // var_dump ($item);
//         // var_dump ($key);
//         echo '<img src=download.jpg>';
//     }
// ?>
<?php
// var_dump ($_POST);

//     $miestas = [
//     1=>'Alytus',
//
// ];

    // foreach ($_POST as $key => $item) {
    //     echo $array[$key] . ': ';
//     if ($key=="miest") {

//         echo $miestas[$item] . '<br>';
//     } else {
//         echo $item . '<br>';
//         }
// }
    // if ($_POST['lyt']=='Moteris') {
    //     echo "Sveika " . $_POST['vard'] . '<br>' . '<img src=moteriz.gif>'  ;
    //     // echo '<img src=moteriz.gif>';
    // } else {
    //     echo "Sveikas " . $_POST['vard'] . '<br>' . '<img src=vyraz.gif>' ;
    //     // echo '<img src=vyraz.gif>';
    // }
// }

?>
