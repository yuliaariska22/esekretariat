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
REKAPITULASI SPPD DALAM DAERAH TAHUN ANGGARAN <?php echo date('Y');?><Br>
<p class="capslock"> PADA <?= $opd->nama_opd ?> KOTA PADANGSIDIMPUAN<Br></p>
UNTUK GANTI UANG (GU)/TAMBAHAN UANG NIHIL (TU-NIHIL)/GANTI UANG NIHIL (GU-NIHIL) KE - ....<br>
</center>
</head>

<body>
<br>
<table width="100%" border="1">
<tr>
<td rowspan="2" align="center">NO</td>
<td rowspan="2" align="center">NAMA</td>
<td rowspan="2" align="center">JABATAN</td>
<td rowspan="2" align="center">GOL</td>
<td rowspan="2" align="center">TUJUAN</td>
<td colspan="2" align="center">SPPD</td>
<td colspan="2" align="center">TANGGAL</td>
<td rowspan="2" align="center">JUMLAH HARI</td>
<td rowspan="2" align="center">JUMLAH BIAYA</td>
</tr>
<tr>
<td align="center">NOMOR</td>
<td align="center">TANGGAL</td>
<td align="center">BERANGKAT</td>
<td align="center">PULANG</td>
</tr>


<?php 
                  $no = 1;
                  $jumlah_biayaperjalanandinas = 0;
                  $total_keseluruhan =0;
                  foreach ($cetaksppddalam->result() as $data) : 
                    $jabatan = $this->db->query("SELECT * FROM tbl_riwayat_jabatan
                    where nip=$data->nippelaksana order by tanggal_sk desc limit 1");
                
                        foreach ($jabatan->result() as $jabatan) : ?>
                        <?php
                           $jabatan_laporan = $jabatan->jabatan; 
                           $golongan_laporan = $jabatan->gol;     
                        ?>
                        <?php endforeach;
                  ?> 
                  <tr>
                    <td align="center"><?= $no ?></td>
                    <td><?= $data->nama ?></td>
                    <td><?= $jabatan_laporan ?></td>
                    <td align="center"><?= $golongan_laporan ?></td>
                    <td align="center"><?= $data->kota_tujuan ?></td>
                    <td align="center"><?= $data->no_sppd ?></td>
                    <td align="center"><?php echo format_indo(date($data->tanggal_sppd));?></td>
                    <td align="center"><?php echo format_indo(date($data->tanggal_berangkat));?></td>
                    <td align="center"><?php echo format_indo(date($data->tanggal_kembali));?></td>
                    <td align="center"><?php 
                      $tgl1 = new DateTime("$data->tanggal_berangkat");
                      $tgl2 = new DateTime("$data->tanggal_kembali");
                      $jarak = $tgl2->diff($tgl1);

                      echo $jarak->d+1;?> HARI</p>
                    </td>
                    <td  align="center"><?= 'Rp. '.number_format((150000*($jarak->d+1)),0,'.','.').',-'; ?></td>
                    </tr>
                <?php
                      $no++;
                      $total_keseluruhan += 150000*($jarak->d+1);
                    endforeach;
                  ?>

                  <tr>
                    <td colspan =10;></td>
                    <td align="center"><?= 'Rp. '.number_format((($total_keseluruhan)),0,'.','.').',-'; ?></td>
                  </tr>

                  


</table>

                <?php 
                  $no = 1;
                  $total_keseluruhan_periodeini =0;
                  foreach ($cetaksppddalam_periodeini->result() as $data) :
                    $tgl1 = new DateTime("$data->tanggal_berangkat");
                    $tgl2 = new DateTime("$data->tanggal_kembali");
                    $jarak = $tgl2->diff($tgl1);
                  ?> 
                <?php
                      $no++;
                      $total_keseluruhan_periodeini += 150000*($jarak->d+1);
                    endforeach;
                  ?>

                
                <?php 
                  $no = 1;
                  $total_keseluruhan_periodelalu =0;
                  foreach ($cetaksppddalam_periodelalu->result() as $data) : 
                  ?> 
                <?php
                      $no++;
                      $total_keseluruhan_periodelalu += 150000*($jarak->d+1);
                    endforeach;
                  ?>

<table width="100%">
<tr><td><br></td></tr>

<tr>
<td width="65%"></td>
<td>Jumlah Periode ini : <?= 'Rp. '.number_format((($total_keseluruhan)),0,'.','.').',-'; ?></td>
</tr>

<tr>
<td width="65%"></td>
<td>Jumlah s/d Periode lalu : <?= 'Rp. '.number_format((($total_keseluruhan_periodelalu)),0,'.','.').',-'; ?></td>
</tr>

<tr>
<td width="65%"></td>
<td>Jumlah s/d Periode ini : <?= 'Rp. '.number_format((($total_keseluruhan_periodeini)),0,'.','.').',-'; ?></td>
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