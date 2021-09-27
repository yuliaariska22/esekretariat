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
$tanggal = date("d-m-Y", strtotime($pengadaan->tanggal_faktur));
$tanggal2 = date("d-m-Y", strtotime($pengadaan->tanggal_faktur));
$tanggal3 = date("d-m-Y", strtotime($pengadaan->tanggal_faktur));


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
<tr><td>Padangsidimpuan, <?= $tgl?> <?= $bulannama?> 20<?= $tahun?></td></tr>
<tr><td>Kepada </td></tr>
<tr><td>Yth : Kepala <?= $pengadaan->nama_opd?></td></tr>
<tr><td>di -</td></tr>
<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp PADANGSIDIMPUAN</td></tr>
</table>
<tr>

<table border="1" align="center" style="width:100%">
                    <tr>
                        <th colspan="2">Banyaknya</th>
                        <th>Nama Barang</th>
                        <th>Harga Satuan</th> 
                        <th>Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1 ;
                    $total = 0;
                    foreach ($detailpengadaan as $item)
                    {
                        $total += ($item->total_barang_in*$item->hargasatuanrekanan);
                    ?>
                    <tr>
                        <td align="center"><?= $item->total_barang_in;?></td>
                        <td align="center"><?= $item->Satuan_ssh;?></td>
                        <td><?= $item->Namabarang_ssh;?></td>
                        <td align="right"><?= 'Rp. '.number_format($item->hargasatuanrekanan,0,'.','.'); ?></td>
                        <td align="right"><?= 'Rp. '.number_format($item->total_barang_in*$item->hargasatuanrekanan,0,'.','.'); ?></td>
                      
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>  
                </tbody>
                <tr>
                        <td align="center" colspan="4">Total</td> 
                        <td align="right"><?= 'Rp. '.number_format($total   ,0,'.','.')?></td>
                </tr>
            </table>

            <div style="page-break-inside:avoid;">
            <table  align="right">
<tr><td><?= $pengadaan->nama_rekanan?></td></tr>
<tr height="75px"></tr>
<tr>
<br> <br>
    <td><?= $pengadaan->nama_pimpinan?></td>
    
</table>
           </div>
</body>

</html>









   
