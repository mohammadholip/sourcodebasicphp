<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hapus sebuah data di file menggunakan PHP</title>
</head>
<body>	
	<form method="post" action="9.form_hapus_baris.php">
	  <p>Data yang dihapus : <input type="text" name="dataHapus">
      <!-- dataHapus : data yang akan dihapus -->
	  <input type="submit" value="Hapus"></p>
	</form>

	<?php
		$namaFile = 'buah.txt';

		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
		    // collect value of input field
		    $data = $_POST['dataHapus'];
		    if (empty($data)) {
		        echo "Masukkan data yang akan dihapus !!<br>";
		    } else {
		        echo '<p>Data yang telah dihapus <b>'. $data . '</b></p>';

		        $isi = file_get_contents($namaFile);
				$isi = str_replace($data, '', $isi);
				file_put_contents($namaFile, $isi);
		    }
		}
		$tampil = fopen($namaFile, "r") or die("Tidak bisa membuka file!");
		while (!feof($tampil)) {
			echo fgets($tampil). '<br>';
		}
			fclose($tampil);
	?>
</body>
</html>