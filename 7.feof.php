<?php
    // Membuka file untuk dibaca
    $file = fopen("sayuran.txt", "r");

    // Mengecek apakah file berhasil dibuka
    if ($file) {
        // Looping sampai akhir file tercapai
        while (!feof($file)) {
            // Membaca satu baris dari file
            $line = fgets($file);
            
            // Menampilkan baris yang dibaca
            if ($line !== false) {
                echo $line . "<br>";
            }
        }

        // Menutup file setelah selesai membaca
        fclose($file);
    } else {
        // Menampilkan pesan error jika file tidak dapat dibuka
        echo "Tidak dapat membuka file!";
    }
?>