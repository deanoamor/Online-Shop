<?php
include '../../koneksi.php';
$info = "";

$id = $_POST["id_barang"];
if ($_POST) {
    $query = mysqli_query($koneksi, "delete from barang where id_barang='$id'");
    $info = '<b>SUKSES</b> Data Berhasil Dihapus';

    header("location:../home_admin.php?info=$info");
}
