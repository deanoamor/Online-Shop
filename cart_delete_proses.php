<?php include 'template/base.php'; ?>
<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
}
?>

<?php
include 'koneksi.php';
$id = $_GET['id'];


$query = mysqli_query($koneksi, "delete from confirm where id_confirm='$id'");

header("location:cart.php");


?>