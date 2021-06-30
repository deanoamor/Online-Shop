<?php include 'template/base.php'; ?>

<?php
session_start();

if ($_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
} else {
    include '../koneksi.php';
    $id = $_SESSION['id_user'];
    $query = mysqli_query($koneksi, "UPDATE user set status = 'on' WHERE id_user = '$id'");
}

?>


<?php
include 'koneksi.php';
$id = $_SESSION['id_user'];
$editwallet = $_SESSION['wallet'];
$tambahwallet = $_POST["walletplus"];

if ($tambahwallet > 0) {
    $hasil = $editwallet + $tambahwallet;
    $query = mysqli_query($koneksi, "UPDATE user set wallet = '$hasil' WHERE id_user = '$id'");
    $_SESSION['wallet'] = $hasil;
    header("location:profile.php");
} else {
    $query = mysqli_query($koneksi, "UPDATE user set wallet = '$tambahwallet' WHERE id_user = '$id'");
    header("location:profile.php");
}
?>