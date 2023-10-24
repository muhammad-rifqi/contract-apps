<div class="row">
<!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tender</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $tender['harga_penawaran']; ?></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Non Tender</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $nontender['harga_penawaran']; ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCard1" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCard1">
                    <h6 class="m-0 font-weight-bold text-primary">List Tender</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show " id="collapseCard1">
                    <div class="card-body scroll">

                        <p> <a href="add-tender" class="btn btn-primary"> Tambah </a> </p>

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>No Tender</th>
                                    <th>Nama Tender</th>
                                    <th>Tahap</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>No Tender</th>
                                    <th>Nama Tender</th>
                                    <th>Tahap</th>
                                    <th>Aksi</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php 
                                $sql = mysqli_query($koneksi,"select * from tender");
                                while($data = mysqli_fetch_array($sql)){
                                ?>
                                <tr>
                                    <td><?php echo $data['kode_tender']; ?></td>
                                    <td><a href="edit-tender-<?php echo $data['id']; ?>"><?php echo $data['nama_tender']; ?></a></td>
                                    <td><?php echo $data['tahap_tender']; ?></td>
                                    <td><a href="add-sppbj-<?php echo $data['id']; ?>" class="btn btn-warning">EKontrak</a> | <a href="aksi.php?act=delete_tender&id=<?php echo $data['id'];?>" onclick="return confirm('Are You Sure ??')" class="btn btn-danger">Batal</a></td>
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