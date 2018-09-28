<!DOCTYPE html>
<html>
<body>
    <?php
        $k = "Petras";
        $o = "Onyte";
             if ($k == "Petras") {
            echo "Sveikas $k";
            } else  {
            echo "Sveika $o";
         }
    ?>
<br/>
    <?php
        $k = 2+5;
            if ($k == "4") {
            echo "4";
            } else {
            echo "NE 4. K = $k";
        }
?>        
<br/>
    <?php
        date_default_timezone_set("Europe/Vilnius");
        echo "The time is " . date("<b>h:i:sa</b>");
?>
</html>
</body>