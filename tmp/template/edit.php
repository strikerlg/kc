<?php 
include('config.php'); 
if (isset($_GET['id_zawodnika']) ) { 
$id_zawodnika = (int) $_GET['id_zawodnika']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `zawodnicy` SET  `imie` =  '{$_POST['imie']}' ,  `nazwisko` =  '{$_POST['nazwisko']}' ,  `klub` =  '{$_POST['klub']}' ,  `waga` =  '{$_POST['waga']}' ,  `stopien` =  '{$_POST['stopien']}' ,  `zdjecie` =  '{$_POST['zdjecie']}' ,  `licencja` =  '{$_POST['licencja']}'   WHERE `id_zawodnika` = '$id_zawodnika' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `zawodnicy` WHERE `id_zawodnika` = '$id_zawodnika' ")); 
?>

<form action='' method='POST'> 
<p><b>Imie:</b><br /><input type='text' name='imie' value='<?= stripslashes($row['imie']) ?>' /> 
<p><b>Nazwisko:</b><br /><input type='text' name='nazwisko' value='<?= stripslashes($row['nazwisko']) ?>' /> 
<p><b>Klub:</b><br /><input type='text' name='klub' value='<?= stripslashes($row['klub']) ?>' /> 
<p><b>Waga:</b><br /><input type='text' name='waga' value='<?= stripslashes($row['waga']) ?>' /> 
<p><b>Stopien:</b><br /><input type='text' name='stopien' value='<?= stripslashes($row['stopien']) ?>' /> 
<p><b>Zdjecie:</b><br /><input type='text' name='zdjecie' value='<?= stripslashes($row['zdjecie']) ?>' /> 
<p><b>Licencja:</b><br /><input type='text' name='licencja' value='<?= stripslashes($row['licencja']) ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<?php } ?> 
