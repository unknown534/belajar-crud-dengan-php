<?php $conn=mysqli_connect("localhost","u0_a193","root","db_crud");


function hapus($id){
  global $conn;
  mysqli_query($conn,"DELETE FROM siswa WHERE id = $id");
  return mysqli_affected_rows($conn);
}
function query($query){
  global $conn;
  $result = mysqli_query($conn,$query);
  $rows = [];
  while($row=mysqli_fetch_assoc($result)){
    $rows[]=$row;
  }
  return $rows;
}
function tambah($data){
    global $conn;
    $nama=htmlspecialchars($data['nama']);
    $jurusan=htmlspecialchars($data['jurusan']);
    $alamat=htmlspecialchars($data['alamat']);
    $email=htmlspecialchars($data['email']);
    $query="INSERT INTO siswa (nama,jurusan,alamat,email) VALUES ('$nama','$jurusan','$alamat','$email')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function ubah($data){
  global $conn;
  $id =$data['id'];
  $nama=htmlspecialchars($data['nama']);
  $jurusan=htmlspecialchars($data['jurusan']);
      $alamat=htmlspecialchars($data['alamat']);
      $email=htmlspecialchars($data['email']);
      
      $query="UPDATE siswa SET nama='$nama',jurusan='$jurusan',alamat='$alamat',email='$email'
      WHERE id = $id
      ";
      
      mysqli_query($conn,$query);
          return mysqli_affected_rows($conn);
}

?>