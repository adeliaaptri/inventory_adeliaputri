<?php

$id_barang=$_GET['id_barang'];
$nama=$_POST['nama'];

include'../../config/koneksi.php';

$squery=mysqli_query($conn,
 query:"delete from barang where id_barang='$id_barang'");

if($query){
    echo "<script>alert('data berhasil dihapus')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('data gagal hapus')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}