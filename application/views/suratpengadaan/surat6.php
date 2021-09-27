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
table{
    font-size: 12pt;
    border-collapse: collapse;
}
h1{
    text-transform: uppercase;
}
</style>
<?php
$tanggal = date("d-m-Y", strtotime($pengadaan->tanggal_bappk));
$tanggal2 = date("d-m-Y", strtotime($pengadaan->tanggal_suratperintahpengiriman));


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
<p class="jarak-lh" align="center"><u>BERITA ACARA SERAH TERIMA BARANG</u></p>
<p class="jarak-lh" align="center">Nomor : <?= $pengadaan->no_bappk ?> </p>
<br>
 <p align="justify"> Pada hari ini <?= $hari ?> tanggal <?= $tanggalhuruf?> bulan <?= strtolower ($bulannama);?> tahun <?= $tahunhuruf ?>, kami yang bertandatangan di bawah ini :   </p>

 <table>
<tr><p><td>&nbsp &nbsp &nbspNama</td>	<td>:</td> <td><?= $pejabatpembuatkomitmen->nama?></td></p></tr>
<tr><p><td>&nbsp &nbsp &nbspJabatan</td>	<td>:</td> <td> Pejabat Pembuat Komitmen </td></p></tr>
</table>
<p class="jarak-lh"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Selaku Pejabat Pembuat Komitmen (PPK)  </p>
<table>
<tr><p><td>&nbsp &nbsp &nbspNama</td>	<td>:</td> <td><?= $penggunaanggaran->nama?></td></p></tr>
<tr><p><td>&nbsp &nbsp &nbspJabatan</td>	<td>:</td><td> Pengguna Anggaran</td></p></tr>
</table>
<p class="jarak-lh"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Selaku Pengguna Anggaran (PA)  </p>
<p align="justify">Sesuai dengan Surat Perintah Pengiriman (SPP) / Surat Perintah Kerja (SPK) / Surat Perjanjian (SP) Nomor : <?= $pengadaan->no_suratperintahpengiriman?> Tanggal <?=$tgl2?> <?= $bulannama2?> 20<?= $tahun2?> telah menerima barang yang diserahkan oleh rekanan <?= $pengadaan->nama_rekanan?> dalam keadaan baik dan cukup sebagaimana tersebut dibawah ini :  </p>

<table border="1" align="center">
                    <tr>
                        <th>No</th>
                        <th>Uraian/Nama Barang</th>
                        <th>Banyaknya</th> 
                        <th>Satuan</th> 
                        <th>Keterangan</th> 
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1 ;
                    $total = 0;
                    foreach ($detailpengadaan as $item)
                    {
                        $total += $item->total_barang_in*$item->Hargasatuan_ssh;
                    ?>
                    <tr>
                        <td align="center"><?= $no;?></td>
                        <td><?= $item->Namabarang_ssh;?></td>
                        <td align="center"><?= $item->total_barang_in;?></td>
                        <td align="center"><?= $item->Satuan_ssh;?></td>
                        <td align="center"><?= $item->Spesifikasi_ssh;?></td>
                        
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>  
                </tbody>
            </table>
<p> Demikian Berita Acara ini dibuat untuk dapat dipergunakan sebagaimana mestinya.   </p>                      

</body>

<div style="page-break-inside:avoid;">
<footer>
<table  align="right">
<tr><td>Padangsidimpuan, <?=$tgl?> <?= $bulannama?> 20<?= $tahun?> </td></tr>
</table>
<br><br>
<table  align="left">
<tr><td>Yang Menyerahkan </td></tr>
<tr><td>Pejabat Pembuat Komitmen </td></tr>
<tr height="75px"></tr><td><u><?= $pejabatpembuatkomitmen->nama?></u></td></tr>
<tr><td></td></tr></table>
    
    <table  align="right">
<tr><td>Diterima </td></tr>
<tr><td> Pengguna Anggaran </td></tr>
<tr height="75px"></tr><td><?= $penggunaanggaran->nama?></td></tr>
<tr><td>NIP. <?= $penggunaanggaran->nip?></td></tr></table>
</footer>
</div>
</html>