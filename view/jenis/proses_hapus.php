<?php

$id_jenis=$_GET['id_jenis'];
$nama=$_POST['nama'];

include'../../config/koneksi.php';

$squery=mysqli_query($conn,
 query:"delete from jenis where id_jenis='$id_jenis'");

if($query){
    echo "<script>alert('data berhasil dihapus')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('data gagal hapus')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}