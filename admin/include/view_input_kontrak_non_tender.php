<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCard1" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCard1">
                    <h6 class="m-0 font-weight-bold text-primary">View Kontrak Non Tender</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show " id="collapseCard1">
                    <div class="card-body scroll">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>No Tender</th>
                                    <th>Nama Tender</th>
                                    <th>Lingkup Kerjaan</th>
                                    <th>No Surat</th>
                                    <th>Tanggal Surat</th>
                                    <th>Kota Surat</th>
                                    <th> Aksi </th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>No Tender</th>
                                    <th>Nama Tender</th>
                                    <th>Lingkup Kerjaan</th>
                                    <th>No Surat</th>
                                    <th>Tanggal Surat</th>
                                    <th>Kota Surat</th>
                                    <th> Aksi </th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php 
                                $sql = mysqli_query($koneksi,"select * from kontrak_non_tender");
                                while($data = mysqli_fetch_array($sql)){
                                ?>
                                <tr>
                                    <td><?php echo $data['no_tender']; ?></td>
                                    <td><?php echo $data['nama_tender']; ?></a></td>
                                    <td><?php echo $data['lingkup_kerjaan']; ?></td>
                                    <td><?php echo $data['no_surat']; ?></td>
                                    <td><?php echo $data['tgl_surat']; ?></td>
                                    <td><?php echo $data['kota_surat']; ?></td>
                                    <td> <a class="btn btn-primary" href="../admin/surat_perjanjian_listrik_danau_rayo.php" target="_blank" >Cetak</a> </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>