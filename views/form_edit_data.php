<?php

    $id = $_GET['id'];

    // test edit id echo "id : ".$id;

    require_once "connect.php";

    $query = mysqli_query($connect, "SELECT * FROM mahasiswa where id=$id");

    while ($hasil = mysqli_fetch_array($query)) {


?>

<div class="container">
  <h2>Edit Data</h2>
  <form action="controllers/proses_edit_data.php" method="post">
    <input type="hidden" value="<?php echo $hasil['id'] ?>" name ="id">
    <div class="form-group">
      <label>Nama:</label>
      <input type="text" class="form-control" value="<?php echo $hasil['nama'] ?>" name="nama">
    </div>
    <div class="form-group">
      <label>NIM:</label>
      <input type="text" class="form-control" value="<?php echo $hasil['nim'] ?>" name="nim">
    </div>
    <div class="form-group">
      <label>Jurusan:</label>
      <input type="text" class="form-control" value="<?php echo $hasil['jurusan'] ?>" name="jurusan">
    </div>
    <button type="submit" class="btn btn-primary">Edit Data</button>
  </form>
</div>

<?php

    }

?>