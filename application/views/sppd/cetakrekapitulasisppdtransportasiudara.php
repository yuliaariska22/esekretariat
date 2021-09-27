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
REKAPITULASI BIAYA TRANSPORTASI UDARA TAHUN ANGGARAN <?php echo date('Y');?><Br>
<p class="capslock"> PADA <?= $opd->nama_opd ?> KOTA PADANGSIDIMPUAN<Br></p>
UNTUK GANTI UANG (GU)/TAMBAHAN UANG NIHIL (TU-NIHIL)/GANTI UANG NIHIL (GU-NIHIL) KE - ....<br>
</center>
</head>

<body>
<br>
<table width="100%" border="1">
<tr>
<td rowspan="2" align="center">No</td>
<td rowspan="2" align="center">No. BKU</td>
<td colspan="9" align="center">KEBERANGKATAN</td>
<td colspan="9" align="center">KEDATANGAN</td>

</tr>
<tr>
<td align="center">Maskapai</td>
<td align="center">Kode Booking</td>
<td align="center">Nomor Tiket</td>
<td align="center">Nomor Flight</td>
<td align="center">Origin</td>
<td align="center">Destination</td>
<td align="center">Tanggal Penerbangan</td>
<td align="center">Basic Fare (Published Fare)</td>
<td align="center">Taxes</td>

<td align="center">Maskapai</td>
<td align="center">Kode Booking</td>
<td align="center">Nomor Tiket</td>
<td align="center">Nomor Flight</td>
<td align="center">Origin</td>
<td align="center">Destination</td>
<td align="center">Tanggal Penerbangan</td>
<td align="center">Basic Fare (Published Fare)</td>
<td align="center">Taxes</td>
</tr>

<?php 
                  $no = 1;
                  $total_keb_basicfare = 0;
                  $total_ked_basicfare = 0;
                  $total_keb_taxes = 0;
                  $total_ked_taxes = 0;
                  foreach ($daftarpengeluarantransportasiudara->result() as $data) : 
                    if ($data->bukti_pembayaran=="Tidak Ada"){
                        $keb_basicfare = $data->keb_basicfare*0.3;
                        $keb_taxes = $data->keb_taxes*0.3;
                        $ked_basicfare = $data->ked_basicfare*0.3;
                        $ked_taxes = $data->ked_taxes*0.3;
                    }else{
                      $keb_basicfare = $data->keb_basicfare;
                      $keb_taxes = $data->keb_taxes;
                      $ked_basicfare = $data->ked_basicfare;
                      $ked_taxes = $data->ked_taxes*0.3;
                    }
                  ?> 
                  <tr>
                    <td align="center"><?= $no?></td>
                    <td align="center"><?= $data->no_bku?></td>
                    <td><?= $data->keb_maskapai?></td>
                    <td align="center"><?= $data->keb_kode_booking?></td>
                    <td align="center"><?= $data->keb_no_tiket?></td>
                    <td align="center"><?= $data->keb_no_flight?></td>
                    <td align="center"><?= $data->keb_origin?></td>
                    <td align="center"><?= $data->keb_destination?></td>
                    <td align="center"><?php echo format_indo(date($data->keb_tgl_penerbangan));?></td>
                    <td align="right"><?= 'Rp. '.number_format(($keb_basicfare),0,'.','.').',-'; ?></td>
                    <td align="right"><?= 'Rp. '.number_format(($keb_taxes),0,'.','.').',-'; ?></td>
                    <td><?= $data->ked_maskapai?></td>
                    <td align="center"><?= $data->ked_kode_booking?></td>
                    <td align="center"><?= $data->ked_no_tiket?></td>
                    <td align="center"><?= $data->ked_no_flight?></td>
                    <td align="center"><?= $data->ked_origin?></td>
                    <td align="center"><?= $data->ked_destination?></td>
                    <td align="center"><?php echo format_indo(date($data->ked_tgl_penerbangan));?></td>
                    <td align="right"><?= 'Rp. '.number_format(($ked_basicfare),0,'.','.').',-'; ?></td>
                    <td align="right"><?= 'Rp. '.number_format(($ked_taxes),0,'.','.').',-'; ?></td>
                  </tr>
                <?php
                      $no++;
                      $total_keb_basicfare += $keb_basicfare;
                      $total_ked_basicfare += $ked_basicfare;
                      $total_keb_taxes += $keb_taxes;
                      $total_ked_taxes += $ked_taxes;
                    endforeach;
                  ?>

<tr>
                    <td colspan="9" align="center">Jumlah</td>
                    <td align="right"><?= 'Rp. '.number_format(($total_keb_basicfare),0,'.','.').',-'; ?></td>
                    <td align="right"><?= 'Rp. '.number_format(($total_keb_taxes),0,'.','.').',-'; ?></td>
                    <td colspan="7" align="center">Jumlah</td>
                    <td align="right"><?= 'Rp. '.number_format(($total_ked_basicfare),0,'.','.').',-'; ?></td>
                    <td align="right"><?= 'Rp. '.number_format(($total_ked_taxes),0,'.','.').',-'; ?></td>
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