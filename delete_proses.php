

<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
}
?>

<?php
include 'koneksi.php';

$id = $_SESSION['id_user'];


$query = mysqli_query($koneksi, "delete from user where id_user='$id'");
session_destroy();
header("location:login.php");

?>