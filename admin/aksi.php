<?php
session_start();
include "config.php";


if ($_GET['act'] == 'insert_tender') {
    mysqli_query($koneksi, "insert into tender(kode_tender,nama_tender,tahap_tender,created_at)values('" . $_POST['kode_tender'] . "','" . $_POST['nama_tender'] . "','" . $_POST['tahap_tender'] . "','" . $_POST['tanggal_input'] . "')");
    header('location:tender');
}

if ($_GET['act'] == 'delete_tender') {
    mysqli_query($koneksi, "delete from tender where id = '" . $_GET['id'] . "'");
    header('location:tender');
}

if ($_GET['act'] == 'update_tender') {
    mysqli_query($koneksi, "update tender set tahap_tender = '".$_POST['tahap_tender']."' where id = '" . $_POST['id'] . "'");
    header('location:tender');
}

if($_GET['act'] == 'insert_sppbj'){
    $nama_file = $_FILES['dokumen_berita_acara']['name'];
    $lokasi_file = $_FILES['dokumen_berita_acara']['tmp_name'];
    $nama_file2 = $_FILES['dokumen_cetak']['name'];
    $lokasi_file2 = $_FILES['dokumen_cetak']['tmp_name'];
    if(!empty($lokasi_file) || !empty($lokasi_file2)){
        move_uploaded_file($lokasi_file,"upload/".$nama_file);
        move_uploaded_file($lokasi_file2,"upload/".$nama_file2);
        mysqli_query($koneksi, "insert into sppbj(kode_tender , nama_tender , rup , harga_penawaran , no_sppbj,lampiran_sppbj , tanggal_sppbj, kota_sppbj , nama_ppk ,nip_ppk ,jabatan_ppk , nama_satuan_kerja , alamat_satuan_kerja , penyedia ,tembusan ,dokumen_berita_acara,dokumen_cetak ,jenis_paket )values('".$_POST['kode_tender']."','".$_POST['nama_tender']."','".$_POST['rup']."','".$_POST['harga_penawaran']."','".$_POST['no_sppbj']."','".$_POST['lampiran_sppbj']."','".$_POST['tanggal_sppbj']."','".$_POST['kota_sppbj']."','".$_POST['nama_ppk']."','".$_POST['nip_ppk']."','".$_POST['jabatan_ppk']."','".$_POST['nama_satuan_kerja']."','".$_POST['alamat_satuan_kerja']."','".$_POST['penyedia']."','".$_POST['tembusan']."','".$nama_file."','".$nama_file2."','tender')");
    }else{
        mysqli_query($koneksi, "insert into sppbj(kode_tender , nama_tender , rup , harga_penawaran , no_sppbj,lampiran_sppbj , tanggal_sppbj, kota_sppbj , nama_ppk ,nip_ppk ,jabatan_ppk , nama_satuan_kerja , alamat_satuan_kerja , penyedia ,tembusan ,dokumen_berita_acara,dokumen_cetak ,jenis_paket )values('".$_POST['kode_tender']."','".$_POST['nama_tender']."','".$_POST['rup']."','".$_POST['harga_penawaran']."','".$_POST['no_sppbj']."','".$_POST['lampiran_sppbj']."','".$_POST['tanggal_sppbj']."','".$_POST['kota_sppbj']."','".$_POST['nama_ppk']."','".$_POST['nip_ppk']."','".$_POST['jabatan_ppk']."','".$_POST['nama_satuan_kerja']."','".$_POST['alamat_satuan_kerja']."','".$_POST['penyedia']."','".$_POST['tembusan']."','".$nama_file."','".$nama_file2."','tender')");
    }
    header('location:add-sppbj-'.$_POST['id_tender']);
   
}


if ($_GET['act'] == 'insert_non_tender') {
    mysqli_query($koneksi, "insert into non_tender(kode_tender,nama_tender,tahap_tender,created_at)values('" . $_POST['kode_tender'] . "','" . $_POST['nama_tender'] . "','" . $_POST['tahap_tender'] . "','" . $_POST['tanggal_input'] . "')");
    header('location:non_tender');
}

if ($_GET['act'] == 'delete_non_tender') {
    mysqli_query($koneksi, "delete from non_tender where id = '" . $_GET['id'] . "'");
    header('location:non_tender');
}

if ($_GET['act'] == 'update_non_tender') {
    mysqli_query($koneksi, "update non_tender set tahap_tender = '".$_POST['tahap_tender']."' where id = '" . $_POST['id'] . "'");
    header('location:non_tender');
}

if($_GET['act'] == 'insert_sppbj_non_tender'){
    $nama_file = $_FILES['dokumen_berita_acara']['name'];
    $lokasi_file = $_FILES['dokumen_berita_acara']['tmp_name'];
    $nama_file2 = $_FILES['dokumen_cetak']['name'];
    $lokasi_file2 = $_FILES['dokumen_cetak']['tmp_name'];
    if(!empty($lokasi_file) || !empty($lokasi_file2)){
        move_uploaded_file($lokasi_file,"upload_non_tender/".$nama_file);
        move_uploaded_file($lokasi_file2,"upload_non_tender/".$nama_file2);
        mysqli_query($koneksi, "insert into sppbj(kode_tender , nama_tender , rup , harga_penawaran , no_sppbj,lampiran_sppbj , tanggal_sppbj, kota_sppbj , nama_ppk ,nip_ppk ,jabatan_ppk , nama_satuan_kerja , alamat_satuan_kerja , penyedia ,tembusan ,dokumen_berita_acara,dokumen_cetak, jenis_paket)values('".$_POST['kode_tender']."','".$_POST['nama_tender']."','".$_POST['rup']."','".$_POST['harga_penawaran']."','".$_POST['no_sppbj']."','".$_POST['lampiran_sppbj']."','".$_POST['tanggal_sppbj']."','".$_POST['kota_sppbj']."','".$_POST['nama_ppk']."','".$_POST['nip_ppk']."','".$_POST['jabatan_ppk']."','".$_POST['nama_satuan_kerja']."','".$_POST['alamat_satuan_kerja']."','".$_POST['penyedia']."','".$_POST['tembusan']."','".$nama_file."','".$nama_file2."','non_tender')");
    }else{
        mysqli_query($koneksi, "insert into sppbj(kode_tender , nama_tender , rup , harga_penawaran , no_sppbj,lampiran_sppbj , tanggal_sppbj, kota_sppbj , nama_ppk ,nip_ppk ,jabatan_ppk , nama_satuan_kerja , alamat_satuan_kerja , penyedia ,tembusan ,dokumen_berita_acara,dokumen_cetak, jenis_paket )values('".$_POST['kode_tender']."','".$_POST['nama_tender']."','".$_POST['rup']."','".$_POST['harga_penawaran']."','".$_POST['no_sppbj']."','".$_POST['lampiran_sppbj']."','".$_POST['tanggal_sppbj']."','".$_POST['kota_sppbj']."','".$_POST['nama_ppk']."','".$_POST['nip_ppk']."','".$_POST['jabatan_ppk']."','".$_POST['nama_satuan_kerja']."','".$_POST['alamat_satuan_kerja']."','".$_POST['penyedia']."','".$_POST['tembusan']."','".$nama_file."','".$nama_file2."','non_tender')");
    }
    header('location:dashboard.php?menu=sppbj&id='.$_POST['id_tender']);
   
}

?>