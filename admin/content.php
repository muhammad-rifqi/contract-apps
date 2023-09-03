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

if($_GET['menu'] == 'non_tender'){
    include "include/non_tender.php" ;
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
?>