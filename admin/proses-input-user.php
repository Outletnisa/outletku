<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$username=$_POST['username'];
$password=md5($_POST['username']);
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$token=md5($username.$password);
$status=1;

include "../koneksi.php";

$simpan=$koneksi->query("insert into user(username,password,email,alamat,token,status,last_login) 
                        values ('$username', '$password', '$email', '$alamat', '$token','$status',now())");

if($simpan==true){

    header("location:tampil-user.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>