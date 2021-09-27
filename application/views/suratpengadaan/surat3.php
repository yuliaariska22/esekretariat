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
$tanggal = date("d-m-Y", strtotime($pengadaan->tanggal_suratbalasan));
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
<table align="center">
<tr height ="150px">
<td width="100px">
<td>
<td>
<td>
</tr>
<tr>
</td>
</tr>
</table>
</head>

<body>
<table  align="right">
<tr><td>Padangsidimpuan, <?=$tgl?> <?=$bulannama?> 20<?= $tahun?></td></tr>
<tr><td>Kepada :</td></tr>
<tr><td>Yth. Kepala <?= $pengadaan->nama_opd ?></td></tr>
<tr><td>di -</td></tr>
<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp PADANGSIDIMPUAN</td></tr>
</table>
<br>
<table>
<tr><p><td>Nomor</td>	<td>:</td> <td><?= $pengadaan->no_suratbalasan ?></td></p></tr>
<tr><p><td>Sifat</td>	<td>:</td> <td>Biasa</td></p></tr>
<tr><p><td>Lampiran</td>	<td>:</td> <td></td></p></tr>
<tr><p><td>Perihal</td>	<td>:</td> <td> Kesediaan Menerima Pekerjaan </td></p></tr>
</table>

<table>
<tr><p><td align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menyahuti surat Bapak/Ibu Kepala <?= $pengadaan->nama_opd ?> Kota Padangsidimpuan, Nomor <?= $pengadaan->no_suratpermohonanpenyedia ?> tanggal <?=$tgl2?> <?=$bulannama2?> 20<?= $tahun2?> hal Permohonan ke Penyedia.</p></td></tr>
<tr><p><td align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berkenaan hal tersebut di atas dapat disampaikan bahwa saya dapat menerima pekerjaan Penyediaan Belanja <?= $pengadaan->belanja ?> dan akan melakukan penagihan kepada Bapak/Ibu Kepala <?= $pengadaan->nama_opd ?> Kota Padangsidimpuan dengan rincian sebagai berikut : </p></td></tr>

   
<table border="1" align="center" >
                    <tr>
                        <th>No</th>
                        <th>Jenis Barang</th>
                        <th>Jumlah Barang</th> 
                        <th>Harga Satuan</th> 
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1 ;
                    $total = 0;
                    foreach ($detailpengadaan as $item)
                    {
                        $total += $item->total_barang_in*$item->hargasatuanrekanan;
                    ?>
                    <tr>
                        <td align="center"><?= $no;?></td>
                        <td><?= $item->Namabarang_ssh;?></td>
                        <td align="center"><?= $item->total_barang_in;?></td>
                        <td align="center"><?= 'Rp. '.number_format($item->hargasatuanrekanan,0,'.','.'); ?></td>
                        
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>  
                    
                </tbody>
            </table>
       

<tr><p><td align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Demikian disampaikan kepada Bapak/Ibu besar harapan agar pekerjaan tersebut dapat dipercayakan kepada kami, atas kepercayaan Bapak/Ibu kepada kami dan atas kerjasama yang baik diucapkan terima kasih.</p></td></tr>     </table>
<div style="page-break-inside:avoid;">
<footer>
<table align="right" style="width:100%">
<tr height="75px"></tr>
    <td align="right"><b><?= $pengadaan->nama_rekanan ?></b></td>
</tr>

<tr>
    <td align="right"><br><br><br><b></b></td>
</tr>

<tr>
    <td align="right"><b><?= $pengadaan->nama_pimpinan ?></b></td>
    <td></td>
</tr>

</table>
</footer>
</div>

</html>