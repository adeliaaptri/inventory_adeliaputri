<?php 

$id_barang = $_POST['id_barang'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$id_jenis = $_POST['id_jenis'];

include '../../config/koneksi.php';
$query = mysqli_query($conn,
"INSERT INTO barang VALUES('$id_barang','$nama','$harga','$id_jenis')");

if($query){
    echo "
    <script>
    alert('Input data berhasil');
    </script>
    <script>
    window.location.href = 'index.php';
    </script>
    ";
}
