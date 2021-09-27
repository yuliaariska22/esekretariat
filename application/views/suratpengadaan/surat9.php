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
$angka = ceil($totala);
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
<br>
<body>
<table  align="right">
<tr><td>Kepada</td></tr>
<tr><td>Yth; Kepala <?= $pengadaan->nama_opd ?></td></tr>
<tr><td>di -</td></tr>
<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Padangsidimpuan</td></tr>
</table>
<br>
<table>
<tr><p><td>Hal</td>	<td>:</td> <td> Permohonan Pembayaran </td></p></tr>
</table>
<br> <br>
<table>
<tr><p><td align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menindak lanjuti surat kami terdahulu pada Nomor : <?= $pengadaan->no_suratbalasan ?> tanggal <?= $tgl?> bulan <?= $bulannama?> tahun 20<?= $tahun?>,  perihal Kesediaan Menerima Pekerjaan pada <?= $pengadaan->nama_opd?> untuk Penyediaan Belanja <?= $pengadaan->belanja ?> dapat disampaikan kepada Bapak/Ibu bahwa dana yang ditagihkan kepada Bapak/Ibu adalah sebesar <?= 'Rp. '.number_format($totala,0,'.','.'); ?>   (<?php echo terbilang($angka); ?>) dimana harga tersebut sudah termasuk pajak dengan rincian sebagai berikut:  </p></td></tr>     </table>
 
<table border="1" align="center" width="100%">
                    <tr>
                        <th>No</th>
                        <th>Banyaknya</th>
                        <th>Nama Barang</th> 
                        <th>@Rp.</th> 
                        <th>Jumlah</th> 
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1 ;
                    $total = 0;
                    $jumlahpajak = 0;
                    $ppn = 0;
                    $pphpasal22 = 0;
                    $pphpasal23 = 0;
                    $pasal4ayat2 = 0;
                    $pajakdaerah = 0;
                    foreach ($detailpengadaan as $item)
                    {
                        $total += $item->total_barang_in*$item->hargasatuanrekanan;
                    ?>
                    <tr>
                        <td align="center"><?= $no;?></td>
                        <td align="center"><?= $item->total_barang_in;?> <?= $item->Satuan_ssh;?></td>
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
                        <td align="center" colspan="4">JUMLAH TOTAL</td> 
                        <td align="right"><?= 'Rp. '.number_format($total,0,'.','.'); ?></td>
                </tr>
            </table>
            <p>Adapun Jumlah Pajak adalah </p>
<?php
$ppn = $pengadaan->ppn*$total/100;
$pphpasal22 = $pengadaan->pphpasal22*$total/100;
$pphpasal23 = $pengadaan->pphpasal23*$total/100;
$pasal4ayat2 = $pengadaan->pasal4ayat2*$total/100;
$pajakdaerah = $pengadaan->pajakdaerah  *$total/100;
$jumlahpajak = $ppn+$pphpasal22+$pphpasal23+$pasal4ayat2+$pajakdaerah;
?>
<table>
<tr><p><td>1. PPN</td><td>&nbsp &nbsp &nbsp &nbsp <?= 'Rp. '.number_format($ppn,0,'.','.'); ?></td></p></tr>
<tr><p><td>2. PPh Pasal 22</td> <td>&nbsp &nbsp &nbsp &nbsp <?= 'Rp. '.number_format($ppn,0,'.','.'); ?></td></p></tr>
<tr><p><td>3. PPh Pasal 23</td>	<td>&nbsp &nbsp &nbsp &nbsp <?= 'Rp. '.number_format($ppn,0,'.','.'); ?></td> </p></tr>
<tr><p><td>4. Pasal 4 ayat 2 </td>  <td>&nbsp &nbsp &nbsp &nbsp <?= 'Rp. '.number_format($ppn,0,'.','.'); ?></td> </p></tr>
<tr><p><td>5. Pajak Daerah</td> <td>&nbsp &nbsp &nbsp &nbsp <u> <?= 'Rp. '.number_format($ppn,0,'.','.'); ?></u></td></p></tr>
<tr><p><td>&nbsp &nbsp Jumlah Pajak yang harus dibayarkan</td> <td>&nbsp &nbsp &nbsp &nbsp <?= 'Rp. '.number_format($jumlahpajak,0,'.','.'); ?></td></p></tr>

</table>
                    
</body>
<table>
<tr><p><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian kami sampaikan jumlah dana <?= 'Rp. '.number_format($total+$jumlahpajak,0,'.','.'); ?> agar dapat dibayarkan dan atas kerja sama yang baik diucapkan terima kasih.  </p></td></tr>     </table>


<div style="page-break-inside:avoid;">
<footer>
<br>


<table  align="right">
<tr><td><?= $pengadaan->nama_rekanan?></td></tr>
<tr height="75px"></tr>
<tr>
<br> <br>
    <td><?= $pengadaan->nama_pimpinan?></td>
    
</table>
</footer>

</div>

</html>