<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_kontak = $_POST['id_kontak'];
$nama = $_POST['Nama'];
$jkel = $_POST['jkel'];
$email = $_POST['Email'];
$alamat = $_POST['Alamat'];
$kota = $_POST['Kota'];
$pesan = $_POST['Pesan'];
// query SQL untuk insert data
$query = "insert into kontak set id_kontak='$id_kontak',nama='$nama',jkel='$jkel',email='$email',alamat='$alamat',kota='$kota',pesan='$pesan'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
