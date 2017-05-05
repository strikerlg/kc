<?php
// połączenia z bazą danych
require_once 'database_connections.php'; 
// Mysqli zapytanie, aby pobrać wszystkie dane z bazy danych
$query = "SELECT * from zawodnicy ORDER BY zaw_id ASC";
$result = mysqli_query($con, $query);
$arr = array();
if(mysqli_num_rows($result) != 0) {
	while($row = mysqli_fetch_assoc($result)) {
			$arr[] = $row;
	}
}
// Zwraca tablicę json zawierającą dane pobrane z bazy danych
echo $json_info = json_encode($arr);
?>