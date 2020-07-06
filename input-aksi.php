<?php

include 'koneksi.php';
$nama = $_POST['nama']; // sama nama diiput
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];

mysqli_query($host, "INSERT INTO user VALUES('', '$nama', '$alamat', '$pekerjaan')");

header("location:index.php?pesan=input"); // berfungsi untuk mengalihkan keke index jika input selesai
