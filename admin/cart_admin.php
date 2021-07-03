<?php include 'template/base_admin.php'; ?>
<?php include 'template/header_admin.php'; ?>


<div class="container">
    <?php
    include '../koneksi.php';
    $no = 1;
    $dataconfirm = mysqli_query($koneksi, "select * from confirm ");
    while ($listconfirm = mysqli_fetch_array($dataconfirm)) {
    ?>
        <div class="card">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body">
                <h5 class="card-title"><?php echo $listconfirm['nama_barang_confirm']; ?></h5>
                <h6 class="card-title">Rp <?php echo $listconfirm['harga_confirm']; ?></h6>
                <p class="card-text">Dibeli oleh: <?php echo $listconfirm['nama_user']; ?></p>
                <p class="card-text"><?php echo $listconfirm['alamat_confirm']; ?></p>
                <p class="card-text">jumlah: <?php echo $listconfirm['jumlah_pesanan']; ?></p>
                <h5 class="card-title">Status: <?php echo $listconfirm['status_confirm']; ?></h5>
                <?php
                if ($listconfirm['status_confirm'] == 'Diproses') {
                ?>
                    <a href="ubah_status.php?id=<?php echo $listconfirm['id_confirm']; ?>" class="btn btn-primary">Ubah status</a>
                <?php
                }
                ?>
            </div>
        </div>
    <?php
    }
    ?>

</div>