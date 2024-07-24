<?php
    // Nama file
    $filename = 'sayuran.txt';

    // Periksa apakah file ada
    if (file_exists($filename)) {
        // Baca file dan tulis isinya ke output buffer
        readfile($filename);
    } else {
        echo "File tidak ditemukan.";
    }
?>