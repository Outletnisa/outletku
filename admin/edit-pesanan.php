<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-pesanan.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from pesanan where user_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="user_id">USER_ID</label>
                        <input type="hidden" name="user_id" value="<?php echo $row['user_id']?>" class="form-control">
                        <input type="number" name="user_id" value="<?php echo $row['user_id']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="makanan">MAKANAN</label>
                        <input type="text" name="makanan" value="<?php echo $row['makanan']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="minuman">MINUMAN</label>
                        <input type="text" name="minuman" value="<?php echo $row['minuman']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="harga">HARGA</label>
                        <input type="number" name="harga" value="<?php echo $row['harga']?>" class="form-control">
                    </div>


                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>