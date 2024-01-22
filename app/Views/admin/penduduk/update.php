<?php
//koneksi database
include 'koneksi.php';

//menangkap data  yang dikirim dari form
$id = $_POST ['id'];
$nik = $_POST ['nik'];
$namapenduduk = $_POST ['namapenduduk'];
$jk = $_POST ['jk'];
$alamat = $_POST ['alamat'];


//update data ke database
mysqli_query ($koneksi, "update  penduduk set nik='$nik',namapenduduk='$namapenduduk', jk='$jk',
alamat='$alamat' where id='$id'");
//mengalihkan halaman kembali ke index.php
header ("location:tabeldatapenduduk.php");
?>

