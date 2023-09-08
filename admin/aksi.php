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

if($_GET['act'] == 'insert_sppbj'){
    mysqli_query($koneksi, "insert into sppbj(kode_tender , nama_tender , rup , harga_penawaran , no_sppbj,lampiran_sppbj ,kota_sppbj , nama_ppk ,nip_ppk ,jabatan_ppk , nama_satuan_kerja , alamat_satuan_kerja , penyedia ,tembusan ,dokumen_berita_acara,dokumen_cetak  )values('".$_POST['kode_tender']."','".$_POST['nama_tender']."','".$_POST['rup']."','".$_POST['harga_penawaran']."','".$_POST['no_sppbj']."','".$_POST['kota_sppbj']."','".$_POST['nama_ppk']."','".$_POST['nip_ppk']."','".$_POST['jabatan_ppk']."','".$_POST['nama_satuan_kerja']."','".$_POST['alamat_satuan_kerja']."','".$_POST['penyedia']."','".$_POST['tembusan']."','".$_POST['dokumen_berita_acara']."','".$_POST['dokumen_cetak']."')");
    header('location:dashboard.php?tambah_sppbj&id='.$_POST['id_tender']);
}
?>