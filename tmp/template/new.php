<?php 
include('config.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `zawodnicy` ( `imie` ,  `nazwisko` ,  `klub` ,  `waga` ,  `stopien` ,  `zdjecie` ,  `licencja`  ) VALUES(  '{$_POST['imie']}' ,  '{$_POST['nazwisko']}' ,  '{$_POST['klub']}' ,  '{$_POST['waga']}' ,  '{$_POST['stopien']}' ,  '{$_POST['zdjecie']}' ,  '{$_POST['licencja']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>Imie:</b><br /><input type='text' name='imie'/> 
<p><b>Nazwisko:</b><br /><input type='text' name='nazwisko'/> 
<p><b>Klub:</b><br /><input type='text' name='klub'/> 
<p><b>Waga:</b><br /><input type='text' name='waga'/> 
<p><b>Stopien:</b><br /><input type='text' name='stopien'/> 
<p><b>Zdjecie:</b><br /><input type='text' name='zdjecie'/> 
<p><b>Licencja:</b><br /><input type='text' name='licencja'/> 
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
