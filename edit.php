<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="judul">
        <h1>edit</h1>
    </div>
    <br>

    <a href="index.php">lihat semua data</a>
    <h3>edit data</h3>

    <?php
    include "koneksi.php";
    $id = $_GET['id']; //ambil dari index
    $query_sql = mysqli_query($host, "SELECT * FROM user WHERE id='$id'") or die(mysqli_error());
    $nomor = 1;
    while ($data = mysqli_fetch_array($query_sql)) {
    ?>
        <form action="update.php" method="POST">
            <tr>
                <td>nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>
            </tr>

        </form>
    <?php
    }

    ?>

</body>

</html>