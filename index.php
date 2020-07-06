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
        <h1>membuad crud php malasc coding</h1>
    </div>
    <br>
    <?php
    // pesan digunakaan oleh aksi
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
        if ($pesan == "input") {
            echo "Data berhasil diiput";
        } else if ($pesan == "update") {
            echo "Data berhasil diupdate";
        } else if ($pesan == "hapus") {
            echo "Data berhasil dihapus";
        }
    }
    ?>

    <br>
    <a class="tombol" href="input.php">+ tambah data baru</a>

    <h3>Data user</h3>
    <table border="1" class="table">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Opsi</th>
        </tr>
        <?php
        include "koneksi.php";
        $query_sql = mysqli_query($host, "SELECT * FROM user") or die(mysqli_error());
        $nomor = 1;
        while ($data = mysqli_fetch_array($query_sql)) {
        ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['alamat'] ?></td>
                <td><?php echo $data['pekerjaan'] ?></td>
                <td>
                    <a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    <a class="hapus" href="hapus.php?id=<?php echo $data['id'] ?>">hapus</a>
                </td>

            </tr>

        <?php } ?>
    </table>
</body>

</html>