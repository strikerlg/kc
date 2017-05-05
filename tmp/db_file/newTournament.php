<?php 
// połączenia z bazą danych
require_once 'database_connections.php';
// Wycofywanie znaków specjalnych z przesyłania danych i przechowywania w nowych zmiennych.
$nazwaTurnieju = mysqli_real_escape_string($con, $data->nazwaTurnieju);
$dataRozpoczecia = mysqli_real_escape_string($con, $data->dataRozpoczecia);
$dataZakonczenia = mysqli_real_escape_string($con, $data->dataZakonczenia);
$ustawieniaPrywatnosci = mysqli_real_escape_string($con, $data->ustawieniaPrywatnosci);

// Mysqli wstawić zapytanie
$query = "INSERT into turnieje (nazwaTurnieju,dataRozpoczecia,dataZakonczenia,ustawieniaPrywatnosci) VALUES ('$nazwaTurnieju','$dataRozpoczecia','$dataZakonczenia','$ustawieniaPrywatnosci')";
// Wstawianie danych do bazy danych
mysqli_query($con, $query);
echo true;
?>