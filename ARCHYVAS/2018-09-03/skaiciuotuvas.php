<html>
<body>
<?php
var_dump ($_POST);
$nr1 = $_POST["nr1"];
$nr2 = $_POST["nr2"];


      function countNumbers($field){
         if (empty($field)){
             echo "Klaida! Užpildyti ne visi laukeliai.";
         } else {
             echo " $field ";
         }
      }
      
      checkFieldscou($vrd);
      checkFields($pvd);


?>

</html>
</body>
