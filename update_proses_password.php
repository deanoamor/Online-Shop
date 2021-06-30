<?php include 'base.php'; ?>

<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
}
?>

<?php
include 'koneksi.php';
$infopass = "";

if (isset($_POST["cpasslama"]) && isset($_POST["passbaru"])) {
    $id = $_SESSION['id_user'];
    $cek = $_SESSION['pass'];
    $cpasslapro = $_POST["cpasslama"];
    $passbapro = $_POST["passbaru"];

    if ($_POST) {
        if (strlen($cpasslapro) <= 0 || strlen($passbapro) <= 0) {
            $infopass = '<b>PERINGATAN:</b> Data belum diinput dengan benar';
        } elseif ($cpasslapro != $cek) {
            $infopass = '<b>PERINGATAN:</b> Password tidak sama';
        } elseif ($cpasslapro == $cek) {
            $query = mysqli_query($koneksi, "UPDATE user set pass = '$passbapro' WHERE id_user = '$id'");
            $_SESSION['pass'] = $passbapro;
            $infopass = '<b>SUKSES</b> Password Berhasil Diubah';
        }
        header("location:profile.php?infopass=$infopass");
    }
}
?>