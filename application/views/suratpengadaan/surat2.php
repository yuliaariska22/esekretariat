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
$tanggal = date("d-m-Y", strtotime($pengadaan->tanggal_suratpermohonanpenyedia));

$tgl = date("d", strtotime($tanggal)); 

$bulanhuruf = date("m", strtotime($tanggal)); 
$bulanhuruf_indonesia = array(
'01'  => 'Januari',
'02'  => 'Februari',
'03' => 'Maret',
'04' => 'April',
'05' => 'Mei',
'06' => 'Juni',
'07' => 'Juli',
'08' => 'Agustus',
'09' => 'September',
'10' => 'Oktober',
'11' => 'November',
'12' => 'Desember');
$bulannama = $bulanhuruf_indonesia[$bulanhuruf];

$tahun = date("Y", strtotime($tanggal));
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
<br>
<body>
<table  align="right">
<tr><td>Padangsidimpuan, <?= $tgl?> <?= $bulannama?> <?= $tahun?></td></tr>
<tr><td>Kepada :</td></tr>
<tr><td>Yth : Kepala <?= $pengadaan->nama_rekanan ?></td></tr>
<tr><td>di -</td></tr>
<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp PADANGSIDIMPUAN</td></tr>
</table>
<br>
<table>
<tr><p><td>Nomor</td>	<td>:</td> <td><?= $pengadaan->no_suratpermohonanpenyedia ?></td></p></tr>
<tr><p><td>Sifat</td>	<td>:</td> <td>Biasa</td></p></tr>
<tr><p><td>Lampiran</td>	<td>:</td> <td></td></p></tr>
<tr><p><td>Perihal</td>	<td>:</td> <td> Permohonan ke Penyedia </td></p></tr>
</table>
<table>
<tr><p><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sehubungan dengan Pelaksanaan Kegiatan untuk Penyediaan Belanja <?= $pengadaan->belanja ?> pada <?= $pengadaan->nama_opd ?> Kota Padangsidimpuan Tahun Anggaran <?= $tahun?>. </p></td></tr>     </table>
<tr><p><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Berkenaan dengan hal tersebut di atas bersama ini kami sampaikan kepada Saudara agar kiranya dapat menyediakan <?= $pengadaan->memesan ?> dengan rincian sebagai berikut  :</p></td></tr>     </table>
   
<table border="1" align="center" width="100%">
                    <tr>
                        <th>No</th>
                        <th>Jenis Barang</th>
                        <th>Jumlah Barang</th> 
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1 ;
                    $total = 0;
                    foreach ($detailpengadaansementara as $item)
                    {
                        $total += $item->total_barang_in*$item->Hargasatuan_ssh;
                    ?>
                    <tr>
                        <td align="center"><?= $no;?></td>
                        <td><?= $item->Namabarang_ssh;?></td>
                        <td align="center"><?= $item->total_barang_in;?></td>
                        
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>  
                    
                </tbody>
            </table>
                    
</body>
<table>
<tr><p><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian disampaikan kepada Saudara, atas bantuan dan kerja sama yang baik diucapkan terimakasih. </p></td></tr>     </table>

<div style="page-break-inside:avoid;">
<footer>
<br>
<br><br><br><br><br><br><br><br>
<table align="right">
<tr><td>Pejabat Pembuat Komitmen </td></tr>
<tr><td><?= $pengadaan->nama_opd ?>  </td></tr>
<tr><td>Kota Padangsidimpuan  </td></tr>
<tr height="75"></tr>
<tr><td><?= $pejabatpembuatkomitmen->nama ?></td></tr>
<tr><td><?= $pejabatpembuatkomitmen->jabatan_sk ?></td></tr>
<tr><td> NIP. <?= $pejabatpembuatkomitmen->nip ?></td></tr>
</table>
</footer>
</div>

</html>