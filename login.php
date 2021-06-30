<?php include 'template/base.php';

?>

<div class="container ">
    <div class="col-sm-6">
        <div class="shadow p-3 mb-5 bg-white rounded card my-5">
            <div class=" container">
                <div class="col">
                    <form action="login_proses.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
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
                        <div class="mt-3">
                            <p>don't have an account yet? <a href="register.php"><strong> Register now</strong><a></p>
                        </div>
                    </form>
                </div>
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Info</h4>
                    <p>Web ini masih tahap beta, jika menemukan bug atau ingin memberikan kritik dan saran. silahkan klik link <a href="https://docs.google.com/forms/d/e/1FAIpQLSdgmUDk23F3gnBOgXvOKavfCh-fZ3AK-PrOLmeNm9l5jXMzyg/viewform?usp=sf_link">Gform</a></p>
                    <hr>

                </div>
            </div>
        </div>
    </div>

</div>