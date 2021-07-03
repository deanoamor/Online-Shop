<?php include 'template/base.php'; ?>
<?php include 'template/header.php'; ?>

<?php


?>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-9 mb-4">
            <div class="row">

                <!-- #Iklan Box-->
                <?php
                if (isset($_GET['info'])) {
                    if ($_GET['info'] == "duitkurang") {
                ?>
                        <div class="container">
                            <div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
                                <strong>Maaf</strong> Duit anda kurang
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    <?php

                    } else if ($_GET['info'] == "jumlahpesanan") {
                    ?>
                        <div class="container">
                            <div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
                                <strong>Maaf</strong> jumlah pesanan tidak boleh 0
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    <?php
                    } else if ($_GET['info'] == "terbeli") {
                    ?>
                        <div class="container">
                            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                                <strong>Sukses</strong> Barang berhasil terbeli
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    <?php
                    } else if ($_GET['info'] == "inputangka") {
                    ?>
                        <div class="container">
                            <div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
                                <strong>Maaf</strong> Input hanya boleh angka
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
                <!-- #Iklan Box -->

                <!-- #SlideShow-->

                <!-- #endSlideshow -->



                <!-- #Catalog-->
                <table>

                    <div class="col-12 px-4">
                        <div class="row">

                            <!-- #CardMovie-->
                            <?php
                            include 'koneksi.php';
                            $no = 1;
                            $databarang = mysqli_query($koneksi, "select * from barang");
                            while ($listbarang = mysqli_fetch_array($databarang)) {
                            ?>
                                <div class="card col-xl-4" style="width: 18rem;">
                                    <img class="card-img-top" src="admin/barang/foto_barang/<?php echo $listbarang['gambar_barang']; ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $listbarang['nama_barang']; ?></h5>
                                        <h6 class="card-title">Rp <?php echo $listbarang['harga_barang']; ?></h6>
                                        <p class="card-text"><?php echo $listbarang['tanggal_barang']; ?></p>
                                        <p class="card-text"><?php echo $listbarang['deskripsi_barang']; ?></p>
                                        <a type="submit" href="confirm/confirm.php?id=<?php echo $listbarang['id_barang']; ?>" class="btn btn-success">Beli</a>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>


                        </div>
                    </div>

                </table>

                <!-- #endcatalog -->

                <!-- #Anime Latest Update-->

                <!-- #EndAnime Latest Update-->



                <!-- #Iklan Box-->

                <!-- #Iklan Box -->

            </div>
        </div>

        <!-- #Sidebar-->

        <!-- #endSidebar -->

    </div>

</div>