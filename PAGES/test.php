<h1>TEST POŁĄCZENIA Z SERWEREM <i><?=$servername ?></i> I BAZĄ <i><?=$database ?></i></h1>

<p>
<?php
    echo 'Host info: ' . mysqli_get_host_info($conn) . '<br>';
    echo 'MySQLi stat: ' . mysqli_stat($conn);
    ?>
</p>