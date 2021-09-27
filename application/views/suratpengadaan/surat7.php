<html>
<head>
<style>
@media print 
{
   @page 

   {
    size: 8.27in 12.99in;
  }
}
.jarak-lh{
  line-height:10px;
}

.jarak-namaopd{
  margin:0px;
  padding:0px;
}
p {
    font-size: 12spt;
}
h1{
    text-transform: uppercase;
}
table{
    font-size: 12pt;
    border-collapse: collapse;
}
.hurufkapital{
    text-transform: uppercase;
}
.outline{
    outline-style: double;
    }
.kapital{
    text-transform: uppercase;
}
.kotak2 {
    border-style: solid;
  width: auto;
  height: auto;
  float:left;
  -ms-transform: skewX(-20deg); /* Support untuk IE 9 */
  -webkit-transform: skewX(-20deg); /* support untuk Safari */
  transform: skewX(-20deg); /* default syntax */
}
</style>

<?php
$tanggal = date("d-m-Y", strtotime($pengadaan->tanggal_kwitansi));
$tanggal2 = date("d-m-Y", strtotime($pengadaan->tanggal_suratperintahpengiriman));
$tanggal3 = date("d-m-Y", strtotime($pengadaan->tanggal_bapenyedia));


$hari = date("l", strtotime($tanggal));
$hari2 = date("l", strtotime($tanggal2));
$hari3 = date("l", strtotime($tanggal3));
$hari_indonesia = array('Monday'  => 'senin',
'Tuesday'  => 'selasa',
'Wednesday' => 'rabu',
'Thursday' => 'kamis',
'Friday' => 'jumat',
'Saturday' => 'sabtu',
'Sunday' => 'minggu');
$hari = $hari_indonesia[$hari];
$hari2 = $hari_indonesia[$hari2];
$hari3 = $hari_indonesia[$hari3];


$bulanhuruf = date("m", strtotime($tanggal)); 
$bulanhuruf2 = date("m", strtotime($tanggal2)); 
$bulanhuruf3 = date("m", strtotime($tanggal3)); 
$bulanhuruf_indonesia = array(
'01'  => 'satu',
'02'  => 'dua',
'03' => 'tiga',
'04' => 'empat',
'05' => 'lima',
'06' => 'enam',
'07' => 'tujuh',
'08' => 'delapan',
'09' => 'sembilan',
'10' => 'sepuluh',
'11' => 'sebelas',
'12' => 'dua belas');
$bulanhuruf = $bulanhuruf_indonesia[$bulanhuruf];
$bulanhuruf2 = $bulanhuruf_indonesia[$bulanhuruf2];
$bulanhuruf3 = $bulanhuruf_indonesia[$bulanhuruf3];
$bulannama_indonesia = array(
    'satu'  => 'Januari',
    'dua'  => 'Februari',
    'tiga' => 'Maret',
    'empat' => 'April',
    'lima' => 'Mei',
    'enam' => 'Juni',
    'tujuh' => 'Juli',
    'delapan' => 'Agustus',
    'sembilan' => 'September',
    'sepuluh' => 'Oktober',
    'sebelas' => 'November',
    'dua belas' => 'Desember');
$bulannama = $bulannama_indonesia[$bulanhuruf];
$bulannama2 = $bulannama_indonesia[$bulanhuruf2];
$bulannama3 = $bulannama_indonesia[$bulanhuruf3];

$tanggalhuruf = date("d", strtotime($tanggal)); 
$tanggalhuruf2 = date("d", strtotime($tanggal2));
$tanggalhuruf3 = date("d", strtotime($tanggal3)); 
$tanggalsurat = date("d", strtotime($tanggal));  
$tanggalsurat2 = date("d", strtotime($tanggal2));
$tanggalsurat3 = date("d", strtotime($tanggal3));  
$tahunsurat = date("Y", strtotime($tanggal)); 
$tahunsurat2 = date("Y", strtotime($tanggal2)); 
$tahunsurat3 = date("Y", strtotime($tanggal3)); 
$tanggalhuruf_indonesia = array(
'01'  => 'satu',
'02'  => 'dua',
'03' => 'tiga',
'04' => 'empat',
'05' => 'lima',
'06' => 'enam',
'07' => 'tujuh',
'08' => 'delapan',
'09' => 'sembilan',
'10' => 'sepuluh',
'11' => 'sebelas',
'12' => 'dua belas',
'13' => 'tiga belas',
'14' => 'empat belas',
'15' => 'lima belas',
'16' => 'enam belas',
'17' => 'tujuh belas',
'18' => 'delapan belas',
'19' => 'sembilan belas',
'20' => 'dua puluh',
'21' => 'dua puluh satu',
'22' => 'dua puluh dua',
'23' => 'dua puluh tiga',
'24' => 'dua puluh empat',
'25' => 'dua puluh lima',
'26' => 'dua puluh enam',
'27' => 'dua puluh tujuh',
'28' => 'dua puluh delapan',
'29' => 'dua puluh sembilan',
'30' => 'tiga puluh',
'31' => 'tiga puluh satu');
$tanggalhuruf = $tanggalhuruf_indonesia[$tanggalhuruf];
$tanggalhuruf2 = $tanggalhuruf_indonesia[$tanggalhuruf2];
$tanggalhuruf3 = $tanggalhuruf_indonesia[$tanggalhuruf3];

$tgl = date("d", strtotime($tanggal)); 
$tgl2 = date("d", strtotime($tanggal2)); 
$tgl3 = date("d", strtotime($tanggal3)); 

$bulanhuruf = date("m", strtotime($tanggal)); 
$bulanhuruf2 = date("m", strtotime($tanggal2));
$bulanhuruf3 = date("m", strtotime($tanggal3)); 
$bulanhuruf_indonesia = array(
'01'  => 'satu',
'02'  => 'dua',
'03' => 'tiga',
'04' => 'empat',
'05' => 'lima',
'06' => 'enam',
'07' => 'tujuh',
'08' => 'delapan',
'09' => 'sembilan',
'10' => 'sepuluh',
'11' => 'sebelas',
'12' => 'dua belas');
$bulanhuruf = $bulanhuruf_indonesia[$bulanhuruf];
$bulanhuruf2 = $bulanhuruf_indonesia[$bulanhuruf2];
$bulanhuruf3 = $bulanhuruf_indonesia[$bulanhuruf3];
$bulannama_indonesia = array(
    'satu'  => 'Januari',
    'dua'  => 'Februari',
    'tiga' => 'Maret',
    'empat' => 'April',
    'lima' => 'Mei',
    'enam' => 'Juni',
    'tujuh' => 'Juli',
    'delapan' => 'Agustus',
    'sembilan' => 'September',
    'sepuluh' => 'Oktober',
    'sebelas' => 'November',
    'dua belas' => 'Desember');
$bulannama = $bulannama_indonesia[$bulanhuruf];
$bulannama2 = $bulannama_indonesia[$bulanhuruf2];
$bulannama3 = $bulannama_indonesia[$bulanhuruf3];

$tahun = date("y", strtotime($tanggal));
$tahun2 = date("y", strtotime($tanggal2));
$tahun3 = date("y", strtotime($tanggal3));
$tahun_indonesia = array(
'20'  => 'dua ribu dua puluh',
'21'  => 'dua ribu dua puluh satu',
'22' => 'dua ribu dua puluh dua',
'23' => 'dua ribu dua puluh tiga',
'24' => 'dua ribu dua puluh empat',
'25' => 'dua ribu dua puluh lima',
'26' => 'dua ribu dia puluh enam');
$tahunhuruf = $tahun_indonesia[$tahun];
$tahunhuruf2 = $tahun_indonesia[$tahun2];
$tahunhuruf3 = $tahun_indonesia[$tahun3];

//------------------------
?>
<table align="center" style="width:100%">
<?php
                    $no = 1 ;
                    $total = 0;
                    $totalharga = 0;
                    foreach ($detailpengadaan as $item)
                    {
                        $total += $item->total_barang_in*$item->hargasatuanrekanan;
                        $totalharga += ($item->total_barang_in*$item->hargasatuanrekanan)+($item->total_barang_in*$item->hargasatuanrekanan*0.1);
                    ?>
                    <?php
                            $no++;
                    }
?>  
<?php

function penyebut($nilai) {
$nilai = abs($nilai);
$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
$temp = "";
if ($nilai < 12) {
    $temp = " ". $huruf[$nilai];
} else if ($nilai <20) {
    $temp = penyebut($nilai-10). "  belas";
} else if ($nilai <100) {
    $temp = penyebut($nilai/10). "  puluh". penyebut($nilai % 10);
} else if ($nilai <200) {
    $temp = " seratus" . penyebut($nilai - 100);
} else if ($nilai <1000) {
    $temp = penyebut($nilai/100). "  ratus". penyebut($nilai % 100);
} else if ($nilai <2000) {
    $temp = " seribu" . penyebut($nilai - 1000);
} else if ($nilai <1000000) {
    $temp = penyebut($nilai/1000). "  ribu". penyebut($nilai % 1000);
} else if ($nilai <1000000000) {
    $temp = penyebut($nilai/1000000). "  juta". penyebut($nilai % 1000000);
} else if ($nilai <1000000000000) {
    $temp = penyebut($nilai/1000000000). "  miliar". penyebut(fmod($nilai % 1000000000));
} else if ($nilai <1000000000000000) {
    $temp = penyebut($nilai/1000000000000). "  triliun". penyebut(fmod($nilai % 1000000000000));
}
return $temp;
}

function terbilang($nilai) {
    if ($nilai<0) {
        $hasil = "minus ". trim(penyebut($nilai));
    } else {
        $hasil = trim(penyebut($nilai));
    } return $hasil;
}
$angka = ceil($total);
$angka = round($angka,-3);
?>
<tr>
<td>
<b>KWITANSI (TANDA PEMBAYARAN)</b>
</td>
<td style="width:30%">
    <table class="outline">
        <tr><td>Tanggal</td> <td>:</td><td><?= $tgl?> <?= $bulannama?> 20<?= $tahun?> </td></tr>
        <tr><td>Nomor</td> <td>:</td> <td><?= $pengadaan->no_kwitansi ?></td></tr>
        <tr><td>Kode Kegiatan</td> <td>:</td> <td><?= $pengadaan->kode_kegiatan ?></td></tr>
        <tr><td>Kode Belanja</td> <td>:</td> <td><?= $pengadaan->kode_rekening ?></td></tr>
    </table>
</td>
</tr>
</table>
</head>

<body>


<p class="kapital">SUDAH TERIMA DARI : BENDAHARA PENGELUARAN <?= $pengadaan->nama_opd?> KOTA PADANGSIDIMPUAN</p>



<table align="center" style="width:100%">
<tr>
    <td style="width:25%">Uang Sebanyak</td>
    <td style=""><div class="kotak2"> 
    &nbsp;<?php echo terbilang($total); ?> rupiah &nbsp;        
    </div>
</td>
</tr>
<tr>
    <td><?= 'Rp. '.number_format($total,0,'.','.').',-'; ?></td>
    <td></td>
</tr>
<tr>
    <td>Yaitu Untuk</td>
    <td>Pembayaran Biaya Belanja Pengadaan pada <?= $pengadaan->nama_opd?> Kota Padangsidimpuan untuk bulan <?= $bulannama2?> Tahun 20<?= $tahun2?> Sesuai dengan Surat Perintah Pengiriman Nomor <?= $pengadaan->no_suratperintahpengiriman?> tanggal <?= $tgl2?> <?= $bulannama2?> 20<?= $tahun2?> dan Berita Acara Penerimaan Barang Nomor : <?= $pengadaan->no_bapenyedia ?> tanggal <?= $tgl3?> <?= $bulannama3?> 20<?= $tahun3?>, Dokumen Terlampir </td>
</tr>
</table>
<tr><hr  color="black" size="2px"/></tr>

<div style="page-break-inside:avoid;">
<table align="center" width="100%">
<tr>
    <td width="30%"></td>
    <td width="30%"></td>
    <td >Padangsidimpuan, <?= $tgl?> <?= $bulannama?> 20<?= $tahun?></td>
</tr>
<tr><td>
<br>
</td></tr>
<tr>
    <td width="30%">Mengetahui</td>
    <td width="30%">Dibayar Oleh</td>
    <td width="40%">Penerima</td>
</tr>
<tr>
    <td>PPTK</td>
    <td>Bendahara</td>
    <td></td>
</tr>
<tr height="75px"></tr>
<tr>
    <td><?= $pengadaan->nama ?></td>
    <td><?= $bendahara->nama ?></td>    
    <td><?= $pengadaan->nama_pimpinan ?></td>
    <td></td>
</tr>

<tr>
    <td><?= $pengadaan->jabatan ?></td>
    <td><?= $bendahara->jabatan_sk ?></td> 
    <td>Direktur</td>
    <td></td>
</tr>

<tr>
    <td>NIP. <?= $pengadaan->username ?></td>
    <td>NIP. <?= $bendahara->nip ?></td>    
</tr>

<tr><td>
<br><br>
</td></tr>
<tr>
    <td width="35%"></td>
    <td >Disetujui</td>
    <td width="35%"></td>
</tr>
<tr>
    <td width="35%"></td>
    <td >Pengguna Anggaran</td>
    <td width="35%"></td>
</tr>
<tr height="75px"></tr>
<tr>
    <td width="35%"></td>
    <td ><?= $penggunaanggaran->nama ?></td>
    <td width="35%"></td>
</tr>

<tr>
    <td width="35%"></td>
    <td ><?= $penggunaanggaran->jabatan_sk ?></td>
    <td width="35%"></td>
</tr>

<tr>

    <td width="35%"></td>
    <td >NIP. <?= $penggunaanggaran->nip ?></td>
    <td width="35%"></td>
</tr>

</table>
<p>*untuk belanja di atas 5 juta</p>
</footer>
</div>

</html>









   
