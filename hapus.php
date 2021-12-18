<?php
include('conn.php');
$id=$_GET['id'];
if (hapus($id)>0) {
  echo("
  <script>
  alert('sukses');
  document.location.href='index.php';
  </script>
  ");
}else {
  echo('gagal');
  echo(mysqli_error($conn));
}
?>