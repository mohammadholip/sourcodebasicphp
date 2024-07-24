<?php
    //Nama file
    $filename = 'buah.txt';
    //Data yang akan dihapus
    $hapus = 'Jeruk';
    $kosong = '';

    //Baca isi file
    $isi = file_get_contents($filename);
    $isi = str_replace($hapus, $kosong, $isi);
    file_put_contents($filename, $isi);

    //Tampilkan isi dari file buah.txt
    // echo file_get_contents($filename);
    echo nl2br($isi);
?>