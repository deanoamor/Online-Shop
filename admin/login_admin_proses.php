?>

<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$maillogad = $_POST['emailad'];
$passlogad = $_POST['passwordad'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "select * from admin where email_admin='$maillogad' and pass_admin='$passlogad'");


if (mysqli_num_rows($data) > 0) {
    $passing = mysqli_fetch_array($data);
    $_SESSION['emailad'] = $maillogad;
    $_SESSION['pass_admin'] = $passing['pass_admin'];
    $_SESSION['id_admin'] = $passing['id_admin'];
    $_SESSION['nama_admin'] = $passing['nama_admin'];
    $_SESSION['status'] = "login";
    header("location:home_admin.php");
} else {
    header("location:login_admin.php?pesan=gagal");
}

?>