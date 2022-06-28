<?php

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

    //echo 'id : '.$id.'<br>Nama: '.$nama.'<br>NIM: '.$nim.'<br>Jurusan: '.$jurusan;

    require_once "../connect.php";

    $query = mysqli_query($connect, "UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan' WHERE id =$id");

    if($query) {
        echo "<script>alert('Data berhasil di edit'); window.location.href='../index.php'</script>";
    } else {
        echo "<script>alert('Gagal di edit'); window.location.href='../index.php'</script>";
    }

?>