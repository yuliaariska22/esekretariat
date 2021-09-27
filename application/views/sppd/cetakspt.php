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
h2{
    text-transform: uppercase;
}
.capslock{
    text-transform: uppercase;
}
</style>
<table align="center">
<tr>
<td>
<img src="<?php echo base_url('theme/logopadsim.jpg')?>" width="100px">
<td>
<td>
<h3 class="jarak-lh" align="center">PEMERINTAH KOTA PADANGSIDIMPUAN</h3>
<h2 class="jarak-namaopd" align="center"><?= $kopsuratsppd->nama_opd ?></h2>
<p class="jarak-lh" align="center"><?= $kopsuratsppd->alamat_kop_opd ?></p>
<p class="jarak-lh" align="center"><?= $kopsuratsppd->kecamatan_opd ?></p>
<td>
</tr>
<tr>
<td colspan=3>
<hr  color="black" size="2px"/>
</td>
</tr>
</table>
</head>

<body>
<p class="jarak-lh" align="center"><u><b>SURAT PERINTAH TUGAS </u></b></p>
<p class="jarak-lh" align="center">Nomor : <?= $cetaksppd->no_spt ?></p>
<br>

<table width="100%">
<tr><td width="15%" valign="top">Dasar</td> <td width="5%" valign="top">:</td>	</tr>
<?php
                    $no = 1 ;
                    foreach ($cetakdetailsppddasar as $item)
                    {
                    ?>
                    <tr><td></td> <td></td>	        <td valign="top"><?=$no?>. </td> <td align="justify"><?= $item->dasar?></td></tr>
 <?php
                            $no++;
                    }
                    ?> 
<tr height="40px"><td colspan="4" align="center">MEMERINTAHKAN :</td></tr>
</table>

<table width="100%">
<tr><td width="15%">Kepada</td> <td width="5%">:</td>	<td width="5%"></td> <td width="20%"></td> <td width="5%"></td> <td></td></tr>

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
                    <tr><td width="15%"></td> <td width="5%"></td>	<td width="5%"><?= $no;?></td> <td width="20%">Nama</td> <td width="5%">:</td> <td><?= $item->nama;?></td></tr>
                    <tr><td></td> <td></td>	<td></td> <td>Pangkat/Golongan</td> <td>:</td> <td><?= $pangkat_laporan;?> / <?= $golongan_laporan;?></td></tr>
                    <tr><td></td> <td></td>	<td></td> <td>NIP</td> <td>:</td> <td><?= $item->nip;?></td></tr>
                    <tr><td></td> <td></td>	<td></td> <td valign="top">Jabatan</td> <td valign="top">:</td> <td><?= $jabatan_laporan;?></td></tr>
                    <?php
                            $no++;
                    }
                    ?>   
</tr>

<tr height="20px"><td colspan="4"></td></tr>
</table>

<table width="100%">
<tr><td width="15%" valign="top">Untuk</td> <td width="5%" valign="top">:</td></tr>
<?php
                    $no = 1 ;
                    foreach ($cetakdetailsppdtujuan as $item)
                    {
                    ?>
                    <tr><td></td> <td></td>	        <td valign="top"><?= $no?>. </td> <td align="justify"><?= $item->tujuan ?></td></tr>
<?php
                            $no++;
                    }
                    ?> 
                   </table>

<div style="page-break-inside:avoid;">
<footer>
<table>
<tr><td width="55%"></td><td>Ditetapkan di Padangsidimpuan</td> </tr>
<tr><td></td><td>pada tanggal <?php echo format_indo($cetaksppd->tanggal_sppd);?></td></tr>
<tr><td></td><td><br></td></tr>
<tr><td></td><td colspan="3" class="capslock">KEPALA <?= $kopsuratsppd->nama_opd ?> </td></tr>
<tr><td></td><td colspan="3">KOTA PADANGSIDIMPUAN, </td></tr>
<tr height="75px"></tr>
<tr><td></td><td colspan="3"><?= $penggunaanggaran->nama ?></td></tr>
<tr><td></td><td colspan="3"><?= $penggunaanggaran->pangkat_sk ?> / <?= $penggunaanggaran->gol_sk ?></td></tr>
<tr><td></td><td colspan="3">NIP. <?= $penggunaanggaran->nip ?></td></tr>
</footer>
</div>

</html>