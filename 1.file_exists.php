<?php
    // Nama file
    $filename = 'sayuran.txt';

    // Periksa apakah file ada
    if (file_exists($filename)) {
        echo "File $filename ditemukan.";
    } else {
        echo "File tidak ditemukan.";
    }
?>