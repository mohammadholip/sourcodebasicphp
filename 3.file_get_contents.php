<?php
    // Nama file
    $filename = 'sayuran.txt';

    // Periksa apakah file ada
    if (file_exists($filename)) {
        // Baca isi file ke dalam sebuah string
        $contents = file_get_contents($filename);
        echo $contents;
        // echo nl2br($contents);
    } else {
        echo "File tidak ditemukan.";
    }
?>
