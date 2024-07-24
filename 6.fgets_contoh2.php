<?php
    // Membuka file untuk dibaca
    $file = fopen("sayuran.txt", "r");

    // Mengecek apakah file berhasil dibuka
    if ($file) {
        // Membaca file baris demi baris
        while (($line = fgets($file)) !== false) {
            // Menampilkan setiap baris yang dibaca
            echo $line . "<br>";
        }

        // Menutup file setelah selesai membaca
        fclose($file);
    } else {
        // Menampilkan pesan error jika file tidak dapat dibuka
        echo "Tidak dapat membuka file!";
    }
?>