<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/boorstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body><div class="container">
    <h1>data barang</h1>
    <a href="view_tambah.php">tambah data</a>
    <br><br>
    <table class="table">
    <tr> 
    <th>No.</th>
        <th>id barang</th>
        <th>nama barang</th>
        <th>harga</th>
        <th>id jenis</th>
        <th>aksi</th>
    </tr>
    <?php
    include '../../config/koneksi.php';
    $query = mysqli_query($conn, "SELECT * FROM barang");
    $no=1;
    if(mysqli_num_rows($query)){
        while($result=mysqli_fetch_assoc($query)){
        
        ?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $result['id_barang']?></td>
            <td><?php echo $result['nama']?></td>
            <td><?php echo $result['harga']?></td>
            <td><?php echo $result['id_jenis']?></td>
            <td>
                 <a href="">Edit |</a>
                 <a href="">hapus |</a>
          </td>
          <?php
        }
    } 
      
    ?>
   </table>
</body>
</html>