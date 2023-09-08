
<div class="container-fluid">
    <h4> Tambah SPPBJ </h4>
    <hr>
    <form method="POST" action="./aksi.php?act=insert_tender">
        <div class="table-responsive">
            <h4 class="bg-primary text-light" style="padding: 10px">Informasi Paket</h4><hr>
            <table width="100%" border="1" cellspacing="0" cellpadding="4" class="table table-bordered">
                    <tr>
                        <td width="219">Kode Tender </td>
                        <td width="495"><input type="text" id="kode_tender" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Nama Tender </td>
                        <td><input type="text" id="nama_tender" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Rencana Pengadaan Umum </td>
                        <td><table width="100%" border="1" cellspacing="0" cellpadding="4">
                        <tr class="bg-info text-light">
                            <td width="20%">Kode Rup </td>
                            <td width="20%">Nama Paket </td>
                            <td width="20%">Sumber Dana </td>
                            <td width="20%">Detail</td>
                        </tr>
                        <tr>
                            <td> <input type="text" id="kode_rup" class="form-control"> </td>
                            <td> <input type="text" id="nama_paket" class="form-control"> </td>
                            <td> <input type="text" id="sumber_dana" class="form-control"> </td>
                            <td> <a href="?menu=detail"> Detail </a> </td>
                        </tr>
                        </table></td>
                    </tr>
                    <tr>
                        <td>Harga Penawaran </td>
                        <td> <input type="text" id="harga_penawaran" class="form-control"> </td>
                    </tr>
            </table>

            <!-- // ////////////////////// -->

            <h4 class="bg-primary text-light" style="padding: 10px"> Form SPPBJ </h4><hr>
                <table width="100%" border="1" cellspacing="0" cellpadding="4" class="table table-bordered">
                    <tr>
                        <td width="219">NO SPPBJ </td>
                        <td width="495"><input type="text" class="form-control" id="no_sppbj" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>Lampiran Sppbj </td>
                        <td><input type="text" class="form-control" id="lampiran_sppbj" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>Tanggal SPPBJ </td>
                        <td> <input type="date" class="form-control" id="tanggal_sppbj" placeholder=""> </td>
                    </tr>
                    <tr>
                        <td> Kota SPPBJ </td>
                        <td><input type="text" class="form-control" id="kota_sppbj" placeholder=""> </td>
                    </tr>
                </table>


                <h4 class="bg-primary text-light" style="padding: 10px"> Pihak Pertama </h4><hr>
                <table width="100%" border="1" cellspacing="0" cellpadding="4" class="table table-bordered">
                    <tr>
                        <td width="219">Nama PPK </td>
                        <td width="495"></td>
                    </tr>
                    <tr>
                        <td>NIP PPK </td>
                        <td> <input type="text" id="nip_ppk" class="form-control"> </td>
                    </tr>
                    <tr>
                        <td>Jabatan PPK </td>
                        <td> <input type="text" class="form-control" placeholder="" id="jabatan_ppk"> </td>
                    </tr>
                    <tr>
                        <td> Nama Satuan Kerja </td>
                        <td> <input type="text" id="harga_penawaran" class="form-control" id="nama_satuan_kerja"> </td>
                    </tr>
                    <tr>
                        <td> Alamat Satuan Kerja </td>
                        <td> <input type="text" id="harga_penawaran" class="form-control" id="alamat_satuan_kerja"> </td>
                    </tr>
                </table>

                <!-- // ////////////////////// -->

                <h4 class="bg-primary text-light" style="padding: 10px">Informasi Pendukung</h4><hr>
                    <table width="100%" border="1" cellspacing="0" cellpadding="4" class="table table-bordered">
                          
                            <tr>
                                <td>Penyedia </td>
                                <td><table width="100%" border="1" cellspacing="0" cellpadding="4">
                                <tr class="bg-info text-light">
                                    <td>#</td>
                                    <td >Pemenang </td>
                                    <td >Npwp </td>
                                    <td >Email </td>
                                    <td >Harga Final</td>
                                    <td >Undangan Kontrak</td>
                                </tr>
                                    <?php 
                                        $sql2 = mysqli_query($koneksi,"select * from penyedia where kode_tender = '".$_GET['id']."'"); 
                                            while($data2 = mysqli_fetch_assoc($sql2)){
                                    ?>
                                        <tr>
                                            <td> # </td>
                                            <td> <?php echo $data2['pemenang']; ?></td>
                                            <td> <?php echo $data2['npwp']; ?> </td>
                                            <td> <?php echo $data2['email']; ?> </td>
                                            <td> <?php echo $data2['harga_final']; ?> </td>
                                            <td> <a href= "#" > Undangan Kontrak </a></td>
                                        </tr>
                                    <?php } ?>
                                    
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>Tembusan </td>
                                <td>&nbsp;</td>
                            </tr>
                    </table>

                        <!-- // ////////////////////// -->

                    <h4 class="bg-primary text-light" style="padding: 10px"> Dokumen Berita Acara </h4><hr>
                        <table width="100%" border="1" cellspacing="0" cellpadding="4" class="table table-bordered">
                            <tr>
                                <td width="219">Dokumen Berita Acara </td>
                                <td width="495"> <input type="file" name="dokumen_berita"> </td>
                            </tr>
                        </table>

                <!-- // ////////////////////// -->

                <h4 class="bg-primary text-light" style="padding: 10px"> Dokument SPPBJ </h4><hr>
                        <table width="100%" border="1" cellspacing="0" cellpadding="4" class="table table-bordered">
                            <tr>
                                <td width="219">Dokumen Cetak </td>
                                <td width="495"> <input type="file" name="dokumen_cetak"> </td>
                            </tr>
                        </table>

                <!-- // ////////////////////// -->

        </div>
        <hr>
        <div class="row">
            <div class="col">
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Untuk menyimpan Data Ini ???')">Simpan</button> <a class="btn btn-primary" href="include/cetak_sppbj.php" target="_blank" >Cetak</a>
            </div>
        </div>
    </form>
    </div>




