<?php
require('conn.php');
$siswa=query("SELECT * FROM siswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css"/>
</head>
<body>
  <a href="tambah.php">Tambah data</a><br><br>
  <table border="1" cellspacing="0" cellpadding="10">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Jurusan</th>
      <th>Alamat</th>
      <th>Email</th>
      <th>Aksi</th>
    </tr>
    <?php $i=1;?>
    <?php foreach($siswa as $row) : ?>
    <tr>
      <td><?=$i?></td>
      <td><?=$row['nama'];?></td>
      <td><?=$row['jurusan'];?></td>
      <td><?=$row['alamat'];?></td>
      <td><?=$row['email'];?></td>
      <td><a class="hapus"href="hapus.php?id=<?=$row['id'];?>" onclick="return confirm('yakin?');">hapus</a><br><a href="ubah.php?id=<?=$row['id'];?>">ubah</a></td>
    </tr>
    <?php $i++;?>
    <?php endforeach; ?>
  </table>
</body>
</html>