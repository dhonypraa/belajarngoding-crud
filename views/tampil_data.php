<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>

      <?php
 
        require_once 'connect.php';

        $query = mysqli_query($connect, 'SELECT * from mahasiswa');

        $no = 0;

        while($hasil = mysqli_fetch_array($query)) {
          $no++;
      ?>

      <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $hasil['nama'] ?></td>
        <td><?php echo $hasil['nim'] ?></td>
        <td><?php echo $hasil['jurusan']?></td>
        <td><a href="index.php?page=edit&id=<?php echo $hasil['id']?>"><i class="fa fa-edit" style="font-size:20px;color:blues"></i>
        <td><a href=""><i class="fa fa-trash-o" style="font-size:20px;color:red"></i>
      </tr>

      <?php

        }
      
      ?>
    </tbody>
  </table>
</div>
