<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$pesan  = $_POST['pesan'];

// query SQL untuk insert data
$query="INSERT INTO tb_contact SET nama='$nama',email='$email',pesan='$pesan'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.html
header("location:index.html");
?>