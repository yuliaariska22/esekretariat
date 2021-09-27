<html>
<head>
<style>
@media print 
{
   @page 

   {
    size: 12.99in 8.27in;
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
h2{
    text-transform: uppercase;
}
.capslock{
    text-transform: uppercase;
}
</style>
<center>
REKAPITULASI BIAYA PENGINAPAN TAHUN ANGGARAN <?php echo date('Y');?><Br>
<p class="capslock"> PADA <?= $opd->nama_opd ?> KOTA PADANGSIDIMPUAN<Br></p>
UNTUK GANTI UANG (GU)/TAMBAHAN UANG NIHIL (TU-NIHIL)/GANTI UANG NIHIL (GU-NIHIL) KE - ....<br>
</center>
</head>

<body>
<br>
<table width="100%" border="1">
<tr>
<td rowspan="2" align="center">NO</td>
<td rowspan="2" align="center">NO. BKU</td>
<td rowspan="2" align="center">NAMA</td>
<td rowspan="2" align="center">TUJUAN</td>
<td rowspan="2" align="center">NAMA HOTEL</td>
<td rowspan="2" align="center">ALAMAT HOTEL</td>
<td colspan="2" align="center">TANGGAL MENGINAP</td>
<td rowspan="2" align="center">JUMLAH MALAM</td>
<td rowspan="2" align="center">NO KAMAR</td>
<td rowspan="2" align="center">HARGA PER MALAM</td>
<td rowspan="2" align="center">TOTAL BIAYA HOTEL</td>
<td rowspan="2" align="center">NO INVOICE/NO FOLIO/NO BILL/ITINERARY ID</td>
<td rowspan="2" align="center">AGEN PERJALANAN</td>
</tr>
<tr>

<td align="center">TGL CHECK IN</td>
<td align="center">TGL CHECK OUT</td>
</tr>


<?php 
                  $no = 1;
                  $total_biayapenginapan = 0;
                  foreach ($daftarpengeluaranpenginapan->result() as $data) : 
                  ?> 
                  <tr>
                    <td align="center"><?= $no?></td>
                    <td align="center"><?= $data->no_bku?></td>
                    <td><?= $data->nama?></td>
                    <td align="center"><?= $data->alamat_tujuan?></td>
                    <td align="center"><?= $data->nama_hotel?></td>
                    <td align="center"><?= $data->alamat_hotel?></td> 
                    <td align="center"><?= format_indo(date($data->tgl_check_in))?></td>
                    <td align="center"><?= format_indo(date($data->tgl_check_out))?></td>
                    <td align="center">
                    <?php 
                    $tgl1 = new DateTime("$data->tgl_check_in");
                    $tgl2 = new DateTime("$data->tgl_check_out");
                    $jarak = $tgl2->diff($tgl1);

                    echo $jarak->d;?> Malam
                    </td>
                    <td align="center"><?= $data->no_kamar?></td>
                    <td align="right"><?= 'Rp. '.number_format(($data->harga_rill),0,'.','.').',-'; ?></td>
                    <?php if($data->bukti == "Ada") { ?>
                    <td align="right"><?= 'Rp. '.number_format(($data->harga_rill)*$jarak->d,0,'.','.').',-'; ?></td>
                    <?php }else{ ?>
                    <td align="right"><?= 'Rp. '.number_format(($data->harga_rill)*$jarak->d*0.3,0,'.','.').',-'; ?></td>
                    <?php } ?>
                    <td align="center"><?= $data->no_invoice?></td>
                    <td align="center"><?= $data->agen_perjalanan?></td>
                  </tr>
                <?php
                      $no++;
                      if ($data->bukti == "Ada") {
                      $total_biayapenginapan += $data->harga_rill*$jarak->d;
                      }else{
                      $total_biayapenginapan += $data->harga_rill*$jarak->d*0.3;
                      }
                    endforeach;
                  ?>

<tr>
                    <td colspan="11" align="center">Jumlah</td>
                    <td align="right"><?= 'Rp. '.number_format(($total_biayapenginapan),0,'.','.').',-'; ?></td>
                  </tr>

</table>


<div style="page-break-inside:avoid;">
<footer>
<table width="100%">
<tr><td><br><br></td></tr>
<tr>
<td width="65%"></td>
<td>Padangsidimpuan, <?php echo format_indo(date('Y-m-d'));?></td>
</tr>

<tr>
<td><br></td>
</tr>

<tr>
<td width="65%"> Disetujui :</td>
<td>Dibayar Oleh :</td>
</tr>


<tr>
<td width="65%"> PIMPINAN PERANGKAT DAERAH</td>
<td>BENDAHARA PENGELUARAN</td>
</tr>


<tr height="65px">
<td></td>
</tr>


<tr>
<td width="65%"><?= $penggunaanggaran->nama ?></td>
<td><?= $bendahara->nama ?></td>
</tr>

<tr>
<td width="65%">NIP. <?= $penggunaanggaran->nip ?></td>
<td>NIP. <?= $bendahara->nip ?></td>
</tr>
</table>
</footer>
</div>

</html>