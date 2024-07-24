<?php
    // Nama file
    $filename = 'sayuran.txt';

    // Periksa apakah file ada
    if (file_exists($filename)) {

        // Baca file dan tulis isinya ke output buffer
        $file = fopen($filename, 'r');

        //Tampilkan isi dari sayuran.txt per baris
        echo fgets($file) .  '<br>'; //baris 1
        echo fgets($file) .  '<br>'; //baris 2
        echo fgets($file) .  '<br>'; //baris 3
        echo fgets($file) .  '<br>'; //baris 4
        echo fgets($file) .  '<br>'; //baris 5

        //Tutup file
        fclose($file);
    } else {
        echo "File tidak ditemukan.";
    }
?>