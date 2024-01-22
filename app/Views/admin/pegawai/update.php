<?php
//koneksi database
include 'koneksi.php';

//menangkap data  yang dikirim dari form
$id = $_POST ['id'];
$namapegawai = $_POST ['namapegawai'];
$nik = $_POST ['nik'];
$jabatan = $_POST ['jabatan'];
$alamat = $_POST ['alamat'];
$nohp = $_POST ['nohp'];
$email = $_POST ['email'];
$tglkerja = $_POST ['tglkerja'];
$pendidikan = $_POST ['pendidikan'];
$thnlls = $_POST ['thnlls'];
$rekbank = $_POST ['rekbank'];
$npwp = $_POST ['npwp'];

//update data ke database
mysqli_query ($koneksi, "update  pegawai set namapegawai='$namapegawai',nik='$nik', jabatan='$jabatan',
jk='$jk', alamat='$alamat',nohp='$nohp', email='$email', tglkerja='$tglkerja', pendidikan='$pendidikan',thnlls='$thnlls',rekbank='$rekbank',npwp='$npwp' where id='$id'");
//mengalihkan halaman kembali ke index.php
header ("location:tabeldatapegawai.php");
?>

