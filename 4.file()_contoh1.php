<?php
    // Nama file
    $filename = 'sayuran.txt';

    // Periksa apakah file ada
    if (file_exists($filename)) {
        // Baca file ke dalam array
        $lines = file($filename);
        
        // Tampilkan setiap baris
        foreach ($lines as $line) {
            echo $line . "<br>";
        }
    } else {
        echo "File tidak ditemukan.";
    }
?>