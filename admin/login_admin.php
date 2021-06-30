<?php include 'template/base_admin.php';

?>

<div class="container ">
    <div class="col-sm-6">
        <div class="shadow p-3 mb-5 bg-white rounded card my-5">
            <div class=" container">
                <div class="col">
                    <form action="login_admin_proses.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" name="emailad" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="passwordad" id="exampleInputPassword1" placeholder="Password" required>
                        </div>
                        <?php
                        if (isset($_GET['pesan'])) {
                            if ($_GET['pesan'] == "gagal") {
                                echo "Login gagal! username dan password salah!";
                            } else if ($_GET['pesan'] == "logout") {
                                echo "Anda telah berhasil logout";
                            } else if ($_GET['pesan'] == "belum_login") {
                                echo "Anda harus login";
                            }
                        }
                        ?>

                        <button type="submit" class="btn btn-primary btn-block round-download mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>