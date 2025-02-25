<?php

$id_barang=$_GET['id_barang'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$id_jenis=$_POST['id_jenis'];

include'../../config/koneksi.php';

$squery=mysqli_query($conn, "UPDATE barang SET nama='$nama', harga='$harga', id_jenis='$id_jenis'
WHERE id_barang='$id_barang'");

if($squery){
    echo "<script>alert('data berhasil diedit')</script>";
    echo "<script>window.location.href='index.php'</script>";

}