<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-pesanan.php" method="POST">
                    <div class="form-group">
                        <label for="user_id">User Id</label>
                        <input type="number" name="user_id" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="makanan">MAKANAN</label>
                        <input type="text" name="makanan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="minuman">MINUMAN</label>
                        <input type="text" name="minuman" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="harga">HARGA</label>
                        <input type="number" name="harga" class="form-control">
                    </div>


                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php";?>