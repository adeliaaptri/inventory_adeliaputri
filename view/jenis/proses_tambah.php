<?php 
$id_jenis = $_POST['id_jenis'];
$nama = $_POST['nama'];

include '../../config/koneksi.php';
$query = mysqli_query($conn,
 query:"INSERT INTO jenis VALUES('$id_jenis','$nama')");

if($query){
    echo "<script>alert('data berhasil ditambah')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('data gagal ditambah')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}