<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/boorstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body><div class="container">
    <h1>data jenis</h1>
    <a href="view_tambah.php">tambah data</a>
    <br><br>
    <table class="table">
    <tr> 
        <th>No.</th>
        <th>id jenis</th>
        <th>nama</th>
        <th>aksi</th>

    </tr>
    <?php
    include '../../config/koneksi.php';
    $query = mysqli_query($conn, "SELECT * FROM jenis");
    $no=1;
    if(mysqli_num_rows($query)){
        while($result=mysqli_fetch_assoc($query)){
        
        ?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $result['id_jenis']?></td>
            <td><?php echo $result['nama']?></td>
            <td>
                 <a href="view_edit.php?id_jenis=<?php echo $result['id_jenis']?>
                "class="btn btn-warning"><i class="fa-solid fa-pen-to-squere"></i>edit</a>
                <a href="view_hapus.php?id_jenis=<?php echo $result['id_jenis']?>
                "class="btn btn-danger"><iclass="fa-solid fa-delete-left"></i>hapus </a>
               </td>
          </tr>
          <?php
          $no++;
        }
    } else{
        echo "data kosong";
    }
      
    ?>
   </table>
</div>
</body>
</html>