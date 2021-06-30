<?php include '../template/base.php'; ?>

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
include '../koneksi.php';

$idusercon = $_POST["iduserbar"];
$idbarangcon = $_POST["idbarangbar"];
$namausercon = $_POST["connamauserbar"];
$namabarangcon = $_POST["connamabar"];
$alamatusercon = $_POST["conalamatbar"];
$hargabarangcon = $_POST["conhargabar"];
$walletusercon = $_POST["conwalletbar"];
$jumlahpesanancon = $_POST["conjumlahbar"];

$hasil = $hargabarangcon * $jumlahpesanancon;

if ($hasil > $walletusercon) {
    $info = '<b>Maaf,</b> Duit anda kurang';
    header("location:../home.php?info=$info");
} else {
    $query = mysqli_query($koneksi, "insert into confirm(id_barang, id_user, nama_user, nama_barang_confirm, alamat_confirm, jumlah_pesanan, harga_confirm, status_confirm) values('$idbarangcon','$idusercon','$namausercon','$namabarangcon','$alamatusercon','$jumlahpesanancon','$hasil','Diproses')");
    $kurang = $walletusercon - $hasil;
    $_SESSION['wallet'] = $kurang;
    $querywallet = mysqli_query($koneksi, "UPDATE user set wallet = '$kurang' WHERE id_user = '$idusercon'");
    $info = '<b>SUKSES</b> Data Barang Berhasil Diinput';
    header("location:../home.php?info=$info");
}
?>