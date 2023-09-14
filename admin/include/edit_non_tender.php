<?php $data = mysqli_fetch_array(mysqli_query($koneksi,"select * from non_tender where id = '".$_GET['id']."'")); ?>
<div class="container-fluid">
    <h4> Edit Tender </h4>
    <hr>
    <form method="POST" action="./aksi.php?act=update_non_tender">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <div class="row">
            <div class="col">
            <label for="validationTooltip01">Kode Tender</label>
            <input type="text" name="kode_tender" class="form-control" placeholder="Kode Tender" value="<?php echo $data['kode_tender']?>" disabled>
            </div>
            <div class="col">
            <label for="validationTooltip01">Nama Tender</label>
            <input type="text" name="nama_tender" class="form-control" placeholder="Nama Tender" value="<?php echo $data['nama_tender']?>" disabled>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
            <label for="validationTooltip01">Tahap Tender</label>
            <select name="tahap_tender" class="form-control" placeholder="Tahap Tender">
                <option value="belum_selesai">Belum Selesai</option>
                <option value="sedang_berjalan">Sedang Berjalan</option>
                <option value="sudah_selesai">Sudah Selesai</option>
            </select>
            </div>
            <div class="col">
            <label for="validationTooltip01">Tanggal Input</label>
            <input type="text" name="tanggal_input" class="form-control" placeholder="Tanggal Input" value="<?php echo $data['created_at']?>" disabled>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
