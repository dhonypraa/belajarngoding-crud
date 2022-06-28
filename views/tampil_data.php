<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
      </tr>
    </thead>
    <tbody>

      <?php
 
        require_once 'connect.php';

        $query = mysqli_query($connect, 'SELECT nama,nim,jurusan from mahasiswa');

        $no = 0;

        while($hasil = mysqli_fetch_array($query)) {
          $no++;
      ?>

      <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $hasil['nama'] ?></td>
        <td><?php echo $hasil['nim'] ?></td>
        <td><?php echo $hasil['jurusan'] ?></td>
      </tr>

      <?php

        }
      
      ?>
    </tbody>
  </table>
</div>
