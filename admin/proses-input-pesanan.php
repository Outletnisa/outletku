<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$user_id=$_POST['user_id'];
$nama=$_POST['nama'];
$makanan=$_POST['makanan'];
$minuman=$_POST['minuman'];
$harga=$_POST['harga'];


include "../koneksi.php";

$simpan=$koneksi->query("insert into pesanan(user_id,nama,makanan,minuman,harga) 
                        values ('$user_id', '$nama', '$makanan', '$minuman', '$harga')");

if($simpan==true){

    header("location:tampil-pesanan.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>