<?php
$query = 'SELECT * FROM stanowiska';
$result = mysqli_query($conn, $query);
?>
<table>
    <tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo '<tr><td>' . $row['Id_stanowisko'] . '</td><td>'
                    . $row['Nazwa'] . '</td><td>';
            }
        }
        ?>
</table>
