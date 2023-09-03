<div class="container-fluid">
    <h4> Tambah SPPBJ </h4>
    <hr>
    <form method="POST" action="./aksi.php?act=insert_tender">
        <div class="table-responsive">
            <h4 class="bg-primary text-light" style="padding: 10px">Informasi Paket</h4><hr>
            <table width="100%" border="1" cellspacing="0" cellpadding="4" class="table table-bordered">
                    <tr>
                        <td width="219">Kode Tender </td>
                        <td width="495">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Nama Tender </td>
                        <td>&nbsp;</td>
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
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        </table></td>
                    </tr>
                    <tr>
                        <td>Harga Penawaran </td>
                        <td>&nbsp;</td>
                    </tr>
            </table>

            <!-- // ////////////////////// -->

            <h4 class="bg-primary text-light" style="padding: 10px"> Form SPPBJ </h4><hr>
                <table width="100%" border="1" cellspacing="0" cellpadding="4" class="table table-bordered">
                    <tr>
                        <td width="219">NO SPPBJ </td>
                        <td width="495"><input type="text" class="form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>Lampiran Sppbj </td>
                        <td><input type="text" class="form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>Tanggal SPPBJ </td>
                        <td> <input type="date" class="form-control" placeholder=""> </td>
                    </tr>
                    <tr>
                        <td> Kota SPPBJ </td>
                        <td><input type="text" class="form-control" placeholder=""> </td>
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
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Jabatan PPK </td>
                        <td> <input type="text" class="form-control" placeholder=""> </td>
                    </tr>
                    <tr>
                        <td> Nama Satuan Kerja </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> Alamat Satuan Kerja </td>
                        <td>  </td>
                    </tr>
                </table>

                <!-- // ////////////////////// -->

                <h4 class="bg-primary text-light" style="padding: 10px">Informasi Pendukung</h4><hr>
                    <table width="100%" border="1" cellspacing="0" cellpadding="4" class="table table-bordered">
                          
                            <tr>
                                <td>Penyedia </td>
                                <td><table width="100%" border="1" cellspacing="0" cellpadding="4">
                                <tr class="bg-info text-light">
                                    <td width="20%">Pemenang </td>
                                    <td width="20%">Npwp </td>
                                    <td width="20%">Email </td>
                                    <td width="20%">Harga Final</td>
                                    <td width="20%">Undangan Kontrak</td>
                                </tr>
                                <tr >
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                </table></td>
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




