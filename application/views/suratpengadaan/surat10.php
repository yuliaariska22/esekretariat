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
p {
    font-size: 12spt;
}
table{
    font-size: 12pt;
    border-collapse: collapse;
}


.jarak-namaopd{
  margin:0px;
  padding:0px;
}

h1{
    text-transform: uppercase;
}
</style>
<?php
$tanggal = date("d-m-Y", strtotime($pengadaan->tanggal_bapembayaran));
$tanggal2 = date("d-m-Y", strtotime($pengadaan->tanggal_suratpermohonanpenyedia));


$hari = date("l", strtotime($tanggal));
$hari2 = date("l", strtotime($tanggal2));
$hari_indonesia = array('Monday'  => 'senin',
'Tuesday'  => 'selasa',
'Wednesday' => 'rabu',
'Thursday' => 'kamis',
'Friday' => 'jumat',
'Saturday' => 'sabtu',
'Sunday' => 'minggu');
$hari = $hari_indonesia[$hari];
$hari2 = $hari_indonesia[$hari2];


$bulanhuruf = date("m", strtotime($tanggal)); 
$bulanhuruf2 = date("m", strtotime($tanggal2)); 
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

$tanggalhuruf = date("d", strtotime($tanggal)); 
$tanggalhuruf2 = date("d", strtotime($tanggal2)); 
$tanggalsurat = date("d", strtotime($tanggal));  
$tanggalsurat2 = date("d", strtotime($tanggal2)); 
$tahunsurat = date("Y", strtotime($tanggal)); 
$tahunsurat2 = date("Y", strtotime($tanggal2)); 
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

$tgl = date("d", strtotime($tanggal)); 
$tgl2 = date("d", strtotime($tanggal2)); 

$bulanhuruf = date("m", strtotime($tanggal)); 
$bulanhuruf2 = date("m", strtotime($tanggal2)); 
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

$tahun = date("y", strtotime($tanggal));
$tahun2 = date("y", strtotime($tanggal2));
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

//------------------------
?>
<?php
                    $no = 1 ;
                    $total = 0;
                    $totalharga = 0;
                    
                    $jumlahpajak = 0;
                    $ppn = 0;
                    $pphpasal22 = 0;
                    $pphpasal23 = 0;
                    $pasal4ayat2 = 0;
                    $pajakdaerah = 0;

                    
                    $jumlahpotpajak = 0;
                    $potppn = 0;
                    $potpphpasal22 = 0;
                    $potpphpasal23 = 0;
                    $potpasal4ayat2 = 0;
                    $potpajakdaerah = 0;
                    foreach ($detailpengadaan as $item)
                    {
                        $total += $item->total_barang_in*$item->hargasatuanrekanan;
                        $totalharga += ($item->total_barang_in*$item->hargasatuanrekanan);
                    ?>
                    <?php
                            $no++;
                    }
?> 
<?php
                    $noa = 1 ;
                    $totala = 0;
                    foreach ($detailpengadaan as $itema)
                    {
                        $totala += $itema->total_barang_in*$itema->hargasatuanrekanan;
?>
<?php
                            $noa++;
                    }
?>

<?php
$ppn = $pengadaan->ppn*$totalharga/100;
$pphpasal22 = $pengadaan->pphpasal22*$totalharga/100;
$pphpasal23 = $pengadaan->pphpasal23*$totalharga/100;
$pasal4ayat2 = $pengadaan->pasal4ayat2*$totalharga/100;
$pajakdaerah = $pengadaan->pajakdaerah*$totalharga/100;
$jumlahpajak = $ppn+$pphpasal22+$pphpasal23+$pasal4ayat2+$pajakdaerah;

$potppn = $pengadaan->potpphpasal22*$totalharga/100;
$potpphpasal22 = $pengadaan->potpphpasal22*$totalharga/100;
$potpphpasal23 = $pengadaan->potpphpasal23*$totalharga/100;
$potpasal4ayat2 = $pengadaan->potpasal4ayat2*$totalharga/100;
$potpajakdaerah = $pengadaan->potpajakdaerah*$totalharga/100;
$jumlahpotpajak = $potppn+$potpphpasal22+$potpphpasal23+$potpasal4ayat2+$potpajakdaerah;
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
$angka = ceil($totalharga+$jumlahpajak);
?>

<table align="center">
<tr>
<td>
<img src="<?php echo base_url('theme/logopadsim.jpg')?>" width="100px">
<td>
<td>
<h3 class="jarak-lh" align="center">PEMERINTAH KOTA PADANGSIDIMPUAN</h3>
<h1 class="jarak-namaopd" align="center"><?= $pengadaan->nama_opd ?></h1>
<p class="jarak-lh" align="center"><?= $pengadaan->alamat_kop_opd ?></p>
<p class="jarak-lh" align="center"><?= $pengadaan->kecamatan_opd ?></p>
<td>
</tr>
<tr>
<td colspan=3>
<hr  color="black" size="2px"/>
</td>
</tr>
</table>
</head>

<body>
<p class="jarak-lh" align="center"><b>BERITA ACARA PEMBAYARAN </b></p>
<p class="jarak-lh" align="center"><b>Nomor : <?= $pengadaan->no_bapembayaran?></b> </p>
 <p> &nbsp &nbsp Pada hari <?= $hari?> ini tanggal <?= $tanggalhuruf?> bulan <?= strtolower ($bulannama);?> tahun <?= $tahunhuruf?>, kami masing-masing yang bertandatangan di bawah ini :  </p>

 <table>
<tr><p><td>&nbsp &nbsp 1.   Nama</td>	<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp&nbsp:</td> <td> <?= $pejabatpembuatkomitmen->nama ?> </td></p></tr>
<tr><p><td>&nbsp &nbsp &nbsp    &nbsp Jabatan</td>	<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp:</td><td>PPK pada <?= $pengadaan->nama_opd ?></td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Alamat</td>	<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp:</td><td><?= $pengadaan->nama_opd ?> Kota Padangsidimpuan</td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp </td>	<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp</td><td>Selanjutnya disebut sebagai Pejabat Penandatangan Kontrak; </td></p></tr>

</table>
<table>
<tr><p><td>&nbsp &nbsp 2.   Nama</td>	<td>:</td> <td><?= $pengadaan->nama_pimpinan ?></td></p></tr>
<tr><p><td>&nbsp &nbsp &nbsp    &nbsp Perusahaan</td>	<td>:</td><td><?= $pengadaan->nama_rekanan ?></td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Alamat</td>	<td>:</td><td><?= $pengadaan->alamat_rekanan ?></td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Nama Kegiatan</td>	<td>:</td><td>Pengadaan <?= $pengadaan->namakegiatan ?></td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Nama Pekerjaan </td>	<td>:</td><td>Pengadaan <?= $pengadaan->namakegiatan ?></td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Sumber Dana </td>	<td>:</td><td>APBD</td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Nilai Pekerjaan  </td>	<td>:</td><td><?= 'Rp. '.number_format($totalharga+$jumlahpajak,0,'.','.').',-'; ?> (<?php echo terbilang($totalharga+$jumlahpajak); ?> rupiah)</td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Pelaksana  </td>	<td>:</td><td><?= $pengadaan->nama_rekanan ?></td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Alamat  </td>	<td>:</td><td><?= $pengadaan->alamat_rekanan ?></td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp NPWP  </td>	<td>:</td><td><?= $pengadaan->npwp_rekanan ?></td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Nomor Rekening  </td>	<td>:</td><td><?= $pengadaan->rekening_rekanan ?></td></td></p></tr>

</table>
<p align="justify"> &nbsp &nbsp Dinyatakan bahwa prestasi pekerjaan telah mencapai 100% (seratus persen) atas penagihan sebesar <?= 'Rp. '.number_format($totalharga+$jumlahpajak,0,'.','.').',-'; ?> (<?php echo terbilang($angka); ?> rupiah) sesuai dengan Surat Perintah Kerja(SPK) / Surat Perintah Pengiriman (SPP)** dari Pejabat Pembuat Komitmen pada <td><?= $pengadaan->nama_opd ?></td>. Kota Padangsidimpuan kepada <td><?= $pengadaan->nama_rekanan ?></td>, maka PIHAK KEDUA berhak menerima pembayaran dari PIHAK PERTAMA dengan uraian sebagai berikut :  </p>

<table>
<tr><p><td>&nbsp &nbsp &nbsp &nbsp   Nilai Pembayaran</td>	<td>:</td> <td><?= 'Rp. '.number_format($totalharga+$jumlahpajak,0,'.','.').',-'; ?></td></p></tr>
<tr><p><td>&nbsp &nbsp &nbsp    &nbsp Potongan Pajak</td>	</p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp a. PPN</td>	<td>:</td><td><?= 'Rp. '.number_format($potppn,0,'.','.'); ?></td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp b. PPh Pasal 22 </td>	<td>:</td><td><?= 'Rp. '.number_format($potpphpasal22,0,'.','.'); ?></td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp c. PPh Pasal 23 </td>	<td>:</td><td><?= 'Rp. '.number_format($potpphpasal23,0,'.','.'); ?></td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp d. Pasal 4 ayat 2 </td>	<td>:</td><td><?= 'Rp. '.number_format($potpasal4ayat2,0,'.','.'); ?></td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp e. Pajak daerah  </td>	<td>:</td><td><?= 'Rp. '.number_format($potpajakdaerah,0,'.','.'); ?></td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Jumlah Potongan  </td>	<td>:</td><td><?= 'Rp. '.number_format($jumlahpotpajak,0,'.','.'); ?></td></p></tr>
<tr><p><td>&nbsp &nbsp  &nbsp   &nbsp Pembayaran setelah di potong PPN dan PPh </td>	<td>:</td><td><?= 'Rp. '.number_format($totalharga+$jumlahpajak-$jumlahpotpajak,0,'.','.').',-'; ?></td></p></tr>
</body>

<div style="page-break-inside:avoid;">
    <table>
<footer>
<table  align="left">
<tr height="10px"></tr>
<tr><td>PIHAK KEDUA</td></tr>
<tr><td><?= $pengadaan->nama_rekanan ?></td></td></tr>
<tr height="60px"></tr><td><?= $pengadaan->nama_pimpinan ?></td></tr>
<tr><td><b>Direktur</b></td></tr>
</table>
    
<table  align="right">
<tr height="10px"></tr>
<tr><td>PIHAK PERTAMA</td></tr>
<tr><td>Pejabat Pembuat Komitmen</td></tr>
<tr height="60px"></tr><td>(<?= $pejabatpembuatkomitmen->nama ?>)</td></tr>
<tr><td><b>NIP. <?= $pejabatpembuatkomitmen->nip ?></b></td></tr>
</table>

<br><br><br><br><br><br><br><br>
<table align="center">
<tr><td align="center"><b>Mengetahui</b></td></tr>
<tr><td align="center"><b>Pengguna Anggaran</b></td></tr>
<tr height="60px"></tr><td align="center">&nbsp &nbsp (<?= $penggunaanggaran->nama ?>)</td></tr>
<tr><td align="center"><b>&nbsp &nbspNIP. <?= $penggunaanggaran->nip ?></b></td></tr>
</table>   
</footer>
</table>
</div>