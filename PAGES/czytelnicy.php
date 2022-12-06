<?php
$query = 'SELECT * FROM czytelnicy';
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0){
    echo '<table>';
    echo '<tr><th>Nr Czytelnika</th><th>Imię i Nazwisko</th><th>Data urodzenia</th><th>Adres</th><th>Data Zapisania</th><th>Data Skreślenia</th><th>Numer Legitymacji</th><th>Funkcja</th><th>Płeć</th></tr>';
    while ($row = mysqli_fetch_assoc($result)){
        echo '<tr><td>' . $row['Nr_czytelnika'] . '</td><td>' . $row['Imie'] . ' ' . $row['Nazwisko'] . '</td><td>' . $row['Data_ur'] . '</td><td>' . $row['Ulica'] . ' ' . $row['Kod'] . ' ' . $row['Miasto'] . '</td><td>' . $row['Data_zapisania'] . '</td><td>' . $row['Data_skreslenia'] . '</td><td>' . $row['Nr_legitymacji'] . '</td><td>' . $row['Funkcja'] . '</td><td>' . $row['Plec'] . '</td></tr>';
    }
    echo '</table>';
}
?>

