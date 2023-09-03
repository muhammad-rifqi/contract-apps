<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCard1" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCard1">
                    <h6 class="m-0 font-weight-bold text-primary">List SPPBJ</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show " id="collapseCard1">
                    <div class="card-body scroll">

                        <p> <a href="?menu=tambah_sppbj&id=<?php echo $_GET['id'];?>" class="btn btn-primary"> Tambah </a> </p>

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>No Sppbj</th>
                                    <th>Tanggal</th>
                                    <th>Penyedia</th>
                                    <th>Surat Perjanjian</th>
                                    <th>Harga Kontrak</th>
                                    <th>SSKK</th>
                                    <th>SPMK/SPP Pembayaran</th>
                                    <th>Status</th>
                                    <th>Penilaian</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>No Sppbj</th>
                                    <th>Tanggal</th>
                                    <th>Penyedia</th>
                                    <th>Surat Perjanjian</th>
                                    <th>Harga Kontrak</th>
                                    <th>SSKK</th>
                                    <th>SPMK/SPP Pembayaran</th>
                                    <th>Status</th>
                                    <th>Penilaian</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php 
                                $sql = mysqli_query($koneksi,"select * from sppbj");
                                while($data = mysqli_fetch_array($sql)){
                                ?>
                                <tr>
                                    <td><?php echo $data['no_sppbj']; ?></td>
                                    <td><?php echo $data['tanggal']; ?></a></td>
                                    <td><?php echo $data['penyedia']; ?></td>
                                    <td><?php echo $data['surat_perjanjian']; ?></td>
                                    <td><?php echo $data['harga_kontrak']; ?></td>
                                    <td><?php echo $data['sskk']; ?></td>
                                    <td><?php echo $data['pembayaran']; ?></td>
                                    <td><?php echo $data['status']; ?></td>
                                    <td><?php echo $data['penilaian']; ?></td>
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