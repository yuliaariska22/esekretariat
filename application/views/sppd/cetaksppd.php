
                     
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
h2{
    text-transform: uppercase;
}
</style>
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
<div style="page-break-inside:avoid;">
<table align="center">

<tr height="1px"><td></td></tr>
<tr>
<td>
<img src="<?php echo base_url('theme/logopadsim.jpg')?>" width="100px">
<td>
<td>
<h3 class="jarak-lh" align="center">PEMERINTAH KOTA PADANGSIDIMPUAN</h3>
<h2 align="center"><?= $kopsuratsppd->nama_opd ?></h2>
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
<table>
<tr><td width="75%"></td> <td>Kode No</td> <td>:</td> <td>...</td></tr>
<tr><td></td> <td>Nomor</td> <td>:</td> <td><?= $cetaksppd->no_sppd ?></td></tr>
</table>
<p class="jarak-lh" align="center"><u><b>SURAT PERINTAH PERJALANAN DINAS </u></b></p>
<p class="jarak-lh" align="center">(SPPD)</p>
<br>

</div>

<table width="100%" border="1">

<tr><td valign="top" width="50%">1. &nbsp; Pejabat yang memberi perintah</td><td>Kepala <?= $kopsuratsppd->nama_opd ?><br> Kota Padangsidimpuan</td></tr>
<tr><td valign="t op">2. &nbsp; Nama pegawai yang diperintah</td><td><?= $item->nama ?><br> </td></tr>
<tr><td valign="top">3. &nbsp; a. Pangkat dan Golongan <br> &nbsp; &nbsp; &nbsp; b. Jabatan <br> &nbsp; &nbsp; &nbsp; c. Tingkat menurut peraturan perjalanan</td><td><?= $pangkat_laporan?> / <?= $golongan_laporan ?> <br> <?= $jabatan_laporan ?> <br> &nbsp; </td></tr>
<tr><td valign="top">4. &nbsp; Maksud Perjalanan Dinas</td><td> 
<?php
                    $no = 1 ;
                    foreach ($cetakdetailsppdtujuan as $item)
                    {
                    ?>
                    <?=$item->tujuan ?>
                    <?php
                            $no++;
                    }
                    ?>     
<br> </td></tr>
<tr><td valign="top">5. &nbsp; Alat angkut yang dipergunakan</td><td> <?= $cetaksppd->alat_angkut ?><br> </td></tr>
<tr><td valign="top">6. &nbsp; a. Tempat berangkat <br> &nbsp; &nbsp; &nbsp; b. Tempat tujuan</td><td> <?= $cetaksppd->alamat_berangkat ?>,<?= $cetaksppd->kota_berangkat ?><br> <?= $cetaksppd->alamat_tujuan ?>,<?= $cetaksppd->kota_tujuan ?></td></tr>
<tr><td valign="top">7. &nbsp; a. Lama Perjalanan Dinas <br> &nbsp; &nbsp; &nbsp; b. Tanggal berangkat <br> &nbsp; &nbsp; &nbsp; c. Tanggal harus kembali</td><td> <?php 


$tgl1 = new DateTime("$cetaksppd->tanggal_berangkat");
$tgl2 = new DateTime("$cetaksppd->tanggal_kembali");
$jarak = $tgl2->diff($tgl1);

echo $jarak->d+1;?> Hari 

<br> <?php echo format_indo($cetaksppd->tanggal_berangkat);?> <br>  <?php echo format_indo($cetaksppd->tanggal_kembali);?></td></tr>
<tr><td valign="top">8. &nbsp; Pengikut</td><td> <?php
                    $no = 1 ;
                    foreach ($cetakdetailsppdpengikut as $item)
                    {
                    ?>
                    <?=$item->nama ?><br>
                    <?php
                            $no++;
                    }
                    ?>   </td></tr>
<tr><td valign="top">9. &nbsp; Pembebanan Anggaran <br> &nbsp; &nbsp; &nbsp; a. Instansi <br> &nbsp; &nbsp; &nbsp; b. Mata Anggaran </td><td> <br><?= $cetaksppd->instansi?><br><?= $cetaksppd->mataanggaran?> </td></tr>
<tr><td valign="top">10. &nbsp; Keterangan lain-lain</td><td> <?= $cetaksppd->keterangan_lain?><br> </td></tr>
</table>

<div >
<br>
<br>
<br>
<table>
<tr><td width="65%"></td><td width="15%">Ditetapkan di</td> <td width="3%">:</td> <td>Padangsidimpuan</td></tr>
<tr><td></td><td>pada tanggal</td> <td>:</td> <td><?php echo format_indo($cetaksppd->tanggal_sppd);?></td></tr>
<tr><td></td><td><br></td></tr>
<tr><td></td><td colspan="3">KEPALA <?= $kopsuratsppd->nama_opd?> </td></tr>
<tr><td></td><td colspan="3">KOTA PADANGSIDIMPUAN, </td></tr>
<tr height="75px"></tr>
<tr><td></td><td colspan="3"><?= $penggunaanggaran->nama?></td></tr>
<tr><td></td><td colspan="3"><?= $penggunaanggaran->pangkat_sk?> / <?= $penggunaanggaran->gol_sk?></td></tr>
<tr><td></td><td colspan="3">NIP. <?= $penggunaanggaran->nip?></td></tr>
</div>
</table>

<div style="page-break-inside:avoid;">
<table width="100%" height="100%"border="1">
<tr><td width="50%" valign="top"></td> <td valign="top"><br>&nbsp; I. &nbsp; SPPD No. &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $cetaksppd->no_sppd ?><br> &nbsp; &nbsp; &nbsp; &nbsp; Berangkat dari &nbsp; :<br>  &nbsp; &nbsp; &nbsp; &nbsp; <i>(tempat Kedudukan)</i> <br>  &nbsp; &nbsp; &nbsp; &nbsp; pada tanggal  &nbsp;&nbsp;&nbsp; :<br>  &nbsp; &nbsp; &nbsp; &nbsp; Ke  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  :
<center>
<br>Mengetahui :
<br> PEJABAT PELAKSANA TEKNIK KEGIATAN
<br><br><br>
<br> <?= $cetaksppd->nama ?>
<br> <?= $cetaksppd->nip ?>
</center>
</td> </tr>
<tr><td width="50%" valign="top"><br>&nbsp; II. &nbsp; &nbsp; Tiba di &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; pada tanggal &nbsp; : <br> &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; Kepala &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td> <td valign="top"><br>&nbsp; &nbsp; &nbsp; &nbsp; Berangkat dari  &nbsp;:<br> &nbsp; &nbsp; &nbsp; &nbsp; pada tanggal &nbsp;&nbsp; :<br> &nbsp; &nbsp; &nbsp; &nbsp; Kepala  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  :</td></tr>
<tr><td width="50%" valign="top"><br>&nbsp; III. &nbsp; Tiba di &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; pada tanggal &nbsp; : <br> &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; Kepala &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td> <td valign="top"><br>&nbsp; &nbsp; &nbsp; &nbsp; Berangkat dari  &nbsp;:<br> &nbsp; &nbsp; &nbsp; &nbsp; pada tanggal &nbsp;&nbsp; :<br> &nbsp; &nbsp; &nbsp; &nbsp; Kepala  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  :</td></tr>
<tr><td width="50%" valign="top"><br>&nbsp; IV. &nbsp; Tiba di &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; pada tanggal &nbsp; : <br> &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; Kepala &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td> <td valign="top"><br>&nbsp; &nbsp; &nbsp; &nbsp; Berangkat dari  &nbsp;:<br> &nbsp; &nbsp; &nbsp; &nbsp; pada tanggal &nbsp;&nbsp; :<br> &nbsp; &nbsp; &nbsp; &nbsp; Kepala  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  :</td></tr>
<tr><td colspan="2" valign="top">
<br> &nbsp; V. &nbsp; &nbsp; Tiba di &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Padangsidimpuan
<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; pada tanggal &nbsp; : 
<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Telah diperiksa dengan keterangan bahwa perjalanan tersebut di atas benar dilakukan atas perintahnya 
<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; dan semata-mata untuk kepentingan jabatan dalam waktu sesingkat-singkatnya.
<table width="100%">
<tr><td><br></td></tr>
<tr><td width="50%"></td><td colspan="3" >KEPALA <?= $kopsuratsppd->nama_opd ?> </td></tr>
<tr><td></td><td colspan="3">KOTA PADANGSIDIMPUAN, </td></tr>
<tr height="75px"></tr>
<tr><td></td><td colspan="3"><?= $penggunaanggaran->nama ?></td></tr>
<tr><td></td><td colspan="3"><?= $penggunaanggaran->pangkat_sk ?> / <?= $penggunaanggaran->gol_sk ?></td></tr>
<tr><td></td><td colspan="3">NIP. <?= $penggunaanggaran->nip ?></td></tr>
</div>
</table>
</tr>
<tr><td colspan="2" valign="top"> 
<br>VI. &nbsp; &nbsp; Catatan lain-lain :
</tr>
<tr><td colspan="2" valign="top">
<br>VII. &nbsp; &nbsp;PERHATIAN :
<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pejabat yang berwenang menerbitkan SPPD, pegawai yang melakukan perjalanan dinas, para pejabat 
<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; yang mengesahkan tanggal berangkat / tiba, serta bendahara pengeluaran bertanggung jawab 
<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; berdasarkan peraturan-peraturan Keuangan Negara apabila Negara menderita kerugian akibat 
<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; kesalahan, kelalaian, dan kealpaannya.
</tr>
</table>
</div>

<?php
                            $no++;
                    }
                    ?> 
