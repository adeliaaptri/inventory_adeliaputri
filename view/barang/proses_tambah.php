<?php

$id_barang=$_POST['id_barang'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$id_jenis=$_POST['id_jenis'];

include'../../config/koneksi.php';
 $query=mysqli_query($conn,"insert into barang values('$id_barang','$nama','$harga','$id_jenis')");

if($query){
    echo "<script>alert('data berhasil ditambah')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('data gagal ditambah')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}