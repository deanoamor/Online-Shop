<?php include '../template/base.php'; ?>
<?php
session_start();

if ($_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
} else {
    include '../koneksi.php';
    $id = $_SESSION['id_user'];
    $query = mysqli_query($koneksi, "UPDATE user set status = 'on' WHERE id_user = '$id'");
}

?>

<div class="col">
    <div class="container">
        <div class="card mt-4 row">
            <div class="card-body">
                <?php
                include '../koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "select * from barang where id_barang='$id'");
                while ($confirmbarang = mysqli_fetch_array($data)) {
                ?>
                    <form action="confirm_proses.php" method="POST" enctype="multipart/form-data">


                        <input type="hidden" class="form-control" id="exampleInputEmail1" name="iduserbar" aria-describedby="emailHelp" value="<?php echo $_SESSION['id_user']; ?>" required>
                        <input type="hidden" class="form-control" id="exampleInputEmail1" name="idbarangbar" aria-describedby="emailHelp" value="<?php echo $confirmbarang['id_barang'] ?>" required>
                        <input type="hidden" class="form-control" id="exampleInputEmail1" name="connamauserbar" aria-describedby="emailHelp" value="<?php echo $_SESSION['nama']; ?>" required>
                        <div class="form-group">
                            <img class="card-img-top" style="width: 18rem;" src="../admin/barang/foto_barang/<?php echo $confirmbarang['gambar_barang']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama: <?php echo $confirmbarang['nama_barang'] ?></label>
                            <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?php echo $confirmbarang['nama_barang'] ?>" name="connamabar" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInpunama1">Dikirimkan ke: <?php echo $_SESSION['alamat']; ?></label>
                            <input type="hidden" class="form-control" id="exampleInputnama1" value="<?php echo $_SESSION['alamat']; ?>" name="conalamatbar" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputalamat1">Harga: <?php echo $confirmbarang['harga_barang'] ?></label>
                            <input type="hidden" class="form-control" id="exampleInputalamat1" value="<?php echo $confirmbarang['harga_barang'] ?>" name="conhargabar" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputalamat1">Wallet anda: <?php echo $_SESSION['wallet']; ?></label>
                            <input type="hidden" class="form-control" id="exampleInputalamat1" value="<?php echo $_SESSION['wallet']; ?>" name="conwalletbar" aria-describedby="emailHelp" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputalamat1">Jumlah pesanan:</label>
                            <input type="text" class="form-control" id="exampleInputalamat1" name="conjumlahbar" aria-describedby="emailHelp" value="" required>
                        </div>

                        <button type="submit" class="btn btn-success">Beli</button>

                    </form>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>