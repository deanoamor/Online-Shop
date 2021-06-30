<?php
// mengaktifkan session
session_start();

include 'koneksi.php';
$id = $_SESSION['id_user'];
$query = mysqli_query($koneksi, "UPDATE user set status = '' WHERE id_user = '$id'");
// menghapus semua session
session_destroy();

// mengalihkan halaman sambil mengirim pesan logout
header("location:login.php");
