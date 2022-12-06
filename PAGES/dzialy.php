<?php
$query = 'SELECT ksiazki.Tytul,dzialy.Nazwa FROM ksiazki INNER JOIN dzialy ON dzialy.Id_dzial=ksiazki.Id_dzial;
';
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0){

echo '<table>';
    echo '<tr><th>Tytul</th><th>Nazwa Działu</th></tr>';
    while ($row = mysqli_fetch_assoc($result)){
    echo '<tr><td>' . $row['Tytul'] . '</td><td>'
        . $row['Nazwa'] . '</td></tr>';
    }
    echo '</table>';
}
else
{
echo 'brak danych';
}