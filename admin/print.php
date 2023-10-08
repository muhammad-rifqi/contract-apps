<?php

if($_GET['act'] == 'cetak_tender'){

    $document = file_get_contents("surat_perjanjian_listrik_danau_rayo.rtf");    
    $document = str_replace("#NAMA", $_POST['nama_penyedia'], $document);

    header("Content-type: application/msword");
    header("Content-disposition: inline; filename=surat_perjanjian_listrik_danau_rayo.docx");
    header("Content-length: " . strlen($document));
    echo $document;

}