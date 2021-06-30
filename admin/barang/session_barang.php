<?php
session_start();

if ($_SESSION['status'] != "login") {
    header("location:../login_admin.php?pesan=belum_login");
}
