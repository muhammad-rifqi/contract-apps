<?php


if($_GET['menu'] == ''){
    include "include/total_data.php";
}

if($_GET['menu'] == 'tender'){
    include "include/tender.php" ;
}

if($_GET['menu'] == 'tambah_tender'){
    include "include/tambah_tender.php" ;
}

if($_GET['menu'] == 'edit_tender'){
    include "include/edit_tender.php" ;
}

if($_GET['menu'] == 'sppbj'){
    include "include/sppbj.php" ;
}

if($_GET['menu'] == 'tambah_sppbj'){
    include "include/tambah_sppbj.php" ;
}

if($_GET['menu'] == 'non_tender'){
    include "include/non_tender.php" ;
}

if($_GET['menu'] == 'tambah_non_tender'){
    include "include/tambah_non_tender.php" ;
}

if($_GET['menu'] == 'edit_non_tender'){
    include "include/edit_non_tender.php" ;
}

if($_GET['menu'] == 'sppbj_non_tender'){
    include "include/sppbj_non_tender.php" ;
}

if($_GET['menu'] == 'tambah_sppbj_non_tender'){
    include "include/tambah_sppbj_non_tender.php" ;
}

if($_GET['menu'] == 'pencatatan_non_tender'){
    include "include/pencatatan_non_tender.php" ;
}

if($_GET['menu'] == 'pencatatan_swakelola'){
    include "include/pencatatan_swakelola.php" ;
}

if($_GET['menu'] == 'pengadaan_darurat'){
    include "include/pengadaan_darurat.php" ;
}
if($_GET['menu'] == 'input_kontrak_tender'){
    include "include/input_kontrak_tender.php" ;
}

if($_GET['menu'] == 'view_input_kontrak_tender'){
    include "include/view_input_kontrak_tender.php" ;
}

if($_GET['menu'] == 'view_input_kontrak_non_tender'){
    include "include/view_input_kontrak_non_tender.php" ;
}

if($_GET['menu'] == 'input_spmk_tender'){
    include "include/input_spmk_tender.php" ;
}

if($_GET['menu'] == 'input_pembayaran_tender'){
    include "include/input_pembayaran_tender.php" ;
}

if($_GET['menu'] == 'input_termin_tender'){
    include "include/input_termin_tender.php" ;
}

if($_GET['menu'] == 'input_kontrak_non_tender'){
    include "include/input_kontrak_non_tender.php" ;
}

if($_GET['menu'] == 'input_spmk_non_tender'){
    include "include/input_spmk_non_tender.php" ;
}

if($_GET['menu'] == 'input_pembayaran_non_tender'){
    include "include/input_pembayaran_non_tender.php" ;
}

if($_GET['menu'] == 'input_termin_non_tender'){
    include "include/input_termin_non_tender.php" ;
}

if($_GET['menu'] == 'add_pencatatan_non_tender'){
    include "include/add_pencatatan_non_tender.php" ;
}

if($_GET['menu'] == 'add_pencatatan_swakelola'){
    include "include/add_pencatatan_swakelola.php" ;
}

if($_GET['menu'] == 'add_pengadaan_darurat'){
    include "include/add_pengadaan_darurat.php" ;
}
?>