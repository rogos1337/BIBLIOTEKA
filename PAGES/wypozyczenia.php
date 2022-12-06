<?php
$query = 'SELECT * FROM wypozyczenia INNER JOIN pracownicy ON wypozyczenia.Id_pracownika=pracownicy.Id_pracownika;';
$result = mysqli_query($conn, $query);
?>
<table>
    <tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo '<tr><td>' . $row['Data_wypozyczenia'] . '</td><td>'
                    . $row['Data_zwrotu'] . '</td><td>'
                    . $row['Imie'] . '</td><td>'
                    . $row['Nazwisko'] . '</td><td>'
                    . $row['Nr_czytelnika'] . '</td><td>'
                    . $row['Nr_transakcji'] . '</td><td>'
                    . $row['Sygnatura'] . '</td></tr>';
            }
        }
        ?>
</table>