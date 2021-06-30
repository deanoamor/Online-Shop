<?php include 'session_barang.php'; ?>
<?php
include '../../koneksi.php';
$info = "";

$namabarang = $_POST["namabar"];
$filegambarbarang = $_FILES["gambarbar"]["name"];
$deskbarang = $_POST["deskbar"];
$hargabarang = $_POST["hargabar"];
$tanggalbarang = $_POST["tanggalbar"];
$path = $_FILES['gambarbar']['tmp_name'];

if ($_POST) {

    if (move_uploaded_file($path, "foto_barang/$filegambarbarang")) {
        $query = mysqli_query($koneksi, "insert into barang(nama_barang, gambar_barang, deskripsi_barang, harga_barang, tanggal_barang) values('$namabarang','$filegambarbarang','$deskbarang','$hargabarang','$tanggalbarang')");
        $info = '<b>SUKSES</b> Data Barang Berhasil Diinput';
        header("location:../home_admin.php?info=$info");
    } else {
        echo "FOTO: There was a problem uploading your file - please try again<br>";
    }
}
?>