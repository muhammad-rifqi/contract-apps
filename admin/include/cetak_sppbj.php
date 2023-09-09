<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script> -->
<script>
    // const name = Date.now();
    // var pdfContent = document.querySelector("#pdf-content");
    // var optionArray = {
    // margin:       10,
    // filename:     name+'.pdf',
    // };
    // html2pdf().set(optionArray).from(pdfContent).save();
</script>

<?php
$sql = mysqli_query($koneksi,"select * from sppbj where no_sppbj = '".$_GET['id']."'");
$data = mysqli_fetch_array($sql);
print_r($data);
$peny = explode(",",$data['penyedia']);
print_r($peny);
?>

<!DOCTYPE html>

<head>
    <title>Kabupaten Musi Rawas Utara - Cetak</title>
    <meta charset="utf-8">
    <style>
        #judul {
            text-align: center;
        }
    </style>

</head>

<body>
    <h3 id=judul>SURAT PENUNJUKAN PENYEDIA BARANG/JASA (SPPBJ)</h3>
    <hr>
    <table width="800" border="0" cellspacing="0" cellpadding="5" align="center">
        <tr>
            <td width="190">Nomor</td>
            <td width="415">027/45/LPSE/2023</td>
            <td width="163">Denpasar <?php echo $data['tanggal_sppbj'];?> </td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>--</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <p>Kpd Yth :</p>
                <p><?php echo $peny[2]; ?></p>
                <p>Di Bangkalan Kab </p>
            </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td>Penunjukan Penyedia Barang / Jasa untuk pelaksanaan nur punya konsultan Perencanaan renovasi sistem
                proteksi kebakaran gedung LKPP </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3">
                <p>Dengan ini kami beritahukan bahwa penawaran Saudara nomor __________ tanggal __________ tentang
                    __________ dengan hasil negosiasi harga sebesar Rp__________ (__________) termasuk PPN, kami
                    nyatakan diterima/disetujui. </p>
                <p>Sebagai tindak lanjut dari Surat Penunjukan Penyedia Barang/Jasa (SPPBJ) ini Saudara diharuskan untuk
                    [menyerahkan Jaminan Pelaksanaan untuk nilai paket di atas Rp200.000.000,00 (dua ratus juta rupiah)]
                    dan menandatangani [Surat Perjanjian] paling lambat 14 (empat belas) hari kerja setelah
                    diterbitkannya SPPBJ. </p>
                <p>Kegagalan Saudara untuk menerima penunjukan ini, akan dikenakan sanksi sesuai ketentuan dalam
                    Peraturan Presiden No. 16 Tahun 2018 tentang Pengadaan Barang/Jasa Pemerintah.</p>
                <p>Satuan Kerja __________<br />
                    Pejabat Penandatangan Kontrak</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>PPK 26</p>
                <p>Kepala Bagian </p>
                <p>Nip : 00220026 </p>
            </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>


</body>
<script>window.print()</script>
</html>
