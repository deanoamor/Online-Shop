<?php include 'template/base.php';

?>

<?php
include "koneksi.php";

if (isset($_POST["email"]) && isset($_POST["password"])) {
    $mailre = $_POST["email"];
    $passre = $_POST["password"];
    $namere = $_POST["name"];
    $cpassre = $_POST["confirmpassword"];

    // date_default_timezone_set("Asia/Jakarta");

    // $tgl = date("Y:m:d");

    // query sql


    if ($passre != $cpassre) {
        $msg = 'Password tidak sama';
    } elseif ($passre == $cpassre) {
        $sql = "INSERT INTO user (email, nama, pass) VALUES('$mailre','$namere','$passre')";
        $query = mysqli_query($koneksi, $sql);
        if ($query) {
            $msg = 'Register Berhasil';
        } else {
            echo "Error :" . $sql . "<br>" . mysqli_error($koneksi);
        }
    }


    mysqli_close($koneksi);
}

?>

<div class="container ">
    <div class="col-sm-6">
        <?php

        if (isset($query)) {
        ?>
            <div class="alert alert-success mt-5" role="alert">
                Register berhasil, kembali ke halaman <a href="login.php" class="alert-link">login</a>
            </div>
        <?php
        }
        ?>
        <div class="shadow p-3 mb-5 bg-white rounded card my-5">
            <div class=" container">
                <div class="col">
                    <form action="register.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="name" placeholder="Enter name" required>
                            <small id="name" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="text" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Confirm Password</label>
                            <input type="text" class="form-control" name="confirmpassword" id="exampleInputPassword1" placeholder="Password" required>
                        </div>

                        <?php
                        if (isset($msg)) {
                            echo $msg;
                        }
                        ?>

                        <button type="submit" class="btn btn-primary btn-block round-download mt-2">Register</button>
                        <div class="mt-3">
                            <p>Already have an account?<a href="login.php"><strong> Login now</strong><a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>