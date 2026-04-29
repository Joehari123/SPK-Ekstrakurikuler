<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
if ($koneksi) {
    $id = mysqli_real_escape_string($koneksi, $id);
    $nama = mysqli_real_escape_string($koneksi, $nama);
    $username = mysqli_real_escape_string($koneksi, $username);
    $password = mysqli_real_escape_string($koneksi, $password);

    $query = "UPDATE users SET nama='$nama', username='$username', password='$password' WHERE id='$id'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: ../beranda.php?pesan=Berhasil Update");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($koneksi);
    }
} else {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
}

mysqli_close($koneksi);
?>
