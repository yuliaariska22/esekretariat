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
h1{
    text-transform: uppercase;
}
table{
    font-size: 12pt;
    border-collapse: collapse;
}
.hurufkapital{
    text-transform: uppercase;
}
.outline{
    outline-style: double;
    }
.kapital{
    text-transform: uppercase;
}
.kotak2 {
    border-style: solid;
  width: auto;
  height: auto;
  float:left;
  -ms-transform: skewX(-20deg); /* Support untuk IE 9 */
  -webkit-transform: skewX(-20deg); /* support untuk Safari */
  transform: skewX(-20deg); /* default syntax */
}
</style>
<table align="center" style="width:100%">

<?php
$total = 0;
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


<?php
                    $no = 1 ;
                    foreach ($cetakdetailsppd as $item)
                    {

                        $pengeluaran = $this->db->query("SELECT * FROM tbl_daftarpengeluaranrill JOIN tbl_ssh_sppd ON tbl_ssh_sppd.id_ssh_sppd=tbl_daftarpengeluaranrill.uraian where id_detailsppd=$item->id_detailsppd");
                
                        $totalpengeluaran = 0;
                        $persen = 0;
                        if ($pengeluaran->result() != NULL) {
                        foreach ($pengeluaran->result() as $pengeluaran) : ?>
                        <?php
                            if($pengeluaran->bukti=="Ada"){
                                $persen=1;
                            }else{
                                $persen=0.3;
                            }
                            $totalpengeluaran += $pengeluaran->harga_rill*$pengeluaran->jumlah*$persen;
                        ?>
                        <?php endforeach;
                        }else{
                        }

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
<table>
<tr height="1px"></td><td></tr>
<tr>
<td>
<b>KWITANSI (TANDA PEMBAYARAN)</b>
</td>
<td style="width:30%">
    <table class="outline">
        <tr><td>Tanggal</td> <td>:</td><td>............</td></tr>
        <tr><td>Nomor</td> <td>:</td> <td><?= $item->no_bku ?></td></tr>
        <tr><td>Kode Kegiatan</td> <td>:</td> <td>............</td></tr>
        <tr><td>Kode Belanja</td> <td>:</td> <td>............</td></tr>
    </table>
</td>
</tr>
</table>
</head>
<body>


<p class="kapital">SUDAH TERIMA DARI : BENDAHARA PENGELUARAN <?= $kopsuratsppd->nama_opd?> KOTA PADANGSIDIMPUAN</p>



<table align="center" style="width:100%">
<tr>
    <td style="width:25%">Uang Sebanyak</td>
    <td style=""><div class="kotak2"> 
    &nbsp;<?php echo terbilang($totalpengeluaran); ?> rupiah &nbsp;        
    </div>
</td>
</tr>
<tr>
    <td><?= 'Rp. '.number_format(($totalpengeluaran),0,'.','.').',-'; ?></td>
    <td></td>
</tr>
<tr>
    <td valign="top">Yaitu Untuk</td>
    <td align="justify">Pembayaran Belanja Perjalanan <?= $cetaksppd->dinas?> Daerah An <?= $item->nama ?> dalam rangka 
                    <?php
                    $no = 1 ;
                    foreach ($cetakdetailsppdtujuan as $item1)
                    {
                    ?>
                    <?=$item1->tujuan ?>
                    <?php
                            $no++;
                    }
                    ?>  
    sesuai dengan bukti terlampir.</td>
</tr>
</table>
<tr><hr  color="black" size="2px"/></tr>

<div style="page-break-inside:avoid;">
<table align="center" width="100%">
<tr>
    <td width="30%"></td>
    <td width="30%"></td>
    <td >Padangsidimpuan, <?php echo format_indo(date('Y-m-d'));?></td>
</tr>
<tr><td>
<br>
</td></tr>
<tr>
    <td width="30%">Mengetahui</td>
    <td width="30%">Dibayar Oleh</td>
    <td width="40%">Penerima</td>
</tr>
<tr>
    <td>PPTK</td>
    <td>Bendahara</td>
    <td></td>
</tr>
<tr height="75px"></tr>
<tr>
    <td><?= $cetaksppd->nama?></td>
    <td><?= $bendahara->nama ?></td>  
    <td><?= $item->nama ?></td>
    <td></td>
</tr>

<tr>
    <td><?= $cetaksppd->pangkat?> / <?= $cetaksppd->gol?></td>
    <td><?= $bendahara->pangkat_sk ?> / <?= $bendahara->gol_sk ?></td>
    <td><?= $pangkat_laporan ?> / <?= $golongan_laporan ?></td>
    <td></td>
</tr>

<tr>
    <td>NIP. <?= $cetaksppd->nip?></td>
    <td>NIP. <?= $bendahara->nip ?></td>
    <td>NIP. <?= $item->nip ?></td>  
</tr>

<tr><td>
<br><br>
</td></tr>
<tr>
    <td width="35%"></td>
    <td >Disetujui</td>
    <td width="35%"></td>
</tr>
<tr>
    <td width="35%"></td>
    <td >Pengguna Anggaran</td>
    <td width="35%"></td>
</tr>
<tr height="75px"></tr>
<tr>
    <td width="35%"></td>
    <td ><?= $penggunaanggaran->nama ?></td>
    <td width="35%"></td>
</tr>

<tr>
    <td width="35%"></td>
    <td ><?= $penggunaanggaran->pangkat_sk ?> / <?= $penggunaanggaran->gol_sk ?></td>
    <td width="35%"></td>
</tr>

<tr>

    <td width="35%"></td>
    <td >NIP. <?= $penggunaanggaran->nip ?></td>
    <td width="35%"></td>
</tr>

</table>
</footer>
</div>

</html>

<?php
                            $no++;
                    }
                    ?> 









   
