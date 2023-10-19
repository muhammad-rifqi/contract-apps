<div class="container-fluid">
    <h4> Tambah Pengadaan Darurat </h4>
    <hr>
    <form method="POST" action="./aksi.php?act=insert_pengadaan_darurat">
        <div class="row">
            <div class="col">
            <label for="validationTooltip01">Nama Paket</label>
            <input type="text" name="nama_paket" class="form-control" placeholder="Nama Paket">
            </div>
            <div class="col">
            <label for="validationTooltip01">Status</label>
            <input type="text" name="status" class="form-control" placeholder="Status">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
            <label for="validationTooltip01">Tanggal Di Buat</label>
            <input type="text" name="tanggal_dibuat" class="form-control" placeholder="Tanggal Di Buat" value="<?php echo date("Y-m-d")?>">
            </div>
            <div class="col">
            <label for="validationTooltip01">Satuan Kerja</label>
            <input type="text" name="satuan_kerja" class="form-control" placeholder="Satuan Kerja" value="">
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
