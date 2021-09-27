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
<h3 class="jarak-lh" align="center">LAPORAN PERJALANAN DINAS</h3>
<td>
</tr>
<tr>
</tr>
</table>
<br>
<table>
<tr><td width="60%"></td><td></td><td>Padangsidimpuan, <?php echo format_indo(date('Y-m-d'));?> </td></tr>
<tr><td ></td><td></td><td>Kepada :</td></tr>
<tr><td >Hal : Lap. Perjalanan Dinas</td><td width="8%" valign="top">Yth.</td><td>Kepala <?= $kopsuratsppd->nama_opd ?></td></tr>
<tr><td ></td><td></td><td>Kota Padangsidimpuan</td></tr>
<tr><td ></td><td></td><td>&nbsp;&nbsp;&nbsp; di-</td></tr>
<tr><td ></td><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PADANGSIDIMPUAN </td></tr>
<table>
</head>

<body>
<br>
<br>
<table width="100%">
<tr><td valign="top">a. </td> <td colspan="2">Dasar</td>	<td></td> <td align="justify"></td></tr>
<?php
                    $no = 1 ;
                    foreach ($cetakdetailsppddasar as $item)
                    {
                    ?>
                    <tr><td></td> <td valign="top"><?= $no ?>.</td>	        <td valign="top"><?= $item->dasar ?></td> </tr>

<?php
                            $no++;
                    }
                    ?> 
                 
<tr><td valign="top">b. </td> <td colspan="2">Waktu dan Tempat Pelaksanaan</td>	<td></td> <td align="justify"></td></tr>
<tr><td></td> <td valign="top" colspan="2">Dari Tanggal <?php echo format_indo($cetaksppd->tanggal_berangkat);?> s/d <?php echo format_indo($cetaksppd->tanggal_kembali);?> telah melaksanakan perjalanan dinas ke <?= $cetaksppd->alamat_tujuan ?> di <?= $cetaksppd->kota_tujuan ?></td>	        <td valign="top"></td> </tr>

<tr><td valign="top">c. </td> <td colspan="2">Peserta</td>	<td></td> <td align="justify"></td></tr>
<tr><td></td> <td valign="top" colspan="2">Peserta yang melaksanakan Perjalanan Dinas</td>	        <td valign="top"></td> </tr>
<tr><td></td> <td valign="top" colspan="2"><table width="100%" border="1">
<tr><td align="center">No</td><td align="center">NAMA/NIP</td><td align="center">PANGKAT<br>GOL RUANG</td><td align="center">JABATAN</td></tr>
<?php
                    $no = 1 ;
                    foreach ($cetakdetailsppd as $item)
                    {
                      $jabatan = $this->db->query("SELECT * FROM tbl_riwayat_jabatan
                      where nip=$item->nip order by tanggal_sk desc limit 1");
                  
                          foreach ($jabatan->result() as $jabatan) : ?>
                          <?php
                             $jabatan_laporan = $jabatan->jabatan; 
                             $golongan_laporan = $jabatan->gol;     
                          ?>
                          <?php endforeach;

                      $pangkat = $this->db->query("SELECT * FROM tbl_riwayat_kepangkatan
                      where nip=$item->nip order by tanggal_sk desc limit 1");

                          foreach ($pangkat->result() as $pangkat) : ?>
                          <?php
                            $pangkat_laporan = $pangkat->pangkat; 
                          ?>
                          <?php endforeach;
                    ?>
                    <tr>
                    <td align="center"><?= $no;?></td>
                    <td align="center"><?= $item->nama;?><br>/<?= $item->nip;?></td>
                    <td align="center"><?= $pangkat_laporan;?><br><?= $golongan_laporan;?></td>
                    <td align="center"><?= $jabatan_laporan;?></td></tr>
<?php
                            $no++;
                    }
                    ?>   
</table>
</td>	        <td></td> </tr>

<tr><td valign="top">d. </td> <td colspan="2">Maksud dan Tujuan</td>	<td></td> <td align="justify"></td></tr>
<tr><td></td> <td valign="top" colspan="2"><?php
                    $no = 1 ;
                    foreach ($cetaklaporanmaksud as $item)
                    {
                    ?>
                    <?=$item->maksud ?>
                    <?php
                            $no++;
                    }
                    ?>  </td>	        <td valign="top"></td> </tr>

<tr><td valign="top">e. </td> <td colspan="2">Kesimpulan</td>	<td></td> <td align="justify"></td></tr>
<?php
                    $no = 1 ;
                    foreach ($cetakdetaillaporan as $itemlaporan)
                    {
                    ?>
                    <tr><td></td> <td valign="top"><?= $no;?></td> <td valign="top" align="justify"><?= $itemlaporan->isi;?></td> </tr>
<?php
                            $no++;
                    }
                    ?>   

</table>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Demikian disampaikan untuk dapat dimaklumi dan mohon petunjuk selanjutnya.
<br>
<br>

<div style="page-break-inside:avoid;">
<footer>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang Melaksanakan Perjalanan Dinas,
<table width="100%" border="1">
<tr><td align="center">No</td><td align="center">NAMA/NIP</td><td align="center">PANGKAT<br>GOL RUANG</td><td align="center">TANDA TANGAN</td></tr>
<?php
                    $no = 1 ;
                    foreach ($cetakdetailsppd as $item)
                    {
                      $jabatan = $this->db->query("SELECT * FROM tbl_riwayat_jabatan
                      where nip=$item->nip order by tanggal_sk desc limit 1");
                  
                          foreach ($jabatan->result() as $jabatan) : ?>
                          <?php
                             $jabatan_laporan = $jabatan->jabatan; 
                             $golongan_laporan = $jabatan->gol;     
                          ?>
                          <?php endforeach;

                      $pangkat = $this->db->query("SELECT * FROM tbl_riwayat_kepangkatan
                      where nip=$item->nip order by tanggal_sk desc limit 1");

                          foreach ($pangkat->result() as $pangkat) : ?>
                          <?php
                            $pangkat_laporan = $pangkat->pangkat; 
                          ?>
                          <?php endforeach;
                    ?>
                    <tr>
                    <td align="center"><?= $no;?></td>
                    <td align="center"><?= $item->nama;?><br>/<?= $item->nip;?></td>
                    <td align="center"><?= $pangkat_laporan;?><br><?= $golongan_laporan;?></td>
                    <td align="left"></td></tr>
<?php
                            $no++;
                    }
                    ?>   
</table>
</footer>
</div>

</html>