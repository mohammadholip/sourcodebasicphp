<?php
    // Nama file
    $filename = 'sayuran.txt';

    // Buka file untuk dibaca
    $file = fopen($filename, 'r');

    if ($file) {
        // Baca isi file
        $contents = fread($file, filesize($filename));
        
        // Tampilkan isi file
        echo $contents;

        // Tutup file
        fclose($file);
    } else {
        echo "File tidak dapat dibuka.";
    }
?>