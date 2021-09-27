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
</style>
<?php
$tanggal = date("d-m-Y", strtotime($pengadaan->tanggal_suratperintahpengiriman));
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
<table align="center" style="width:100%">
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
<table>
</head>

<body>
<p class="jarak-lh" align="center"><u><b>SURAT PERINTAH PENGIRIMAN (SPP)</u></b></p>
<p class="jarak-lh" align="center">Nomor : <?= $pengadaan->no_suratperintahpengiriman ?></p>
<p class="jarak-lh" align="center">Paket Pekerjaan : Belanja <?= $pengadaan->belanja ?></p>  


<p>Yang bertanda tangan di bawah ini :</p>

<table>
<tr><td>Nama  &nbsp &nbsp &nbsp: <b><?= $pejabatpembuatkomitmen->nama ?></b><td></tr>
<tr><td>Jabatan &nbsp : PPK pada <?= $pengadaan->nama_opd ?> Kota Padangsidimpuan<td></tr>
<tr><td>Alamat &nbsp : <?= $pengadaan->alamat_opd ?> Padangsidimpuan<td></tr>
<tr height="15px"></tr><td>berdasarkan SPP Belanja <?= $pengadaan->sppbelanja ?> Nomor : <?= $pengadaan->no_spp ?> Tanggal <?=date("d/m/Y", strtotime($pengadaan->tanggal_spp));?>, bersama ini memerintahkan :</td></tr>
</table>
<br>
<table>
<tr><td width="30%">Nama Penyedia Barang</td> <td>:</td> <td><b><?= $pengadaan->nama_rekanan ?></b></td></tr>
<tr><td>Alamat </td> <td>:</td> <td colspan="2"><?= $pengadaan->alamat_rekanan ?></td></tr>
<tr><td></td></tr>
<tr><td>yang dalam hal ini diwakili oleh</td> <td>:</td> <td><b><?= $pengadaan->nama_pimpinan ?>, Pimpinan/Penanggung Jawab</b><td></tr>
</table>

<p>Untuk mengirimkan barang dengan memperhatikan ketentuan-ketentuan sebagai berikut : </p>

<p> 1. <u>Rincian Barang:</u>

<table border="1" align="center" width="100%">
                    <tr>
                        <th>No</th>
                        <th>Jenis Barang</th>
                        <th>Satuan/Ukuran</th>      
                        <th>Kuantitas</th>                   
                        <th>Harga Satuan(Rp)</th> 
                        <th>Total Harga(Rp)</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1 ;
                    $total = 0;
                    $totalharga = 0;
                    $totalhargadibulatkan=0;
                    foreach ($detailpengadaan as $item)
                    {
                        $total += $item->total_barang_in*$item->hargasatuanrekanan;
                        $totalharga += ($item->total_barang_in*$item->hargasatuanrekanan);
                    ?>
                    <tr>
                        <td align="center"><?= $no;?></td>
                        <td><?= $item->Namabarang_ssh;?></td>
                        <td><?= $item->Satuan_ssh;?></td>
                        <td align="center"><?= $item->total_barang_in;?></td>
                        <td align="right"><?= 'Rp.'.number_format($item->hargasatuanrekanan,0,'.','.'); ?></td>
                        <td align="right"><?= 'Rp.'.number_format($item->total_barang_in*($item->hargasatuanrekanan),0,'.','.'); ?></td>
                    
                    </tr>
                    <?php
                            $no++;
                    }
                    
                $totalhargadibulatkan = round($totalharga,-3);
                    ?>  
                </tbody>
                <tr>
                        <td align="center" colspan="5">JUMLAH TOTAL</td> 
                        <td align="right"><?= 'Rp'.number_format($totalharga,0,'.','.'); ?></td>
                </tr>
                <tr>
                        <td align="center" colspan="5">JUMLAH TOTAL DIBULATKAN</td> 
                        <td align="right"><?= 'Rp'.number_format($totalharga,0,'.','.'); ?></td>
                </tr>
    
            </table>
        <table>
        <tr><td>2.</td> <td><u>Tanggal barang diterima :</u> <?=date("d/m/Y", strtotime($pengadaan->waktu_penyelesaian));?></td></tr>
        <tr><td>3.</td> <td><u>Syarat-syarat pekerjaan :</u> sesuai dengan persyaratan dan ketentuan SPP;</td></tr>
        <tr><td>4.</td> <td><u>Waktu penyelesaian :</u> selama <?= $pengadaan->hari ?> hari kalender dan pekerjaan harus sudah selesai pada tanggal <?=date("d/m/Y", strtotime($pengadaan->waktu_penyelesaian));?></td></tr>
        <tr><td>5.</td> <td><u>Alamat Pengiriman Barang :</u>  <?= $pengadaan->nama_opd ?> Kota Padangsidimpuan.</td></tr>
        <tr><td></td> <td><u></u>  <?= $pengadaan->alamat_opd ?></td></tr>
        <tr><td>6.</td> <td><u>Denda :</u>  Terhadap setiap hari keterlambatan penyelesaian pekerjaan Penyedia Jasa akan dikenakan Denda Keterlambatan sebesar 1/1000 (satu permil) dari Nilai sisa SPP yang belum dilaksanakan.(tidak termasuk PPN).</td></tr>
        </table>
</body>

<div style="page-break-inside:avoid;">
<footer>

<table align="center" style="width:100%">
<tr>
    <td>Padangsidimpuan, <?=$tgl?> <?=$bulannama?> 20<?= $tahun?></td>
   
</tr>
<tr>
    <td>Untuk dan atas nama</td>
   
</tr>
<tr>
    <td>Pemerintah Kota Padangsidimpuan</td>
</tr>
<tr>
    <td>Pejabat Pembuat Komitmen</td>
    <td></td>
</tr>
<tr height="60px"></tr>
<tr>
    <td><b><u><?= $pejabatpembuatkomitmen->nama ?></u></b></td>
</tr>
<tr>
    <td><b>NIP. <?= $pejabatpembuatkomitmen->nip ?></b></td>
</tr>

<tr height="20px"></tr>
    <td>Menerima dan menyetujui</td>
    <td></td>
</tr>
<tr>
    <td>Untuk dan atas nama</td>
</tr>
<tr>
<td><?= $pengadaan->nama_rekanan ?></td>
</tr>
<tr height="60px"></tr>
<td><u><b><?= $pengadaan->nama_pimpinan ?></b></u></td>
</tr>
<tr>
<td>Direktur</td>
</tr>
</table>
</footer>
</div>

</html>









   
