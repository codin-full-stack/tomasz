<?php include 'header.php';
include 'sessionCheck.php';
?>



<div class="linkBackList">
<a href="index.php" class="button">Grizti i registracijos forma</a>
</div>


<br><br>
<?php

$dir = 'regFormJson';
$files = scanFiles($dir);

allRegisteredList($files, $dir);
?>