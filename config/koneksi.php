<?php

 $conn = mysqli_connect('localhost','root','','db_inventory_adeliaputri');

 if(!$conn){
      die('koneksi gagal'.mysqli_connect_error());
 }