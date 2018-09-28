<link rel="stylesheet" href="styles/styles.css" type="text/css">
<div class="linkBackList">
<a href="index.php" class="button">Grizti i registracijos forma</a>
</div>
<style>
   body {background-color: black;}
</style>
<body text="white">
<br><br>
<?php
include 'jsonFunctions.php';

$dir = 'regFormJson';
$files = scanFiles($dir);

allRegisteredList($files, $dir);
?>