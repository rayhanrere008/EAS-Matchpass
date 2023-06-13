<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$jadwal_pertandingan    = $_POST['jadwal_pertandingan'];
$tanggal                = $_POST['tanggal'];
$nama                   = $_POST['nama'];
$nik                    = $_POST['nik'];
$umur                   = $_POST['umur'];
$email                  = $_POST['email'];
$nomor_hp               = $_POST['nomor_hp'];
$harga                  = $_POST['harga'];
$jumlah                 = $_POST['jumlah'];
$pembayaran             = $_POST['pembayaran'];
$bukti_transfer         = $_POST['bukti_transfer'];
$total_harga            = $harga * $jumlah;

// query SQL untuk insert data
$query="INSERT INTO tb_pemesanan SET jadwal_pertandingan='$jadwal_pertandingan',tanggal='$tanggal',nama='$nama',nik='$nik',umur='$umur',email='$email',nomor_hp='$nomor_hp',harga='$total_harga',jumlah='$jumlah',pembayaran='$pembayaran',bukti_transfer='$bukti_transfer'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman selesaipesan.html
header("location:selesaipesan.html");
?>