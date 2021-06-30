?>

<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$maillog = $_POST['email'];
$passlog = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "select * from user where email='$maillog' and pass='$passlog'");


if (mysqli_num_rows($data) > 0) {
    $passing = mysqli_fetch_array($data);
    $_SESSION['email'] = $maillog;
    $_SESSION['pass'] = $passing['pass'];
    $_SESSION['id_user'] = $passing['id_user'];
    $_SESSION['alamat'] = $passing['alamat'];
    $_SESSION['nama'] = $passing['nama'];
    $_SESSION['wallet'] = $passing['wallet'];
    $_SESSION['status'] = "login";


    header("location:home.php");
} else {
    header("location:login.php?pesan=gagal");
}

?>