<?php
session_start();
include "config.php";


if ($_GET['act'] == 'insert_tender') {
    mysqli_query($koneksi, "insert into tender(kode_tender,nama_tender,tahap_tender,created_at)values('" . $_POST['kode_tender'] . "','" . $_POST['nama_tender'] . "','" . $_POST['tahap_tender'] . "','" . $_POST['tanggal_input'] . "')");
    header('location:dashboard.php?menu=tender');
}

if ($_GET['act'] == 'delete_tender') {
    mysqli_query($koneksi, "delete from tender where id = '" . $_GET['id'] . "'");
    header('location:dashboard.php?menu=tender');
}

if ($_GET['act'] == 'update_tender') {
    mysqli_query($koneksi, "update tender set tahap_tender = '".$_POST['tahap_tender']."' where id = '" . $_POST['id'] . "'");
    header('location:dashboard.php?menu=tender');
}
?>