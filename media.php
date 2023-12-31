<?php 
include "admin/config.php"; 
$tender = mysqli_fetch_assoc(mysqli_query($koneksi,"select * from sppbj where jenis_paket = 'tender' order by id desc limit 1"));
$nontender = mysqli_fetch_assoc(mysqli_query($koneksi,"select * from sppbj where jenis_paket = 'non_tender' order by id desc limit 1"));
$sppbj = mysqli_query($koneksi,"select * from sppbj");
$bs = mysqli_query($koneksi,"select * from tender where status = 'belum_selesai' ");
$op = mysqli_query($koneksi,"select * from tender where status = 'on_progress' ");
$ss = mysqli_query($koneksi,"select * from tender where status = 'sudah_selesai' ");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="Aplikasi eKontrak Kabupaten Musi Rawas Utara">
    <meta name="author" content="Integra Inovasi Indonesia">
    <meta name="keyword" content="Bootstrap,Admin,Template,jQuery,CSS,HTML,RWD,Dashboard,Vue">
    <link rel="shortcut icon" href="img/icon.ico">
    <title>Dinas Pekerjaan Umum dan Penataan Ruang - Kabupaten Musi Rawas Utara </title>
    <link href="css/public-app.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    
    

</head>
<body id="public-5" class="app">
    <div class="background-wrapper w-100"></div>
    <div class="p-0" style="min-height: 100vh;">
        <nav id="nav-menu" class="navbar navbar-expand-lg navbar-dark bg-blue-2 fixed-top"
            style="border-bottom: 1px solid #fff">
            <div class="px-3 py-1 d-flex flex-row">
                <div class="px-2"> <img class="d-none d-sm-block mr-2" src="img/logo-kab.png" width="40" height="auto">
                    <img class="d-block d-sm-none mr-2" src="img/logo-kab.png" width="30" height="auto"> </div>
                <div class="text-white">
                    <h4 class="d-block d-sm-none title mb-0 mt-1">eKontrak Musi Rawas Utara</h4>
                    <h4 class="d-none d-sm-block title mb-0">Dinas Pekerjaan Umum dan Penataan Ruang </h4>
                    <div class="d-none d-sm-block" style="letter-spacing: 3px;">Kabupaten Musi Rawas Utara</div>
                </div>
            </div> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <div class="mr-4 py-2 pl-md-2 pr-md-0">
                    <div id="ig-tahun" class="input-group input-group-sm input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-primary font-weight-bold"
                                style="background-color: rgb(10 122 127) !important; color: white">Tahun</div>
                        </div> <select class="form-control form-control-sm" name="tahun">
                            <option value="2023">2023</option>
                        </select>
                    </div>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item font-weight-bold"> <a
                            class="nav-link mr-3"href="#" style="color:white"> Home <span
                                class="sr-only">(current)</span></a> </li>
                    <li class="nav-item font-weight-bold"> <a class="nav-link" href="admin/login" style="color:white">Login<span class="sr-only">(current)</span></a> </li>
                </ul>
            </div>
        </nav>

        <div class="p-0 d-flex flex-column flex-wrap">
            <div id="content"> 
                <br>
                <div class="container container-bigger bg-white">
        
                        <div class="row">
                            <h3>SI Pendongkrak</h3><br><br>
                                <div class="col-12 px-1">
                                    <div class="row">
                                        <div class="col-2 px-1 text-center"> <label> Instansi : </label></div>
                                        <div class="col-8 px-1 ">
                                        <select class="form-control">
                                                    <option value="null">Pilih Instansi </option>
                                            </select>
                                        </div>
                                        <div class="col-2 px-1 text-center"> <button class="btn-primary"> Refresh </button></div>
                                    </div>
                                    <br>
                                </div>    
                               
                                <div class="col-12 px-1">
                                    <div class="card shadow mb-4">
                                                <div class="card-header py-3 bg-default">
                                                    <h6 class="m-0 font-weight-bold text-default">Data Terbaru</h6>
                                                </div>
                                                <div class="card-body">
                                                <div class="container-bigger bg-white">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                                <div class="card shadow mb-4">
                                                                    <div class="card-header py-3 bg-warning">
                                                                    <h6 class="m-0 font-weight-bold text-default">Kontrak Tender</h6>
                                                                    </div>
                                                                    <div class="card-body">
                                                                    <p>Nilai Kontrak : Rp.<?php echo number_format($tender['harga_penawaran']);?></p>
                                                                    <p>Paket : <?php echo $tender['jenis_paket']; ?> </p>
                                                                    </div>
                                                                </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="card shadow mb-4">
                                                                <div class="card-header py-3 bg-primary">
                                                                    <h6 class="m-0 font-weight-bold text-default">Kontrak Non Tender</h6>
                                                                </div>
                                                                <div class="card-body">
                                                                    <p>Nilai Kontrak : Rp.<?php echo number_format($nontender['harga_penawaran']);?></p>
                                                                    <p>Paket : <?php echo $nontender['jenis_paket']; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                        <div class="card shadow mb-4">
                                                            <div class="card-header py-3 bg-warning">
                                                                <h6 class="m-0 font-weight-bold text-default">Kontrak Berjalan</h6>
                                                            </div>
                                                            <div class="card-body">
                                                                    <p>Nilai Kontrak : Rp.57.000.000</p>
                                                                    <p>Paket : Tender </p>
                                                            </div>
                                                        </div>
                                                        </div>
 
                                                        <div class="col-md-4">
                                                        <div class="card shadow mb-4">
                                                            <div class="card-header py-3 bg-info">
                                                                <h6 class="m-0 font-weight-bold text-default">Kontrak Selesai</h6>
                                                            </div>
                                                            <div class="card-body">
                                                                    <p>Nilai Kontrak : Rp.57.000.000</p>
                                                                    <p>Paket : Tender </p>
                                                            </div>
                                                        </div>
                                                        </div>

                                                        <div class="col-md-4 ">
                                                        <div class="card shadow mb-4 ">
                                                            <div class="card-header py-3 bg-info">
                                                                <h6 class="m-0 font-weight-bold text-default">Kontrak Terbayar</h6>
                                                            </div>
                                                            <div class="card-body">
                                                                    <p>Nilai Kontrak : Rp.57.000.000</p>
                                                                    <p>Paket : Non Tender </p>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>

                                              
                                                </div>
                                    </div>
                                </div>

                        </div>
                        <hr>
                        <!-- <h3>Persentase</h3><br>
                        <div class="row">
                            <div class="col-12 px-1">
                                <canvas id="myChart" style="width:100%;"></canvas>
                            </div>
                        </div>
                        <hr> -->
                        <div class="row">                            
                            <div class="col-12 px-1">

                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                            <tr>
                                                <th>Kode Tender</th>
                                                <th>Nama Tender</th>
                                                <th>RUP</th>
                                                <th>Harga Penawaran</th>
                                                <th>No SPPBJ</th>
                                                <th>Lampiran SPPBJ</th>
                                                <th>Tanggal SPPBJ</th>
                                                <th>Kota SPPBJ</th>
                                                <th>Nama PPK</th>
                                                <th>Nip PPK</th>
                                                <th>Jabatan PPK</th>
                                                <th>Nama Satuan PPK</th>
                                                <th>Alamat Satuan PPK</th>
                                                <th>Penyedia SPPBJ</th>
                                                <th>Jenis Paket</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>Kode Tender</th>
                                                <th>Nama Tender</th>
                                                <th>RUP</th>
                                                <th>Harga Penawaran</th>
                                                <th>No SPPBJ</th>
                                                <th>Lampiran SPPBJ</th>
                                                <th>Tanggal SPPBJ</th>
                                                <th>Kota SPPBJ</th>
                                                <th>Nama PPK</th>
                                                <th>Nip PPK</th>
                                                <th>Jabatan PPK</th>
                                                <th>Nama Satuan PPK</th>
                                                <th>Alamat Satuan PPK</th>
                                                <th>Penyedia SPPBJ</th>
                                                <th>Jenis Paket</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                           <?php 
                                           while($datasppbjs = mysqli_fetch_assoc($sppbj)){
                                           ?>
                                            <tr>
                                                <td><?php echo $datasppbjs['kode_tender']; ?></td>
                                                <td><?php echo $datasppbjs['nama_tender']; ?></td>
                                                <td><?php echo $datasppbjs['rup']; ?></td>
                                                <td><?php echo $datasppbjs['harga_penawaran']; ?></td>
                                                <td><?php echo $datasppbjs['no_sppbj']; ?></td>
                                                <td><?php echo $datasppbjs['lampiran_sppbj']; ?></td>
                                                <td><?php echo $datasppbjs['tanggal_sppbj']; ?></td>
                                                <td><?php echo $datasppbjs['kota_sppbj']; ?></td>
                                                <td><?php echo $datasppbjs['nama_ppk']; ?></td>
                                                <td><?php echo $datasppbjs['nip_ppk']; ?></td>
                                                <td><?php echo $datasppbjs['jabatan_ppk']; ?></td>
                                                <td><?php echo $datasppbjs['nama_satuan_kerja']; ?></td>
                                                <td><?php echo $datasppbjs['alamat_satuan_kerja']; ?></td>
                                                <td><?php echo $datasppbjs['penyedia']; ?></td>
                                                <td><?php echo $datasppbjs['jenis_paket']; ?></td>
                                            </tr>
                                           <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
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
    <script src="admin/js/sb-admin-2.min.js"></script>
  <!-- Page level plugins -->
  <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="admin/js/demo/datatables-demo.js"></script>
<script type="text/javascript">

    var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
        var yValues = [55, 49, 44, 24, 15];
        var barColors = [
        "#b91d47",
        "#00aba9",
        "#2b5797",
        "#e8c3b9",
        "#1e7145"
        ];


        new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
            display: true,
            text: "World Wide Wine Production 2018"
            }
        }
        });


</script>


</html>