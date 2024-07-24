<?php
	$filename = fopen("buah.txt", "a+") or die("Tidak bisa membuka file!");

    //Menambahkan data baru 'Salak'
	$teks = "salak";
	fwrite($filename, "\n".$teks);
    echo "$teks berhasil ditambahkan";
    
    //Menutup file
	fclose($filename);
?>