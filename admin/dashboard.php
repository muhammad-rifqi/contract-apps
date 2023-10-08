<?php 
 error_reporting(0);
session_start();
include "config.php";
if(empty($_SESSION['username'])){
    echo "<h1>Session Expired!</h1>";
}else{ 
?>
<!DOCT
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="Aplikasi eKontrak Kabupaten Musi Rawas Utara">
    <meta name="author" content="Integra Inovasi Indonesia">
    <meta name="keyword" content="Bootstrap,Admin,Template,jQuery,CSS,HTML,RWD,Dashboard,Vue">
    <link rel="shortcut icon" href="../img/icon.ico">
    <title>Dinas Pekerjaan Umum dan Penataan Ruang - Kabupaten Musi Rawas Utara </title>
    <link href="../css/public-app.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
    
    

</head>
<body id="public-5" class="app" style="background-color:#D8D8D8;">
    <div class="background-wrapper w-100"></div>
    <div class="p-0" style="min-height: 100vh;">
        <nav id="nav-menu" class="navbar navbar-expand-lg navbar-dark bg-blue-2 fixed-top"
            style="border-bottom: 1px solid #fff">
            <div class="px-3 py-1 d-flex flex-row">
                <div class="px-2"> <img class="d-none d-sm-block mr-2" src="../img/logo-kab.png" width="40" height="auto">
                    <img class="d-block d-sm-none mr-2" src="../img/logo-kab.png" width="30" height="auto"> </div>
                <div class="text-white">
                    <h4 class="d-block d-sm-none title mb-0 mt-1">eKontrak Musi Rawas Utara</h4>
                    <h4 class="d-none d-sm-block title mb-0">Dinas Pekerjaan Umum dan Penataan Ruang </h4>
                    <div class="d-none d-sm-block" style="letter-spacing: 3px;">Kabupaten Musi Rawas Utara</div>
                </div>
            </div> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="navbar-toggler-icon"></span> </button>
        </nav>

        <br><br><br>
        <nav class="navbar navbar-expand-lg navbar-warning bg-warning">
            <a class="navbar-brand" href="#">  </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="dashboard">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="tender">Daftar Paket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Setting</a>
                </li>
                </ul>
                <span class="navbar-text text-dark">
                <?php echo $_SESSION['username']; ?> | <a href="logout">  Logout </a>
                </span>
            </div>
        </nav>
        <div class="p-0 d-flex flex-column flex-wrap">
            <div id="content"> 
                <div class="container container-bigger bg-white">
                    <br>
                        <div class="row">
                                <div class="col-2 px-2 text-center text-dark">
                                    <a href="tender"><u>Tender</u></a>
                                </div>
                                <div class="col-2 px-2 text-center text-dark">
                                <a href="non_tender"><u>Non Tender</u></a>                                   
                                </div>
                                <div class="col-2 px-2 text-center text-dark">
                                    <u>Pencatatan Non Tender</u>
                                </div>
                                <div class="col-2 px-2 text-center text-dark">
                                    <u>Pencatatan Swa Kelola</u>
                                </div>
                                <div class="col-4 px-2 text-center text-dark">
                                    <u>Pengadaan Darurat</u>                                    
                                </div> 
                        </div>
                        <hr>
                        <br>

                        <div class="alert alert-danger" role="alert">
                            <h4>Fitur e-Kontrak akan aktif jika : </h4>
                            <ul>
                                <li>Sudah masuk tahap SPPBJ atau sudah melewati tahapan upload dokumen Penawaran untuk Tender Cepat;</li>
                                <li>Pokja Pemilihan sudah menetapkan dan mengumumkan pemenang; </li>
                                <li>Seluruh sanggah sudah dijawab oleh Pokja Pemilihan; dan/atau </li>
                                <li>Seluruh jawaban sanggah Salah/Ditolak.</li>
                            </ul>
                        </div>
                        <hr>
                        <br>
                        <div class="row">                            
                            <div class="col-12 px-1">
                                    <?php include "content.php"; ?>
                            </div>
                        </div>
                        <hr>
                </div>
            </div>


            <div class="container container-bigger bg-white">
                <div class="row">
                    <div class="col-12 px-0">
                        <h6 class="bg-dark text-center text-white py-4 mb-0"
                            style="text-transform: uppercase;letter-spacing: 3px">  </h6>
                    </div>
                </div>
            </div>
        </div>


        
    </div>
</body>

<div class="modal fade" id="modalSSKK" tabindex="-1" role="dialog" aria-labelledby="modalSSKKTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSSKKTitle">Modal SSKK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="form-group">
              <label for="rancangan_kontrak" class="col-form-label">Rancangan Kontrak :</label>
              <input type="text" class="form-control" id="rancangan_kontrak">
            </div>
            <div class="form-group">
              <label for="upload_sskk" class="col-form-label">Upload SSKK :</label>
              <input type="file" class="form-control" id="upload_sskk">
              <p> ** PDF Required </p>
            </div>
            <div class="form-group">
              <label for="cara_pembayaran" class="col-form-label">Cara Pembayaran :</label>
                <select class="form-control" id="cara_pembayaran">
                    <option value='termin'>Termin</option>
                    <option value='bulanan'>Bulanan</option>
                    <option value='sekaligus'>Sekaligus</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalPILIH" tabindex="-1" role="dialog" aria-labelledby="modalPILIHTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalPILIHTitle">Modal PILIH</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="form-group">
              <label for="status_kontrak" class="col-form-label">Status Kontrak :</label>
              <p> <input type="radio" id="status_kontrak" value="selesai"> Selesai </p>
              <p> <input type="radio" id="status_kontrak" value="pemutusan_kontrak"> Pemutusan Kontrak </p>
              <p> <input type="radio" id="status_kontrak" value="penghentian_kontrak"> Penghentian Kontrak </p>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


 <script src="js/sb-admin-2.min.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="js/demo/datatables-demo.js"></script>


</html>
<?php } ?>