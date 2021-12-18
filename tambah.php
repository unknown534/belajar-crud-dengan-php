<?php
require('conn.php');
if (isset($_POST['kirim'])) {

  if (tambah($_POST)>0) {
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
<body class="body-class">
  <div class="kontener">
  <form action="" method="post">
    <input type="text" name="nama" required placeholder="nama" />
    <input type="text" name="jurusan" required placeholder="jurusan">
    <input type="text" name="alamat" required placeholder="alamat">
    <input type="email" name="email" required placeholder="email" />
    <button type="submit" name="kirim">Tambah data</button>
  </form>
  </div>
</body>
</html>