<?php include 'template/base.php'; ?>
<?php include 'template/header.php'; ?>


<div class="col">
    <div class="container">
        <div class="row ">
            <div class="col">
                <div class="card mt-4 row">
                    <div class="card-body">
                        <form action="update_proses.php" method="POST">
                            <div class="form-group">
                                <label for=" exampleInputEmail1">Email:</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="<?php echo $_SESSION['email']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInpunama1">Nama:</label>
                                <input type="text" class="form-control" id="exampleInputnama1" name="name" aria-describedby="emailHelp" value="<?php echo $_SESSION['nama']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputalamat1">Alamat:</label>
                                <input type="text" class="form-control" id="exampleInputalamat1" name="lamat" aria-describedby="emailHelp" value="<?php echo $_SESSION['alamat']; ?>" required>
                            </div>
                            <?php
                            if (isset($_GET['infopro'])) {
                                $infopro = $_GET['infopro'];
                                echo '<p>' . $infopro . '</p>';
                            }
                            ?>
                            <button type="submit" class="btn btn-primary">Edit data</button>
                            <a type="submit" href="delete_proses.php" class="btn btn-danger" onclick="return confirm('Yakin ingin dihapus?')">Delete akun</a>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mt-4 row">
                    <div class="card-body">
                        <h5 class="card-title">User Wallet</h5>
                        <h6>Rp <?php echo $_SESSION['wallet']; ?> </h6>
                        <form action="proses_wallet.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1" name="walletplus" aria-describedby="emailHelp" required>
                            </div>
                            <?php
                            if (isset($_GET['info'])) {
                                if ($_GET['info'] == "walletangka") {
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
                            <button class="btn btn-primary">Top up</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="container">
        <div class="card mt-4 row" style="width: 18rem;">
            <div class="card-body">
                <form action="update_proses_password.php" method="POST">
                    <h4>Edit password</h4>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Confirm Password lama:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="cpasslama" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password baru:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="passbaru" aria-describedby="emailHelp" required>
                    </div>
                    <?php
                    if (isset($_GET['infopass'])) {
                        $infopass = $_GET['infopass'];
                        echo '<p>' . $infopass . '</p>';
                    }
                    ?>
                    <button type="submit" class="btn btn-primary">Edit data</button>
                </form>
            </div>
        </div>
    </div>
</div>