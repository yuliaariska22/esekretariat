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
REKAPITULASI SPPD TAHUN ANGGARAN <?php echo date('Y');?><Br>
<p class="capslock"> PADA <?= $opd->nama_opd ?> KOTA PADANGSIDIMPUAN<Br></p>
UNTUK GANTI UANG (GU)/TAMBAHAN UANG NIHIL (TU-NIHIL)/GANTI UANG NIHIL (GU-NIHIL) KE - ....<br>
</center>
</head>

<body>
<br>
<table width="100%" border="1">
<tr>
<td rowspan="2" align="center">No</td>
<td rowspan="2" align="center">Nama</td>
<td rowspan="2" align="center">Jabatan</td>
<td rowspan="2" align="center">Gol</td>
<td rowspan="2" align="center">No. BKU</td>
<td colspan="2" align="center">SPPD</td>
<td rowspan="2" align="center">Jlh Hari</td>
<td rowspan="2" align="center">Tanggal Berangkat</td>
<td rowspan="2" align="center">Tanggal Pulang</td>
<td rowspan="2" align="center">Kota Asal</td>
<td rowspan="2" align="center">Kota Tujuan</td>
<td colspan="7" align="center">Biaya Perjalanan Dinas</td>
<td rowspan="2" align="center">Biaya Kontibusi</td>
</tr>
<tr>
<td align="center">Nomor</td>
<td align="center">Tanggal</td>
<td align="center">Uang Harian</td>
<td align="center">Uang Representasi</td>
<td align="center">Tiket Angk. Darat</td>
<td align="center">Tiket Pesawat</td>
<td align="center">Taxi</td>
<td align="center">Airport Tax</td>
<td align="center">Jumlah</td>
</tr>

<?php 
                  $no = 1;
                  $total_uang_harian = 0;
                  $total_uang_representasi = 0;
                  $total_transportasi_darat = 0;
                  $total_tiket_pesawat = 0;
                  $total_taksi = 0;
                  $total_jumlah = 0;
                  $total_uang_harian = 0;
                  $total_biaya_kontibusi = 0;
                  
                
                  foreach ($daftarpengeluaran as $data) : 
                    $total_uang_harian += $data->uang_harian;
                    $total_uang_representasi += $data->uang_representasi;
                    $total_transportasi_darat += $data->transportasi_darat_ada_bukti+$data->transportasi_darat_no_bukti;
                    $total_tiket_pesawat += $data->tiket_pesawat_bisnis_ada_bukti+$data->tiket_pesawat_ekonomi_ada_bukti+$data->tiket_pesawat_bisnis_no_bukti+$data->tiket_pesawat_ekonomi_no_bukti;
                    $total_taksi += $data->taksi_ada_bukti+$data->taksi_no_bukti;
                    $total_jumlah  += 0;
                    $total_biaya_kontibusi  += $data->biaya_kontibusi;

                    $jabatan = $this->db->query("SELECT * FROM tbl_riwayat_jabatan
                    where nip=$data->nip order by tanggal_sk desc limit 1");
                
                        foreach ($jabatan->result() as $jabatan) : ?>
                        <?php
                           $jabatan_laporan = $jabatan->jabatan; 
                           $golongan_laporan = $jabatan->gol;     
                        ?>
                        <?php endforeach;

                  ?> 
                  <tr>
                    <td align="center"><?= $no?></td>
                    <td align="center"><?= $data->nama?></td>
                    <td align="center"><?= $jabatan_laporan?></td>
                    <td align="center"><?= $golongan_laporan?></td>
                    <td align="center"><?= $data->no_bku?></td>
                    <td align="center"><?= $data->no_sppd?></td> 
                    <td align="center"><?= format_indo(date($data->tanggal_sppd))?></td>
                    <td align="center">
                    <?php 
                    $tgl1 = new DateTime("$data->tanggal_berangkat");
                    $tgl2 = new DateTime("$data->tanggal_kembali");
                    $jarak = $tgl2->diff($tgl1);

                    echo $jarak->d;?> Hari
                    </td>
                    <td align="center"><?= format_indo(date($data->tanggal_berangkat))?></td>
                    <td align="center"><?= format_indo(date($data->tanggal_kembali))?></td>
                    <td align="center"><?= $data->kota_berangkat?></td>
                    <td align="center"><?= $data->kota_tujuan?></td>
                    <td align="right"><?= 'Rp. '.number_format(($data->uang_harian),0,'.','.').',-'; ?></td>
                    <td align="right"><?= 'Rp. '.number_format(($data->uang_representasi),0,'.','.').',-'; ?></td>
                    <td align="right"><?= 'Rp. '.number_format(($data->transportasi_darat_ada_bukti+$data->transportasi_darat_no_bukti),0,'.','.').',-'; ?></td>
                    <td align="right"><?= 'Rp. '.number_format(($data->tiket_pesawat_bisnis_ada_bukti+$data->tiket_pesawat_ekonomi_ada_bukti+$data->tiket_pesawat_bisnis_no_bukti+$data->tiket_pesawat_ekonomi_no_bukti),0,'.','.').',-'; ?></td>
                    <td align="right"><?= 'Rp. '.number_format(($data->taksi_ada_bukti+$data->taksi_no_bukti),0,'.','.').',-'; ?></td>
                    <td align="right"><?= 'Rp. '.number_format((0),0,'.','.').',-'; ?></td>
                    <?php 
                    $jumlah = 
                    $data->uang_harian
                    +$data->uang_representasi
                    +$data->transportasi_darat_ada_bukti+$data->transportasi_darat_no_bukti
                    +$data->tiket_pesawat_bisnis_ada_bukti+$data->tiket_pesawat_ekonomi_ada_bukti+$data->tiket_pesawat_bisnis_no_bukti+$data->tiket_pesawat_ekonomi_no_bukti
                    +$data->taksi_ada_bukti+$data->taksi_no_bukti
                    +0;
                    ?>
                    <td align="right"><?= 'Rp. '.number_format(($jumlah),0,'.','.').',-'; ?></td>
                    <td align="right"><?= 'Rp. '.number_format(($data->biaya_kontibusi),0,'.','.').',-'; ?></td>
                  </tr>
                <?php
                      $no++;
                      $total_jumlah += $jumlah;
                    endforeach;
                  ?>

<tr>
                    <td colspan="12" align="center">Jumlah</td>
                    <td align="right"><?= 'Rp. '.number_format(($total_uang_harian),0,'.','.').',-'; ?></td>
                    <td align="right"><?= 'Rp. '.number_format(($total_uang_representasi),0,'.','.').',-'; ?></td>
                    <td align="right"><?= 'Rp. '.number_format(($total_transportasi_darat),0,'.','.').',-'; ?></td>
                    <td align="right"><?= 'Rp. '.number_format(($total_tiket_pesawat),0,'.','.').',-'; ?></td>
                    <td align="right"><?= 'Rp. '.number_format(($total_taksi),0,'.','.').',-'; ?></td>
                    <td align="right"><?= 'Rp. '.number_format((0),0,'.','.').',-'; ?></td>
                    <?php
                                    ?>
                    <td align="right"><?= 'Rp. '.number_format(($total_jumlah),0,'.','.').',-'; ?></td>
                    <td align="right"><?= 'Rp. '.number_format(($total_biaya_kontibusi),0,'.','.').',-'; ?></td>
                  </tr>
</table>

<table width="100%">
<tr><td><br></td></tr>

<tr>
<td width="65%"></td>
<td>Jumlah Periode ini : <?= 'Rp. '.number_format(($total_jumlah),0,'.','.').',-'; ?></td>
</tr>


<?php 
                  $no_periodelalu = 1;
                  $total_uang_harian_periodelalu = 0;
                  $total_uang_representasi_periodelalu = 0;
                  $total_transportasi_darat_periodelalu = 0;
                  $total_tiket_pesawat_periodelalu = 0;
                  $total_taksi_periodelalu = 0;
                  $total_jumlah_periodelalu = 0;
                  $total_uang_harian_periodelalu = 0;
                  $total_biaya_kontibusi_periodelalu = 0;
                  
                
                  foreach ($daftarpengeluaran_periodelalu as $data) : 
                    $total_uang_harian_periodelalu += $data->uang_harian;
                    $total_uang_representasi_periodelalu += $data->uang_representasi;
                    $total_transportasi_darat_periodelalu += $data->transportasi_darat_ada_bukti+$data->transportasi_darat_no_bukti;
                    $total_tiket_pesawat_periodelalu += $data->tiket_pesawat_bisnis_ada_bukti+$data->tiket_pesawat_ekonomi_ada_bukti+$data->tiket_pesawat_bisnis_no_bukti+$data->tiket_pesawat_ekonomi_no_bukti;
                    $total_taksi_periodelalu += $data->taksi_ada_bukti+$data->taksi_no_bukti;
                    $total_jumlah_periodelalu  += 0;
                    $total_biaya_kontibusi_periodelalu  += $data->biaya_kontibusi;
                  ?> 
                   <?php 
                    $jumlah_periodelalu = 
                    $data->uang_harian
                    +$data->uang_representasi
                    +$data->transportasi_darat_ada_bukti+$data->transportasi_darat_no_bukti
                    +$data->tiket_pesawat_bisnis_ada_bukti+$data->tiket_pesawat_ekonomi_ada_bukti+$data->tiket_pesawat_bisnis_no_bukti+$data->tiket_pesawat_ekonomi_no_bukti
                    +$data->taksi_ada_bukti+$data->taksi_no_bukti
                    +0;
                    ?>
                <?php
                      $no_periodelalu++;
                      $total_jumlah_periodelalu += $jumlah_periodelalu;
                    endforeach;
                  ?>
<tr>
<td width="65%"></td>
<td>Jumlah s/d Periode lalu : <?= 'Rp. '.number_format(($total_jumlah_periodelalu),0,'.','.').',-'; ?></td>
</tr>

<?php 
                  $no_periodeini = 1;
                  $total_uang_harian_periodeini = 0;
                  $total_uang_representasi_periodeini = 0;
                  $total_transportasi_darat_periodeini = 0;
                  $total_tiket_pesawat_periodeini = 0;
                  $total_taksi_periodeini = 0;
                  $total_jumlah_periodeini = 0;
                  $total_uang_harian_periodeini = 0;
                  $total_biaya_kontibusi_periodeini = 0;
                  
                
                  foreach ($daftarpengeluaran_periodeini as $data) : 
                    $total_uang_harian_periodeini += $data->uang_harian;
                    $total_uang_representasi_periodeini += $data->uang_representasi;
                    $total_transportasi_darat_periodeini += $data->transportasi_darat_ada_bukti+$data->transportasi_darat_no_bukti;
                    $total_tiket_pesawat_periodeini += $data->tiket_pesawat_bisnis_ada_bukti+$data->tiket_pesawat_ekonomi_ada_bukti+$data->tiket_pesawat_bisnis_no_bukti+$data->tiket_pesawat_ekonomi_no_bukti;
                    $total_taksi_periodeini += $data->taksi_ada_bukti+$data->taksi_no_bukti;
                    $total_jumlah_periodeini  += 0;
                    $total_biaya_kontibusi_periodeini  += $data->biaya_kontibusi;
                  ?> 
                   <?php 
                    $jumlah_periodeini = 
                    $data->uang_harian
                    +$data->uang_representasi
                    +$data->transportasi_darat_ada_bukti+$data->transportasi_darat_no_bukti
                    +$data->tiket_pesawat_bisnis_ada_bukti+$data->tiket_pesawat_ekonomi_ada_bukti+$data->tiket_pesawat_bisnis_no_bukti+$data->tiket_pesawat_ekonomi_no_bukti
                    +$data->taksi_ada_bukti+$data->taksi_no_bukti
                    +0;
                    ?>
                <?php
                      $no_periodeini++;
                      $total_jumlah_periodeini += $jumlah_periodeini;
                    endforeach;
                  ?>
<tr>
<td width="65%"></td>
<td>Jumlah s/d Periode ini : <?= 'Rp. '.number_format(($total_jumlah_periodeini),0,'.','.').',-'; ?></td>
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