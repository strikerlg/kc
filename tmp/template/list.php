<?php 
include('config.php'); 
echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>Id Zawodnika</b></td>"; 
echo "<td><b>Imie</b></td>"; 
echo "<td><b>Nazwisko</b></td>"; 
echo "<td><b>Klub</b></td>"; 
echo "<td><b>Waga</b></td>"; 
echo "<td><b>Stopien</b></td>"; 
echo "<td><b>Zdjecie</b></td>"; 
echo "<td><b>Licencja</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `zawodnicy`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['id_zawodnika']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['imie']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['nazwisko']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['klub']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['waga']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['stopien']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['zdjecie']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['licencja']) . "</td>";  
echo "<td valign='top'><a href=edit.php?id_zawodnika={$row['id_zawodnika']}>Edit</a></td><td><a href=delete.php?id_zawodnika={$row['id_zawodnika']}>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=new.php>New Row</a>"; 
?>