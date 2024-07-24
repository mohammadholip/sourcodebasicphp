<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <from method="post" action="bukutamu.php">
        <h1>Absen Buku Tamu</h1>
        <fieldset>
            <legend> Form Buku Tamu</legend>
            <tr>

                <td>

                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>

            </tr>
            <input type="submit" value="Kirim">
        </fieldset>
    </from>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
            text-align: center;
        }

        fieldset {
            width: 500px;
            margin: auto;
            text-align: center;
        }
    </style>
    <?php
    $file = "bukutamu.txt";
    readfile($file);
    ?>

</body>

</html>