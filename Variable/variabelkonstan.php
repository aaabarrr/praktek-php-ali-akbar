<?php

// definisikan konstanta
    define('PHI',3.14);
    define('DBNAME','inventori');
    define('DBSERVER','localhost');
    define('DBSUER','Ali');
    define('DBPSW',123);

// definisikan variable
    $jari = 8;
    $luas = PHI * $jari * $jari;
    $kll = 2 * PHI * $jari;

    echo 'Luas Lingkaran dengan Jari '.$jari.' : '.$luas;
    echo '<br/>Kelilingnya : '.$kll;


?>
<hr/>
<?php
    echo 'Nama databasenya : '.DBNAME;
    echo '<br/>Lokasi databasenya ada di '.DBSERVER;
    echo '<br/>User :'.DBSUER;
    echo '<br/>Password :'.DBPSW;

?>