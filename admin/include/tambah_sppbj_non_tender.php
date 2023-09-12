
<div class="container-fluid">
    <h4> Tambah SPPBJ Non Tender</h4>
    <hr>
    <form method="POST" action="#" enctype="multipart/form-data">
        <div class="table-responsive">
            <h4 class="bg-primary text-light" style="padding: 10px">Informasi Paket</h4><hr>
            <table width="100%" border="1" cellspacing="0" cellpadding="4" class="table table-bordered">
                    <tr>
                        <td width="219">Kode Tender </td>
                        <td width="495"><input type="text" name="kode_tender" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Nama Tender </td>
                        <td><input type="text" name="nama_tender" class="form-control"></td>
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
                            <td>  </td>
                            <td>  </td>
                            <td>  </td>
                            <td>  </td>
                        </tr>
                        </table></td>
                    </tr>
                    <tr>
                        <td>Harga Penawaran </td>
                        <td> <input type="text" name="harga_penawaran" class="form-control"> </td>
                    </tr>
            </table>

            <!-- // ////////////////////// -->

            <h4 class="bg-primary text-light" style="padding: 10px"> Form SPPBJ </h4><hr>
                <table width="100%" border="1" cellspacing="0" cellpadding="4" class="table table-bordered">
                    <tr>
                        <td width="219">NO SPPBJ </td>
                        <td width="495"><input type="text" class="form-control" name="no_sppbj" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>Lampiran Sppbj </td>
                        <td><input type="text" class="form-control" name="lampiran_sppbj" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>Tanggal SPPBJ </td>
                        <td> <input type="date" class="form-control" name="tanggal_sppbj" placeholder=""> </td>
                    </tr>
                    <tr>
                        <td> Kota SPPBJ </td>
                        <td><input type="text" class="form-control" name="kota_sppbj" placeholder=""> </td>
                    </tr>
                </table>


                <h4 class="bg-primary text-light" style="padding: 10px"> Pihak Pertama </h4><hr>
                <table width="100%" border="1" cellspacing="0" cellpadding="4" class="table table-bordered">
                    <tr>
                        <td width="219">Nama PPK </td>
                        <td width="495"> <input type="text" name="nama_ppk" class="form-control"> </td>
                    </tr>
                    <tr>
                        <td>NIP PPK </td>
                        <td> <input type="text" name="nip_ppk" class="form-control"> </td>
                    </tr>
                    <tr>
                        <td>Jabatan PPK </td>
                        <td> <input type="text" class="form-control" placeholder="" name="jabatan_ppk"> </td>
                    </tr>
                    <tr>
                        <td> Nama Satuan Kerja </td>
                        <td> <input type="text"  class="form-control" name="nama_satuan_kerja"> </td>
                    </tr>
                    <tr>
                        <td> Alamat Satuan Kerja </td>
                        <td> <input type="text" class="form-control" name="alamat_satuan_kerja"> </td>
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
                                    
                                        <tr>
                                            <td> <input type="radio" name="penyedia" value=""> </td>
                                            <td>  </td>
                                            <td>  </td>
                                            <td>  </td>
                                            <td>  </td>
                                            <td> <a href= "#" > Undangan Kontrak </a></td>
                                        </tr>
                               
                                    
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>Tembusan </td>
                                <td> <input type="text" class="form-control" name="tembusan" placeholder=""> </td>
                            </tr>
                    </table>

                        <!-- // ////////////////////// -->

                    <h4 class="bg-primary text-light" style="padding: 10px"> Dokumen Berita Acara </h4><hr>
                        <table width="100%" border="1" cellspacing="0" cellpadding="4" class="table table-bordered">
                            <tr>
                                <td width="219">Dokumen Berita Acara </td>
                                <td width="495"> <input type="file" name="dokumen_berita_acara"> </td>
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
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Untuk menyimpan Data Ini ???')">Simpan</button>
            </div>
        </div>
    </form>
    </div>




