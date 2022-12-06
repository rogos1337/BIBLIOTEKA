<?php
$query = 'SELECT pracownicy.Id_pracownika,pracownicy.Imie,pracownicy.Nazwisko,stanowiska.Nazwa,pracownicy.Miasto,pracownicy.Data_zatrudnienia,pracownicy.wynagrodzenie FROM pracownicy INNER JOIN stanowiska ON pracownicy.Id_stanowisko=stanowiska.Id_stanowisko;';
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0){
    echo '<table>';
    echo '<tr><th>ID</th><th>Imię i Nazwisko</th><th>Stanowisko</th><th>Miasto</th><th>Data Zatrudnienia</th><th>Wynagrodzenie</th></tr>';
    while ($row = mysqli_fetch_assoc($result)){
        echo '<tr>
                <td>' . $row['Id_pracownika'] . '</td>
                <td>' . $row['Imie'] . ' ' . $row['Nazwisko'] . '</td>
                <td>' . $row['Nazwa'] . '</td>
                <td>' . $row['Miasto'] . '</td>
                <td>' . $row['Data_zatrudnienia'] . '</td>
                <td>' . $row['wynagrodzenie'] . '</td>
            </tr>';
    }
    echo '</table>';
}
?>
