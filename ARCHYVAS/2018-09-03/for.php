<html>
<body>





<?php
// var_dump ($_POST);
$nr1 = $_POST["nr1"];
$nr2 = $_POST["nr2"];
$veiksmas = $_POST["veiksmas"];

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
    $i = 0;
    for ($i = 0; $i <= 100; $i++) {    
        // echo " $i <br>";
        echo '<img src=download.jpg>';
    $i++;
} 
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