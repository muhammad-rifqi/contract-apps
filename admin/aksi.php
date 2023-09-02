<?php
session_start();
include "config.php";


if ($_GET['act'] == 'insert_tender') {
    mysqli_query($koneksi, "insert into tender(kode_tender,nama_tender,tahap_tender,created_at)values('" . $_POST['kode_tender'] . "','" . $_POST['nama_tender'] . "','" . $_POST['tahap_tender'] . "','" . $_POST['created_at'] . "')");
    header('location:dashboard.php?menu=tender');
}


?>