<?php
include('config.php'); 
$id_zawodnika = (int) $_GET['id_zawodnika']; 
mysql_query("DELETE FROM `zawodnicy` WHERE `id_zawodnika` = '$id_zawodnika' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php'>Back To Listing</a>