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
</style>
<table align="center">
<h3 class="jarak-lh" align="center">REKAPITULASI TANAH MILIK PEMERINTAH KOTA PADANGSIDIMPUAN</h1>
<h4 class="jarak-lh" align="center"><?= format_indo(date($tanggal_mulai))?> - <?= format_indo(date($tanggal_sampai))?></h4>

<table>
</head>

<body>
<br>

<table border="1" align="center" width="95%">
                    <tr>
                        <th rowspan="3">No</th>
                        <th rowspan="2" colspan="3">Saldo Awal <br> Per <?= format_indo(date($tanggal_mulai))?></th>        
                        <th colspan="6">Koreksi</th>          
                        <th colspan="6">Mutasi</th>   
                        <th rowspan="2" colspan="3">Saldo Akhir <br> Per <?= format_indo(date($tanggal_sampai))?></th>  
                    </tr>
                    <tr>
                        <th colspan="3">Berkurang</th>                        
                        <th colspan="3">Bertambah</th>
                        <th colspan="3">Berkurang</th>                        
                        <th colspan="3">Bertambah</th>
                       
                    </tr>
                    <tr>
                        <th>UNIT</th>
                        <th>LUAS</th>
                        <th>NILAI</th>
                        <th>UNIT</th>
                        <th>LUAS</th>
                        <th>NILAI</th>
                        <th>UNIT</th>
                        <th>LUAS</th>
                        <th>NILAI</th>
                        <th>UNIT</th>
                        <th>LUAS</th>
                        <th>NILAI</th>
                        <th>UNIT</th>
                        <th>LUAS</th>
                        <th>NILAI</th>
                        <th>UNIT</th>
                        <th>LUAS</th>
                        <th>NILAI</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th> 
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th> 
                        <th>9</th>
                        <th>10</th>
                        <th>11</th>                        
                        <th>12</th>
                        <th>13</th>
                        <th>14</th> 
                        <th>15</th>
                        <th>16</th>
                        <th>17</th>                        
                        <th>18</th>
                        <th>19</th>
                    </tr>
                </thead>
                <?php
                    $no = 1 ;

                    $total_saldo_awal_unit = 0;
                    $total_saldo_awal_luas = 0;
                    $total_saldo_awal_nilai = 0;
                    
                    $total_kk_unit = 0;
                    $total_kk_luas = 0;
                    $total_kk_nilai = 0;

                    $total_kt_unit = 0;
                    $total_kt_luas = 0;
                    $total_kt_nilai = 0;

                    $total_mk_unit = 0;
                    $total_mk_luas = 0;
                    $total_mk_nilai = 0;

                    $total_mt_unit = 0;
                    $total_mt_luas = 0;
                    $total_mt_nilai = 0;

                    $total_saldo_akhir_unit = 0;
                    $total_saldo_akhir_luas = 0;
                    $total_saldo_akhir_nilai = 0;

                    foreach ($hasil as $item)
                    {
                      
                    ?>
                    <?php
                        $saldo_akhir_unit = $item->awal-$item->awal_kurang+$item->tambah+$item->tambah_baru-$item->kurang+$item->awal_kt_unit-$item->awal_kurang_kt_unit-$item->awal_kk_unit-$item->awal_kurang_kk_unit;
                        $saldo_akhir_luas = $item->awal_luas-$item->awal_kurang_luas+$item->tambah_luas+$item->tambah_baru_luas-$item->kurang_luas+$item->awal_kt_luas-$item->awal_kurang_kt_luas-$item->awal_kk_luas-$item->awal_kurang_kk_luas;
                        $saldo_akhir_nilai = $item->awal_nilai-$item->awal_kurang_nilai+$item->tambah_nilai+$item->tambah_baru_nilai-$item->kurang_nilai+$item->awal_kt_nilai-$item->awal_kurang_kt_nilai-$item->awal_kk_nilai-$item->awal_kurang_kk_nilai;
                    ?>
                    <tr>
                        <td align="center"><?= $no;?></td>
                       
                        <td align="center"><?= $item->awal-$item->awal_kurang?></td>
                        <td align="center"><?= $item->awal_luas-$item->awal_kurang_luas?></td>
                        <td align="right"><?=  number_format($item->awal_nilai-$item->awal_kurang_nilai);?></td>
                        
                        <td align="center"><?= $item->awal_kk_unit-$item->awal_kurang_kk_unit?></td>
                        <td align="center"><?= $item->awal_kk_luas-$item->awal_kurang_kk_luas?></td>
                        <td align="right"><?= number_format($item->awal_kk_nilai-$item->awal_kurang_kk_nilai);?></td>

                        <td align="center"><?= $item->awal_kt_unit-$item->awal_kurang_kt_unit?></td>
                        <td align="center"><?= $item->awal_kt_luas-$item->awal_kurang_kt_luas?></td>
                        <td align="right"><?= number_format($item->awal_kt_nilai-$item->awal_kurang_kt_nilai);?></td>

                        <td align="center"><?= $item->kurang?></td>
                        <td align="center"><?= $item->kurang_luas?></td>
                        <td align="right"><?= number_format($item->kurang_nilai);?></td>
                        

                        <td align="center"><?= $item->tambah+$item->tambah_baru?></td>
                        <td align="center"><?= $item->tambah_luas+$item->tambah_baru_luas?></td>
                        <td align="right"><?= number_format($item->tambah_nilai+$item->tambah_baru_nilai);?></td>
                        
                        

                        <td align="center"><?= $saldo_akhir_unit?></td>
                        <td align="center"><?= $saldo_akhir_luas?></td>
                        <td align="right"><?= number_format($saldo_akhir_nilai);?></td>
                      
                       
                    </tr>
                    <?php
                            $no++; 
                            
                            $total_saldo_awal_unit += $item->awal-$item->awal_kurang;
                            $total_saldo_awal_luas += $item->awal_luas-$item->awal_kurang_luas;
                            $total_saldo_awal_nilai += $item->awal_nilai-$item->awal_kurang_nilai;

                            $total_kk_unit += $item->awal_kk_unit-$item->awal_kurang_kk_unit;
                            $total_kk_luas += $item->awal_kk_luas-$item->awal_kurang_kk_luas;
                            $total_kk_nilai += $item->awal_kk_nilai-$item->awal_kurang_kk_nilai;
        
                            $total_kt_unit += $item->awal_kt_unit-$item->awal_kurang_kt_unit;
                            $total_kt_luas += $item->awal_kt_luas-$item->awal_kurang_kt_luas;
                            $total_kt_nilai += $item->awal_kt_nilai-$item->awal_kurang_kt_nilai;

                            $total_mk_unit += $item->kurang;
                            $total_mk_luas += $item->kurang_luas;
                            $total_mk_nilai += $item->kurang_nilai;
        
                            $total_mt_unit += $item->tambah+$item->tambah_baru;
                            $total_mt_luas += $item->tambah_luas+$item->tambah_baru_luas;
                            $total_mt_nilai += $item->tambah_nilai+$item->tambah_baru_nilai;
        
                            $total_saldo_akhir_unit += $saldo_akhir_unit;
                            $total_saldo_akhir_luas += $saldo_akhir_luas;
                            $total_saldo_akhir_nilai += $saldo_akhir_nilai;
                    }
                    ?>
                </tbody>
                <tr>
                        <td align="center" colspan="1">JUMLAH</td> 
                        <td align="center"><?= $total_saldo_awal_unit ?></td>
                        <td align="center"><?= $total_saldo_awal_luas ?></td>
                        <td align="right"><?= number_format($total_saldo_awal_nilai);?></td>
                        <td align="center"><?= $total_kk_unit ?></td>
                        <td align="center"><?= $total_kk_luas ?></td>                        
                        <td align="right"><?= number_format($total_kk_nilai);?></td>
                        <td align="center"><?= $total_kt_unit ?></td>
                        <td align="center"><?= $total_kt_luas ?></td>
                        <td align="right"><?= number_format($total_kt_nilai);?></td>
                        <td align="center"><?= $total_mk_unit ?></td>
                        <td align="center"><?= $total_mk_luas ?></td>                        
                        <td align="right"><?= number_format($total_mk_nilai);?></td>
                        <td align="center"><?= $total_mt_unit ?></td>
                        <td align="center"><?= $total_mt_luas ?></td>
                        <td align="right"><?= number_format($total_mt_nilai);?></td>
                        <td align="center"><?= $total_saldo_akhir_unit ?></td>                        
                        <td align="center"><?= $total_saldo_akhir_luas ?></td>     
                        <td align="right"><?= number_format($total_saldo_akhir_nilai);?></td>     
                       
                </tr>
    
            </table>
            <br><b> KETERANGAN </b>

<?php
 foreach ($jumlah_tanah_jalan as $item)
 {
    $total_jumlah_tanah_jalan=$item->awal-$item->awal_kurang+$item->tambah+$item->tambah_baru-$item->kurang+$item->awal_kt_unit-$item->awal_kurang_kt_unit-$item->awal_kk_unit-$item->awal_kurang_kk_unit;
 }

 foreach ($jumlah_tanah_bangunan as $item)
 {
    $total_jumlah_tanah_bangunan=$item->awal-$item->awal_kurang+$item->tambah+$item->tambah_baru-$item->kurang+$item->awal_kt_unit-$item->awal_kurang_kt_unit-$item->awal_kk_unit-$item->awal_kurang_kk_unit;
 }

 foreach ($jumlah_tanah_bangunan_air_irigasi as $item)
 {
    $total_jumlah_tanah_bangunan_air_irigasi=$item->awal-$item->awal_kurang+$item->tambah+$item->tambah_baru-$item->kurang+$item->awal_kt_unit-$item->awal_kurang_kt_unit-$item->awal_kk_unit-$item->awal_kurang_kk_unit;
 }

 foreach ($sertifikat as $item)
 {
    $total_jumlah_sertifikat=$item->awal-$item->awal_kurang+$item->tambah+$item->tambah_baru-$item->kurang+$item->awal_kt_unit-$item->awal_kurang_kt_unit-$item->awal_kk_unit-$item->awal_kurang_kk_unit;
 }

 
 foreach ($sppt as $item)
 {
    $total_jumlah_sppt=$item->awal-$item->awal_kurang+$item->tambah+$item->tambah_baru-$item->kurang+$item->awal_kt_unit-$item->awal_kurang_kt_unit-$item->awal_kk_unit-$item->awal_kurang_kk_unit;
 }

 
 foreach ($ajb as $item)
 {
    $total_jumlah_ajb=$item->awal-$item->awal_kurang+$item->tambah+$item->tambah_baru-$item->kurang+$item->awal_kt_unit-$item->awal_kurang_kt_unit-$item->awal_kk_unit-$item->awal_kurang_kk_unit;
 }

 
 foreach ($aphdg as $item)
 {
    $total_jumlah_aphdg=$item->awal-$item->awal_kurang+$item->tambah+$item->tambah_baru-$item->kurang+$item->awal_kt_unit-$item->awal_kurang_kt_unit-$item->awal_kk_unit-$item->awal_kurang_kk_unit;
 }

 
 foreach ($pgr as $item)
 {
    $total_jumlah_pgr=$item->awal-$item->awal_kurang+$item->tambah+$item->tambah_baru-$item->kurang+$item->awal_kt_unit-$item->awal_kurang_kt_unit-$item->awal_kk_unit-$item->awal_kurang_kk_unit;
 }

 
 foreach ($sp as $item)
 {
    $total_jumlah_sp=$item->awal-$item->awal_kurang+$item->tambah+$item->tambah_baru-$item->kurang+$item->awal_kt_unit-$item->awal_kurang_kt_unit-$item->awal_kk_unit-$item->awal_kurang_kk_unit;
 }

 
 foreach ($tbai as $item)
 {
    $total_jumlah_tbai=$item->awal-$item->awal_kurang+$item->tambah+$item->tambah_baru-$item->kurang+$item->awal_kt_unit-$item->awal_kurang_kt_unit-$item->awal_kk_unit-$item->awal_kurang_kk_unit;
 }

 
 foreach ($ttd as $item)
 {
    $total_jumlah_ttd=$item->awal-$item->awal_kurang+$item->tambah+$item->tambah_baru-$item->kurang+$item->awal_kt_unit-$item->awal_kurang_kt_unit-$item->awal_kk_unit-$item->awal_kurang_kk_unit;
 }
 
 foreach ($hibah as $item)
 {
    $total_jumlah_hibah=$item->awal-$item->awal_kurang+$item->tambah+$item->tambah_baru-$item->kurang+$item->awal_kt_unit-$item->awal_kurang_kt_unit-$item->awal_kk_unit-$item->awal_kurang_kk_unit;
 }

 ?>

            <table>
            <tr>
                <td>1. </td>
                <td>TANAH JALAN</td>
                <td>: <?=  $total_jumlah_tanah_jalan?></td>
            </tr>
            <tr>
                <td>2. </td>
                <td>TANAH BANGUNAN</td>
                <td>: <?= $total_jumlah_tanah_bangunan ?></td>
            </tr>
            <tr>
                <td>3. </td>
                <td>TANAH BANGUNAN AIR IRIGASI</td>
                <td>: <?= $total_jumlah_tanah_bangunan_air_irigasi ?></td>
            </tr>

            <tr>
                <td colspan="2"><b>JUMLAH</td>
           
                <td>: <?= $total_jumlah_tanah_jalan+$total_jumlah_tanah_bangunan+$total_jumlah_tanah_bangunan_air_irigasi ?></td>  </tr>
            </table>

            <br><b> DARI JUMLAH TANAH SEBESAR <?= $total_jumlah_tanah_jalan+$total_jumlah_tanah_bangunan+$total_jumlah_tanah_bangunan_air_irigasi ?> UNIT YANG MEMILIKI DOKUMEN ADALAH : </b>
            <table>
            <tr>
                <td>1. </td>
                <td>SERTIFIKAT</td>
                <td>: <?= $total_jumlah_sertifikat ?></td>
            </tr>
            <tr>
                <td>2. </td>
                <td>SURAT PERNYATAAN PENYERAHAN TANAH</td>
                <td>: <?= $total_jumlah_sppt ?></td>
            </tr>
            <tr>
                <td>3. </td>
                <td>AKTA JUAL BELI</td>
                <td>: <?= $total_jumlah_ajb ?></td>
            </tr>
            <tr>
                <td>4. </td>
                <td>AKTA PELEPASAN HAK DENGAN GANTI</td>
                <td>: <?= $total_jumlah_aphdg ?></td>
            </tr>
            <tr>
                <td>5. </td>
                <td> PENYERAHAN GANTI RUGI</td>
                <td>: <?= $total_jumlah_pgr ?></td>
            </tr>
            <tr>
                <td>6. </td>
                <td>SURAT PERJANJIAN</td>
                <td>: <?= $total_jumlah_sp ?></td>
            </tr>
            
            <tr>
                <td>7. </td>
                <td>TANAH BANGUNAN AIR IRIGASI</td>
                <td>: <?= $total_jumlah_tbai ?></td>
            </tr>

            <tr>
                <td>8. </td>
                <td>TANAH TANPA DOKUMEN</td>
                <td>: <?= $total_jumlah_ttd ?></td>
            </tr>
            
            <tr>
                <td>9. </td>
                <td>HIBAH</td>
                <td>: <?= $total_jumlah_hibah ?></td>
            </tr>

            <?php 
            $total = $total_jumlah_sertifikat
            +$total_jumlah_sppt
            +$total_jumlah_ajb
            +$total_jumlah_aphdg
            +$total_jumlah_pgr
            +$total_jumlah_sp
            +$total_jumlah_tbai
            +$total_jumlah_ttd
            +$total_jumlah_hibah
            ;
            ?>
            <tr>
                <td colspan="2"><b>JUMLAH</td>
                <td><b> : <?=$total?></td>
            </tr>
            </table>

            <table align="right" width="35%">
            <tr><td><b>Padangsidimpuan,</td></tr>
            <tr><td><b>KEPALA BIDANG PENGELOLAAN ASET </td></tr>
            <tr><td><b>KOTA PADANGSIDIMPUAN</td></tr>
            <tr height="75px"><td></td></tr>
            <tr><td><b>SORITUA PARDAMEAN, S.E</td></tr>
            <tr><td><b>PENATA Tk. I</td></tr>
            <tr><td><b>NIP. 19760405 200901 1 001</td></tr>
            </table>



</body>



</html>









   
