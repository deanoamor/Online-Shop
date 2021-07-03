<?php include 'template/base.php'; ?>
<?php include 'template/header.php'; ?>


<div class="container">
    <?php
    include 'koneksi.php';
    $id = $_SESSION['id_user'];
    $no = 1;
    $dataconfirm = mysqli_query($koneksi, "select * from confirm where id_user='$id'");
    while ($listconfirm = mysqli_fetch_array($dataconfirm)) {
    ?>
        <div class="card">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body">
                <h5 class="card-title"><?php echo $listconfirm['nama_barang_confirm']; ?></h5>
                <h6 class="card-title">Rp <?php echo $listconfirm['harga_confirm']; ?></h6>
                <p class="card-text"><?php echo $listconfirm['alamat_confirm']; ?></p>
                <p class="card-text">jumlah: <?php echo $listconfirm['jumlah_pesanan']; ?></p>
                <?php
                if ($listconfirm['status_confirm'] == 'Diproses') {
                ?>
                    <a href="" class="btn btn-primary"><?php echo $listconfirm['status_confirm']; ?></a>
                <?php
                } else {
                ?>
                    <a href="" class="btn btn-warning"><?php echo $listconfirm['status_confirm']; ?></a>
                <?php
                }
                ?>
                <?php
                if ($listconfirm['status_confirm'] == 'Dikirim') {
                ?>
                    <a href="cart_delete_proses.php?id=<?php echo $listconfirm['id_confirm']; ?>" onclick="return confirm('Yakin pesanan selesai?')" class="btn btn-success">Pesanan selesai</a>
                <?php
                }
                ?>
            </div>
        </div>
    <?php
    }
    ?>

</div>