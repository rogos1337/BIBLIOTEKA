<?php
$query = 'SELECT * FROM ksiazki';
$result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0){
            echo '<table>';
            echo '<tr><th>Tytuł</th><th>Imię i Nazwisko</th><th>Wydawnictwo</th><th>Miejsce Wydania</th><th>Rok Wydania</th><th>Ilość stron</th><th>Cena</th><th>ID</th></tr>';
            while ($row = mysqli_fetch_assoc($result)){
                echo '<tr><td>' . $row['Tytul'] . '</td><td>' . $row['Imie'] . ' ' . $row['Nazwisko'] . '</td><td>' . $row['Wydawnictwo'] . '</td><td>' . $row['Miejsce_wyd'] . '</td><td>' . $row['Rok_wyd'] . '</td><td>' . $row['Objetosc_ks'] . '</td><td>' . $row['Cena'] . '</td><td>' . $row['Id_dzial'] . '</td></tr>';
            }
            echo '</table>';
        }
?>

