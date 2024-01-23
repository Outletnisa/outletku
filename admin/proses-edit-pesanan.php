<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['user_id'];
$nama=$_POST['nama'];
$makanan=$_POST['makanan'];
$minuman=$_POST['minuman'];
$harga=$_POST['harga'];

$ubah=$koneksi->query("update pesanan set user_id='$id', nama='$nama', makanan='$makanan', minuman='$minuman', harga='$harga' where user_id='$id'");

if($ubah==true){

    header("location:tampil-pesanan.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>