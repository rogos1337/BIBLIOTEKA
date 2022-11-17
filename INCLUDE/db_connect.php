<?php
$servername = "localhost";
$username = "biblioteka";
$password = "biblioteka";
$database = "biblioteka";
$mysqliConnection = mysqli_connect($servername, $username, $password, $database);

if (!$mysqliConnection){
    die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd:".mysqli_connect_error());
}
echo "Połączono z bazą danych.";

?>
