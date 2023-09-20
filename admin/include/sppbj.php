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

                        <p> <a href="tambah-sppbj-<?php echo $_GET['id'];?>" class="btn btn-primary"> Tambah </a> </p>

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
                                    <th>SPMK/SPP </th>
                                    <th>Pembayaran</th>
                                    <th>Status</th>
                                    <th>Penilaian</th>
                                    <th> Aksi </th>
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
                                    <th>SPMK/SPP </th>
                                    <th>Pembayaran</th>
                                    <th>Status</th>
                                    <th>Penilaian</th>
                                    <th> Aksi </th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php 
                                $sql = mysqli_query($koneksi,"select * from sppbj where jenis_paket = 'tender'");
                                while($data = mysqli_fetch_array($sql)){
                                $peny = explode(",",$data['penyedia']);
                                ?>
                                <tr>
                                    <td><?php echo $data['no_sppbj']; ?></td>
                                    <td><?php echo $data['tanggal_sppbj']; ?></a></td>
                                    <td><?php echo $peny[2]; ?></td>
                                    <td><a href="#" class="btn btn-secondary">Kontrak</a></td>
                                    <td><?php echo $peny[1]; ?></td>
                                    <td><a href="#" class="btn btn-secondary">SSKK</a></td>
                                    <td><a href="#" class="btn btn-secondary">SPMK/SPP</a></td>
                                    <td><a href="#" class="btn btn-secondary">Pembayaran</a></td>
                                    <td><a href="#" class="btn btn-secondary">Pilih</a></td>
                                    <td><?php echo $data['penilaian']; ?></td>
                                    <td> <a class="btn btn-primary" href="include/cetak_sppbj.php?id=<?php echo $data['no_sppbj']; ?>" target="_blank" >Cetak</a> </td>
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