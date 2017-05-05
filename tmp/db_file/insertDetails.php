<?php 
// połączenia z bazą danych
require_once 'database_connections.php';
// Pobieranie i dekodowanie wstawionych danych
$data = json_decode(file_get_contents("php://input")); 
// Wycofywanie znaków specjalnych z przesyłania danych i przechowywania w nowych zmiennych.
$name = mysqli_real_escape_string($con, $data->name);
$email = mysqli_real_escape_string($con, $data->email);
$gender = mysqli_real_escape_string($con, $data->gender);
$address = mysqli_real_escape_string($con, $data->address);

// Mysqli wstawić zapytanie
$query = "INSERT into emp_details (emp_name,emp_email,emp_gender,emp_address) VALUES ('$name','$email','$gender','$address')";
// Wstawianie danych do bazy danych
mysqli_query($con, $query);
echo true;
?>