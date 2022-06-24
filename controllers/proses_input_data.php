<?php

    $nama       = $_POST['nama'];
    $nim        = $_POST['nim'];
    $jurusan    = $_POST['jurusan'];

    require_once '../connect.php';

    $query = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUE('', '$nama', '$nim', '$jurusan')");

    if($query) {
        echo "<script>alert('Data berhasil ditambah'); windows.location.href = '../index.php' </script>";
    } else {
        echo "<script>alert('Data gagal ditambah'); window.location.href = '../index.php' </script>";
    }


?>