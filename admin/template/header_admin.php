<?php include 'base_admin.php'; ?>

<?php
session_start();

if ($_SESSION['status'] != "login") {
    header("location:login_admin.php?pesan=belum_login");
}

?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand">Admin page</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home_admin.php">Home</a>
                </li>
                <div class="">
                    <form action="barang/tambah_barang.php">
                        <button class="btn btn-success" type="submit">Tambah data</button>
                    </form>
                </div>

            </ul>
            <div>
                <a class="nav-link text-dark" href="cart_admin.php" href="">Cart</a>
            </div>
            <div>
                <a class="nav-link text-dark" href=""><?php echo $_SESSION['nama_admin']; ?></a>
            </div>
            <div>

            </div>
            <div>
                <form action="logout_admin.php">
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>