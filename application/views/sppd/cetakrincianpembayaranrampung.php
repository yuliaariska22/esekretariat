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
<?php
                    $no = 1 ;
                    $total = 0;
                    foreach ($cetakdetailbiaya as $item)
                    {
                      $total += $item->harga_rill*$item->jumlah; ?>
                    <?php
                            $no++;
                    }
?>  
<?php

function penyebut($nilai) {
$nilai = abs($nilai);
$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
$temp = "";
if ($nilai < 12) {
    $temp = " ". $huruf[$nilai];
} else if ($nilai <20) {
    $temp = penyebut($nilai-10). "  belas";
} else if ($nilai <100) {
    $temp = penyebut($nilai/10). "  puluh". penyebut($nilai % 10);
} else if ($nilai <200) {
    $temp = " seratus" . penyebut($nilai - 100);
} else if ($nilai <1000) {
    $temp = penyebut($nilai/100). "  ratus". penyebut($nilai % 100);
} else if ($nilai <2000) {
    $temp = " seribu" . penyebut($nilai - 1000);
} else if ($nilai <1000000) {
    $temp = penyebut($nilai/1000). "  ribu". penyebut($nilai % 1000);
} else if ($nilai <1000000000) {
    $temp = penyebut($nilai/1000000). "  juta". penyebut($nilai % 1000000);
} else if ($nilai <1000000000000) {
    $temp = penyebut($nilai/1000000000). "  miliar". penyebut(fmod($nilai % 1000000000));
} else if ($nilai <1000000000000000) {
    $temp = penyebut($nilai/1000000000000). "  triliun". penyebut(fmod($nilai % 1000000000000));
}
return $temp;
}

function terbilang($nilai) {
    if ($nilai<0) {
        $hasil = "minus ". trim(penyebut($nilai));
    } else {
        $hasil = trim(penyebut($nilai));
    } return $hasil;
}
$angka = ceil($total);
$angka = round($angka,-3);
?>
<table align="center">
<tr>
<td>
<h3 class="jarak-lh" align="center">RINCIAN PERHITUNGAN SPPD RAMPUNG</h3>
<td>
</tr>
<tr>
</tr>
</table>
<br>
<table>
<tr><td>Lampiran SPD No.</td><td>:</td><td> <?= $cetaksppd->no_sppd ?></td></tr>
<tr><td>Tanggal</td><td>:</td><td><?php echo format_indo(date('Y-m-d'));?></td></tr>
<tr><td>Tujuan</td><td>:</td><td><?= $cetaksppd->alamat_tujuan ?>, <?= $cetaksppd->kota_tujuan ?></td></tr>
<table>
</head>

<body>
<br>
<br>
<table width="100%" border="1">
<tr><td align="center" rowspan="2">No</td><td align="center" rowspan="2">Perincian Biaya</td><td align="center" rowspan="2">SPD sesuai Standard Harga</td><td align="center" colspan="3">SPD dengan Bukti Pengeluaran</td><td align="center" rowspan="2">Keterangan</td></tr>
<tr><td align="center">Biaya(Rp.)</td><td align="center"> Jmlh<br>hari</td><td align="center">Jumlah(Rp.)</td></tr>
<?php
                    $no = 1 ;
                    $total = 0;
                    $persen = 0;
                    foreach ($cetakdetailbiaya as $item)
                    {
                        if($item->bukti=="Ada"){
                            $persen = 1;
                        }else{
                            $persen = 0.3;
                        }
                        $total += $item->harga_rill*$item->jumlah*$persen;
                    ?>
                    <tr>
<td align="center"><?= $no?></td>
<td align="left"><?= $item->jenis_pengeluaran ?> <?= $item->keterangan ?></td>
<td align="right"><?= 'Rp. '.number_format(($item->harga),0,'.','.').',-'; ?> / <?= $item->satuan ?></td>
<td align="right"><?= 'Rp. '.number_format(($item->harga_rill*$persen),0,'.','.').',-'; ?></td>
<td align="center"><?= ($item->jumlah)?></td>
<td align="right"><?= 'Rp. '.number_format(($item->harga_rill*$item->jumlah*$persen),0,'.','.').',-'; ?></td>
<td align="right"></td>
</tr><?php
                            $no++;
                    }
                    ?>   
<tr>
<td align="center" colspan="5">Jumlah Total</td>
<td align="right"><?= 'Rp. '.number_format(($total),0,'.','.').',-'; ?></td>
<td align="right"></td>
</tr>
</table>

<br><br>

<table width="100%">
<tr>
<td width="60%"></td>
<td>Padangsidimpuan, <?php echo format_indo(date('Y-m-d'));?></td>
</tr>

<tr>
<td width="60%"></td>
<td>Telah menerima jumlah uang sebesar</td>
</tr>

<tr>
<td width="60%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= 'Rp. '.number_format(($total),0,'.','.').',-'; ?></td>
</tr>

<tr>
<td width="60%"><br></td>
</tr>

<tr>
<td width="60%"></td>
<td>dibayarkan oleh :</td>
</tr>

<tr>
<td width="60%">Pelaksana SPD</td>
<td>Bendahara Pengeluaran</td>
</tr>

<tr>
<td width="60%"></td>
<td><?= $kopsuratsppd->nama_opd ?></td>
</tr>

<tr height="60px">
</tr>

<tr>
<td width="60%"><?= $pelaksana->nama ?></td>
<td><?= $bendahara->nama ?></td>
</tr>

<tr>
<td width="60%">NIP. <?= $pelaksana->nip ?></td>
<td>NIP. <?= $bendahara->nip ?></td>
</tr>
</table>

<div style="page-break-inside:avoid;">
<footer>


<hr><hr>
<table align="center">
<tr><td colspan="3" align="center">PERHITUNGAN SPD RAMPUNG</td></tr>
<tr><td colspan="3" align="center"><BR></td></tr>
</table>
<br><br>
<table width="100%">
<tr>
<td width="60%">Ditetapkan sejumlah</td>
<td><?= 'Rp. '.number_format(($total),0,'.','.').',-'; ?></td>
</tr>


<tr>
<td width="60%"><br></td>
</tr>

<tr>
<td width="60%">Mengetahui :</td>
<td></td>
</tr>

<tr>
<td width="60%">Pengguna Anggaran</td>
<td>Disetujui oleh PPTK :</td>
</tr>

<tr>
<td width="60%"><?= $kopsuratsppd->nama_opd ?></td>
<td></td>
</tr>

<tr>
<td width="60%">Kota Padangsidimpuan,</td>
<td></td>
</tr>

<tr height="60px">
</tr>

<tr>
<td width="60%"><?= $penggunaanggaran->nama ?></td>
<td><?= $cetaksppd->nama ?></td>
</tr>

<tr>
<td width="60%"><?= $penggunaanggaran->pangkat_sk ?> / (<?= $penggunaanggaran->gol_sk ?>)</td>
<td><?= $cetaksppd->pangkat ?> / (<?= $cetaksppd->gol ?>)</td>
</tr>

<tr>
<td width="60%">NIP. <?= $penggunaanggaran->nip ?></td>
<td>NIP. <?= $cetaksppd->nip ?></td>
</tr>
</table>

</footer>
</div>

</html>