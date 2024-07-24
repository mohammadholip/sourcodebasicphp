<?php
    // Nama file
    $filename = 'sayuran.txt';

    // Periksa apakah file ada
    if (file_exists($filename)) {
        
    //Baca file sayuran.txt
    $isiFileSayuran = file($filename);

    //Tampilkan dalam bentuk array
    echo '<pre>';
        print_r($isiFileSayuran);
    echo '<pre>';
    }
?>