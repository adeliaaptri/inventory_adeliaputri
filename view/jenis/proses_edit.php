<?php

$id_jenis=$_GET['id_jenis'];
$nama=$_POST['nama'];

include'../../config/koneksi.php';
$squery=mysqli_query($conn, "UPDATE jenis SET nama='$nama'
WHERE id_jenis='$id_jenis'");

if($squery){
    echo "<script>alert('data berhasil diedit')</script>";
    echo "<script>window.location.href='index.php'</script>";

}