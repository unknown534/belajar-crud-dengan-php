<?php
require('conn.php');
$id =$_GET['id'];
$siswa=query("SELECT * FROM siswa WHERE id = $id")[0];
if (isset($_POST['kirim'])) {

  if (ubah($_POST)>0) {
    echo("
    <script>
    alert('berhasil');
    document.location.href='index.php';
    </script>
    ");
  }else {
    echo("    <script>
        alert('gagal');
        document.location.href='index.php';
        </script>");
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>
  <form action="" method="post">
    <input type="hidden" name="id" value="<?=$siswa['id'];?>">
    <input type="text" name="nama" required placeholder="nama" value="<?=$siswa['nama'];?>" />
    <input type="text" name="jurusan" required placeholder="jurusan" value="<?=$siswa['jurusan'];?>">
    <input type="text" name="alamat" required placeholder="alamat" value="<?=$siswa['alamat'];?>">
    <input type="text" name="email" required placeholder="email" value="<?=$siswa['email'];?>" />
    <button type="submit" name="kirim">Ubah data</button>
  </form>
</body>
</html>