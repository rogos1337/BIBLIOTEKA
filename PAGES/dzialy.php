<head>
    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th,td{
            border: 1px solid black;
            padding:3px
        }
    </style>
</head>
<h1>Tabela <i>dzialy</i></h1>
<?php
$query = 'SELECT * FROM dzialy';
$result = mysqli_query($conn, $query);
?>
<p>Zawiera <?=mysqli_num_rows($result)?> wierszy</p>
<table>
    <tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo '<tr><td>' . $row['Nazwa'] . '</td><td>'
                    . $row['Id_dzial'] . '</td></tr>';
            }
        }
        ?>
</table>
