<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCard1" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCard1">
                    <h6 class="m-0 font-weight-bold text-primary">List Pembayaran</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show " id="collapseCard1">
                    <div class="card-body scroll">

                        <p> <a href="input-termin-tender" class="btn btn-primary"> Tambah </a> </p>

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Termin</th>
                                    <th>Berita Acara</th>
                                    <th>Progress</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                <th>No</th>
                                    <th>Termin</th>
                                    <th>Berita Acara</th>
                                    <th>Progress</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php 
                                $sql = mysqli_query($koneksi,"select * from pembayaran where flag = 'tender'");
                                while($data = mysqli_fetch_array($sql)){
                                ?>
                                 <tr>
                                    <td><?php echo $data['id']; ?></td>
                                    <td><?php echo $data['termin']; ?></td>
                                    <td><?php echo $data['berita_acara']; ?></td>
                                    <td><?php echo $data['progress']; ?></td>
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