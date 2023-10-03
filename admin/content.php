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

?>