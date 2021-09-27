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
h1{
    text-transform: uppercase;
}
</style>
<table align="center">
<tr>
<td>
<h3 class="jarak-lh" align="center">DAFTAR PENGELUARAN RILL</h3>
<td>
</tr>
<tr>
</tr>
</table>
<br>
Yang bertanda tangan di bawah ini : <br>
<table width="100%">
<tr><td width="5%"></td><td width="20%">Nama</td><td width="3%">:</td><td> <?= $pelaksana->nama?></td></tr>
<tr><td width="5%"></td><td>NIP</td><td>:</td><td><?= $pelaksana->nip?></td></tr>
<tr><td width="5%"></td><td>Jabatan</td><td>:</td><td><?= $pelaksana->jabatan?></td></tr>
</table>
</head>

<body>

<br>
Berdasarkan Surat Perjalanan Dinas (SPD) Nomor <?= $cetaksppd->no_sppd?> tanggal <?php echo format_indo($cetaksppd->tanggal_sppd);?> dengan ini kami nyatakan dengan sesungguhnya bahwa: <br>
<br>
<table width="100%">

<tr><td valign="top">1. </td> <td colspan="2">Biaya transport pegawai dan / atau biaya penginapan di bawah ini yang tidak dapat diperoleh bukti-bukti pengeluarannya, meliputi: </td>	<td></td> <td align="justify"></td></tr>
<tr><td></td> <td valign="top" colspan="2"><table width="100%" border="1">
<tr><td align="center">No</td><td align="center">Uraian</td><td align="center">Jumlah</td></tr>
<?php
                    $no = 1 ;
                    $total = 0;
                    foreach ($cetakdetailbiayarill as $item)
                    {
                      $total += 0.3*$item->harga_rill*$item->jumlah;
                    ?>
                    <tr>
<td align="center"><?= $no?></td>
<td align="left"><?= $item->jenis_pengeluaran ?>  <?= $item->keterangan ?> : <?='Rp. '.number_format($item->harga_rill); ?> x <?= $item->jumlah ?> <?= $item->satuan ?> x 30 %</td>
<td align="right"><?= 'Rp. '.number_format(($item->harga_rill*$item->jumlah*0.3),0,'.','.').',-'; ?></td>
</tr><?php
                            $no++;
                    }
                    ?>   
<tr>
<td align="center" colspan="2"><i>Jumlah</i></td>
<td align="right"><?= 'Rp. '.number_format(($total),0,'.','.').',-'; ?></td>
</tr>
</table>
</td></tr>
<tr><td><br></td></tr>
<tr><td valign="top">2. </td> <td colspan="2">Jumlah uang tersebut pada angka 1 di atas benar-benar dikeluarkan untuk pelaksanaan Perjalanan Dinas dimaksud dan apabila dikemudian hari terdapat kelebihan atas pembayaran, kami bersedia untuk menyetorkan kelebihan tersebut ke Kas Daerah.</td>	<td></td> <td align="justify"></td></tr>



</table>
<br>
Demikian pernyataan ini kami buat dengan sebenarnya, untuk dipergunakan sebagaimana mestinya.
<br>
<br>

<div style="page-break-inside:avoid;">
<footer>
<table width="100%">
<tr>
<td width="60%"></td>
<td>Padangsidimpuan, <?php echo format_indo(date('Y-m-d'));?></td>
</tr>
<tr>
<td width="60%">Mengetahui/Menyetujui :</td>
<td></td>
</tr>

<tr>
<td width="60%">Pejabat Pembuat Komitmen</td>
<td>Pelaksana SPD,</td>
</tr>

<tr>
<td width="60%"><?= $kopsuratsppd->nama_opd?></td>
<td></td>
</tr>

<tr>
<td width="60%">Kota Padangsidimpuan,</td>
<td></td>
</tr>

<tr height="60px">
</tr>

<tr>
<td width="60%"><?= $ppk->nama?></td>
<td><?= $pelaksana->nama?></td>
</tr>

<tr>
<td width="60%">NIP. <?= $ppk->nip?></td>
<td>NIP. <?= $pelaksana->nip?></td>
</tr>
</table>
</footer>
</div>

</html>