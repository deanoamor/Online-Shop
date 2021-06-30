<?php include 'template/base_admin.php'; ?>
<?php include 'template/header_admin.php'; ?>


<div class="container">
    <div class="row">
        <div class="col-12 col-lg-9 mb-4">
            <div class="row">

                <!-- #Iklan Box-->

                <!-- #Iklan Box -->

                <!-- #SlideShow-->

                <!-- #endSlideshow -->



                <!-- #Catalog-->
                <?php
                if (isset($_GET['info'])) {
                    $info = $_GET['info'];
                    echo '<p>' . $info . '</p>';
                }
                ?>
                <table>

                    <div class="col-12  px-4">
                        <div class="row">

                            <!-- #CardMovie-->
                            <?php
                            include '../koneksi.php';
                            $no = 1;
                            $databarang = mysqli_query($koneksi, "select * from barang");
                            while ($listbarang = mysqli_fetch_array($databarang)) {
                            ?>
                                <div class="card col-xl-4" style="width: 18rem;">
                                    <img class="card-img-top" src="barang/foto_barang/<?php echo $listbarang['gambar_barang']; ?>">
                                    <div class=" card-body">
                                        <h5 class="card-title "><?php echo $listbarang['nama_barang']; ?></h5>
                                        <h6 class="card-title">RP <?php echo $listbarang['harga_barang']; ?></h6>
                                        <p class="card-text"><?php echo $listbarang['tanggal_barang']; ?></p>
                                        <p class="card-text"><?php echo $listbarang['deskripsi_barang']; ?></p>

                                        <form action="barang/proses_hapus_barang.php?id=<?php echo $listbarang['id_barang']; ?>" method="POST">
                                            <a type="submit" href="barang/edit_barang.php?id=<?php echo $listbarang['id_barang']; ?>" class="btn btn-primary">Edit</a>
                                            <input type="hidden" class="form-control" id="exampleInputEmail1" name="id_barang" aria-describedby="emailHelp" value="<?php echo $listbarang['id_barang'] ?>" required>
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin dihapus?')">Delete</button>
                                        </form>
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
        <div class="col-12 col-lg-3 float-right mt-4">

            <table class="table table-striped table-dark">
                <thead>

                    <tr>
                        <th scope="col">Member</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from user");
                    while ($list = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $list['nama']; ?></td>

                            <?php
                            if ($list['status'] == "on") {
                            ?>
                                <td>
                                    <div class="btn btn-success">Online</div>
                                </td>
                            <?php
                            } else {
                            ?>
                                <td>
                                    <div class="btn btn-danger">Offline</div>
                                </td>
                            <?php
                            }
                            ?>

                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>


        </div>
        <!-- #endSidebar -->

    </div>

</div>
<!-- #endContent -->