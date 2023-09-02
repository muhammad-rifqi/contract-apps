<div class="container-fluid">
    <h4> Tambah Obat </h4>
    <hr>
    <form method="POST" action="./aksi.php?act=insert_tender">
        <div class="row">
            <div class="col">
            <label for="validationTooltip01">Kode Tender</label>
            <input type="text" name="kode_tender" class="form-control" placeholder="Kode Tender">
            </div>
            <div class="col">
            <label for="validationTooltip01">Nama Tender</label>
            <input type="text" name="nama_tender" class="form-control" placeholder="Nama Tender">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
            <label for="validationTooltip01">Tahap Tender</label>
            <input type="text" name="tahap_tender" class="form-control" placeholder="Tahap Tender">
            </div>
            <div class="col">
            <label for="validationTooltip01">Tanggal Input</label>
            <input type="text" name="tanggal_input" class="form-control" placeholder="Tanggal Input" value="<?php echo date("Y-m-d")?>">
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
