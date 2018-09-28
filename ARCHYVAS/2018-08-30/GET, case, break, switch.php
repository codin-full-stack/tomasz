
<?php 

$first = $_GET["nr1"];
$second = $_GET["nr2"];
$action = $_GET["atsakymas"];

switch($action) {
    case "+";
    $result = $_GET["nr1"]+$_GET["nr2"];
    break;
    case "-";
    $result = $_GET["nr1"]-$_GET["nr2"];
    break;
    case "*";
    $result = $_GET["nr1"]*$_GET["nr2"];
    break;
    case "/";
    $result = $_GET["nr1"]/$_GET["nr2"];
    break;
}
echo (round ($result,3)); 

?>

