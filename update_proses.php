<?php include 'base.php'; ?>

<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
}
?>

<?php
include 'koneksi.php';
$infopro = "";

if (isset($_POST["email"]) && isset($_POST["name"])) {
    $id = $_SESSION['id_user'];
    $mailpro = $_POST["email"];
    $namapro = $_POST["name"];
    $alamatpro = $_POST["lamat"];

    if ($_POST) {
        if (strlen($mailpro) <= 0 || strlen($namapro) <= 0) {
            $infopro = '<b>PERINGATAN:</b> Data belum diinput dengan benar';
        } else {
            $query = mysqli_query($koneksi, "UPDATE user set email = '$mailpro', nama = '$namapro', alamat = '$alamatpro' WHERE id_user = '$id'");
            $_SESSION['email'] = $mailpro;
            $_SESSION['nama'] = $namapro;
            $_SESSION['alamat'] = $alamatpro;
            $infopro = '<b>SUKSES</b> Data Berhasil Diubah';
        }
        header("location:profile.php?infopro=$infopro");
    }
}
?>