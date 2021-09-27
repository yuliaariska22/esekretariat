<html>
<head>
<style>
@media print 
{
   @page 

   {
    size: 12.99in 8.27in ;
  }
}
.outline{
    outline-style: double;
    }
.jarak-lh{
  line-height:5px;
  
  text-transform: uppercase;
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

.capslock{
    text-transform: uppercase;
}
</style>
<?php
                    $no = 1 ;
                    foreach ($cetakdetailsppd as $item)
                    {

                        $pengeluaran = $this->db->query("SELECT * FROM tbl_daftarpengeluaranrill JOIN tbl_ssh ON tbl_ssh.id_ssh=tbl_daftarpengeluaranrill.uraian where id_detailsppd=$item->id_detailsppd");
                
                        $totalpengeluaran = 0;
                        $persen = 0;
                        foreach ($pengeluaran->result() as $pengeluaran) : ?>
                        <?php
                            if($pengeluaran->bukti=="Ada"){
                                $persen=1;
                            }else{
                                $persen=0.3;
                            }
                            $totalpengeluaran += $pengeluaran->Hargasatuan_ssh*$pengeluaran->jumlah*$persen;
                        ?>
                        <?php endforeach;
                            $no++;
                    }
                    ?> 
<table>
<tr height="1px"></td><td></tr>
<tr>
<td style="width:85%">
</td>
<td >
    <table class="outline">
        <tr><td>Tanggal</td> <td>:</td><td>............</td></tr>
        <tr><td>Nomor</td> <td>:</td> <td>............</td></tr>
        <tr><td>Kode Kegiatan</td> <td>:</td> <td>............</td></tr>
        <tr><td>Kode Belanja</td> <td>:</td> <td>............</td></tr>
    </table>
</td>
</tr>
</table>

<table align="center">
<tr>
<td>
    <br>
<p class="jarak-lh" align="center">DAFTAR PEMBAYARAN SPPD DALAM DAERAH</p>
<?php
                    $no = 1 ;
                    foreach ($cetakdetailsppdtujuan as $item)
                    {
                    ?>
                    <p class="capslock" align="center">Dalam Rangka <?= $item->tujuan ?></p>
<?php
                            $no++;
                    }
                    ?> 
<p class="jarak-lh" align="center"><?= $kopsuratsppd->nama_opd?> KOTA PADANGSIDIMPUAN</p>
<p class="jarak-lh" align="center">TAHUN ANGGARAN <?php echo date('Y');?></p>
<p class="jarak-lh" align="center">DENGAN JUMLAH <?= $no ?> ORANG, 
SELAMA 
<?php 
$tgl1 = new DateTime("$cetaksppd->tanggal_berangkat");
$tgl2 = new DateTime("$cetaksppd->tanggal_kembali");
$jarak = $tgl2->diff($tgl1);

echo $jarak->d+1;?> HARI</p>
<td>
</tr>
<tr>
</tr>
</table>

</head>

<body>
    <br>
<table width="100%" border="1">
    <tr>
        <td align="center" rowspan="2">No</td>
        <td align="center" rowspan="2">Nama/NIP/GOL</td>
        <td align="center" rowspan="2">Jabatan</td>
        <td align="center" colspan="3">Rincian</td>
        <td align="center" rowspan="2">Tanda Tangan</td>
    </tr>
    <tr>
        <td align="center">Jumlah Hari</td>
        <td align="center">Besaran <br> SPPD/HARI (Rp)</td>
        <td align="center">Jumlah <br> YANG DITERIMA (Rp) </td>
    </tr>
    <?php
                    $no = 1 ;
                    foreach ($cetakdetailsppd as $item)
                    {

                        $pengeluaran = $this->db->query("SELECT * FROM tbl_daftarpengeluaranrill JOIN tbl_ssh ON tbl_ssh.id_ssh=tbl_daftarpengeluaranrill.uraian where id_detailsppd=$item->id_detailsppd");
                
                        $totalpengeluaran = 0;
                        $persen = 0;
                        foreach ($pengeluaran->result() as $pengeluaran) : ?>
                        <?php
                            if($pengeluaran->bukti=="Ada"){
                                $persen=1;
                            }else{
                                $persen=0.3;
                            }
                            $totalpengeluaran += $pengeluaran->Hargasatuan_ssh*$pengeluaran->jumlah*$persen;
                        ?>
                        <?php endforeach;

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
         <td align="center"><?= $no ?>.</td>
         <td><?= $item->nama ?> <br> <?= $item->nip ?> <br> <?= $golongan_laporan ?></td>
         <td><?= $jabatan_laporan ?></td>
         <td  align="center"><?= $jarak->d+1?></td>
         <td  align="center"><?= 'Rp. '.number_format((150000),0,'.','.').',-'; ?></td>
         <td align="center"><?= 'Rp. '.number_format((150000*($jarak->d+1)),0,'.','.').',-'; ?></td>
         <td></td>
    </tr>
    <?php
                            $no++;
                    }
                    ?> 
</table>
</body>

<br>
<div style="page-break-inside:avoid;">
<footer>
<table width="100%">
<tr>
    <td></td>
    <td></td>
    <td>Padangsidimpuan, <?php echo format_indo(date('Y-m-d'));?></td>
</tr>


<tr>
    <td>Disetujui :</td>
    <td>Mengetahui : </td>
    <td>Dibayar Oleh :</td>
</tr>


<tr>
    <td>PIMPINAN PERANGKAT DAERAH</td>
    <td>PEJABAT PELAKSANA TEKNIS KEGIATAN</td>
    <td>BENDAHARA PENGELUARAN<td>
</tr>


<tr height="70px">
    <td></td>
    <td></td>
    <td></td>
</tr>


<tr>
    <td><?= $penggunaanggaran->nama ?></td>
    <td><?= $cetaksppd->nama?></td>
    <td><?= $bendahara->nama ?></td>
</tr>


<tr>
    <td>NIP. <?= $penggunaanggaran->nip ?></td>
    <td>NIP. <?= $cetaksppd->nip?></td>
    <td>NIP. <?= $bendahara->nip ?></td>
</tr>
</table>
</footer>
</div>

</html>