<?php 
// połączenia z bazą danych
require_once 'database_connections.php';
// Pobieranie zaktualizowanych danych i zapisywanie nowych zmiennych
$data = json_decode(file_get_contents("php://input")); 
// Wycofywanie znaków specjalnych z zaktualizowanych danych
$id = mysqli_real_escape_string($con, $data->id);
$name = mysqli_real_escape_string($con, $data->name);
$email = mysqli_real_escape_string($con, $data->email);
$gender = mysqli_real_escape_string($con, $data->gender);
$address = mysqli_real_escape_string($con, $data->address);
// Mysqli zapytanie, aby wstawić zaktualizowane dane
$query = "UPDATE emp_details SET emp_name='$name',emp_email='$email',emp_gender='$gender',emp_address='$address' WHERE emp_id=$id";
mysqli_query($con, $query);
echo true;
?>