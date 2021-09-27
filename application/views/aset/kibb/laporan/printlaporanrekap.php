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
<h3 class="jarak-lh" align="center">DAFTAR KENDARAAN DINAS DI LINGKUNGAN PEMERINTAH KOTA PADANGSIDIMPUAN</h1>
<h3 class="jarak-lh" align="center">TAHUN ANGGARAN <?=date("Y", strtotime($tanggal_sampai));?></h1>
<table>
</head>

<body>
<br>

<?php foreach ($hasil as $item){}?>

<table border="1" align="center">
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Nama OPD</th>
                        <th colspan="4">SALDO AWAL PER <br> <?= format_indo(date($tanggal_mulai))?></th>        
                        <th rowspan="2">Total</th>   
                        <th colspan="4">MUTASI BERTAMBAH </th>        
                        <th rowspan="2">Total</th>   
                        <th colspan="4">MUTASI BERKURANG</th>        
                        <th rowspan="2">Total</th>   
                        <th colspan="4">SALDO AKHIR PER <br> <?= format_indo(date($tanggal_sampai))?></th>        
                        <th rowspan="2">Total</th>        
                    </tr>
                    <tr>
                        <th>Roda 2 (Dua)</th>                        
                        <th>Roda 3 (Tiga)</th>
                        <th>Roda 4 (Empat)</th>                        
                        <th>Roda 6 (Enam)</th>   
                        <th>Roda 2 (Dua)</th>                        
                        <th>Roda 3 (Tiga)</th>
                        <th>Roda 4 (Empat)</th>                        
                        <th>Roda 6 (Enam)</th>
                        <th>Roda 2 (Dua)</th>                        
                        <th>Roda 3 (Tiga)</th>
                        <th>Roda 4 (Empat)</th>                        
                        <th>Roda 6 (Enam)</th>
                        <th>Roda 2 (Dua)</th>                        
                        <th>Roda 3 (Tiga)</th>
                        <th>Roda 4 (Empat)</th>                        
                        <th>Roda 6 (Enam)</th>
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
                        <th>20</th> 
                        <th>21</th>
                        <th>22</th>
                    </tr>
                </thead>
                <?php
                    $no = 1 ;
                    
                    $total_saldo_awal_roda_dua = 0;
                    $total_saldo_awal_roda_tiga = 0;
                    $total_saldo_awal_roda_empat = 0;
                    $total_saldo_awal_roda_enam = 0;

                    $total_mutasi_bertambah_roda_dua = 0;
                    $total_mutasi_bertambah_roda_tiga = 0;
                    $total_mutasi_bertambah_roda_empat = 0;
                    $total_mutasi_bertambah_roda_enam = 0;

                    $total_mutasi_berkurang_roda_dua = 0;
                    $total_mutasi_berkurang_roda_tiga = 0;
                    $total_mutasi_berkurang_roda_empat = 0;
                    $total_mutasi_berkurang_roda_enam = 0;

                    
                    $total_saldo_akhir_roda_dua = 0;
                    $total_saldo_akhir_roda_tiga = 0;
                    $total_saldo_akhir_roda_empat = 0;
                    $total_saldo_akhir_roda_enam = 0;
                    foreach ($hasil as $item)
                    {
                        $total_saldo_awal_roda_dua += $item->awal_roda_dua-$item->awal_kurang_roda_dua;
                        $total_saldo_awal_roda_tiga += $item->awal_roda_tiga-$item->awal_kurang_roda_tiga;
                        $total_saldo_awal_roda_empat += $item->awal_roda_empat-$item->awal_kurang_roda_empat;
                        $total_saldo_awal_roda_enam += $item->awal_roda_enam-$item->awal_kurang_roda_enam;

                        $total_mutasi_bertambah_roda_dua += $item->tambah_roda_dua+$item->tambah_baru_roda_dua;
                        $total_mutasi_bertambah_roda_tiga += $item->tambah_roda_tiga+$item->tambah_baru_roda_tiga;
                        $total_mutasi_bertambah_roda_empat += $item->tambah_roda_empat+$item->tambah_baru_roda_empat;
                        $total_mutasi_bertambah_roda_enam += $item->tambah_roda_enam+$item->tambah_baru_roda_enam;

                        $total_mutasi_berkurang_roda_dua += $item->kurang_roda_dua;
                        $total_mutasi_berkurang_roda_tiga += $item->kurang_roda_tiga;
                        $total_mutasi_berkurang_roda_empat += $item->kurang_roda_empat;
                        $total_mutasi_berkurang_roda_enam += $item->kurang_roda_enam;

                        $total_saldo_akhir_roda_dua += ($item->awal_roda_dua-$item->awal_kurang_roda_dua)
                        +($item->tambah_roda_dua+$item->tambah_baru_roda_dua)
                        -($item->kurang_roda_dua);

                        $total_saldo_akhir_roda_tiga += ($item->awal_roda_tiga-$item->awal_kurang_roda_tiga)
                        +($item->tambah_roda_tiga+$item->tambah_baru_roda_tiga)
                        -($item->kurang_roda_tiga);

                        $total_saldo_akhir_roda_empat += ($item->awal_roda_empat-$item->awal_kurang_roda_empat)
                        +($item->tambah_roda_empat+$item->tambah_baru_roda_empat)
                        -($item->kurang_roda_empat);

                        $total_saldo_akhir_roda_enam += ($item->awal_roda_enam-$item->awal_kurang_roda_enam)
                        +($item->tambah_roda_enam+$item->tambah_baru_roda_enam)
                        -($item->kurang_roda_enam);
                        
                    ?>
                    <tr>
                        <td align="center"><?= $no;?></td>
                        <td ><?= $item->nama_opd;?></td>
                        <td align="center"><?= $item->awal_roda_dua-$item->awal_kurang_roda_dua?></td>
                        <td align="center"><?= $item->awal_roda_tiga-$item->awal_kurang_roda_tiga?></td>
                        <td align="center"><?= $item->awal_roda_empat-$item->awal_kurang_roda_empat?></td>
                        <td align="center"><?= $item->awal_roda_enam-$item->awal_kurang_roda_enam?></td>

                        <?php $total_saldo_awal = $item->awal_roda_dua-$item->awal_kurang_roda_dua
                                                +$item->awal_roda_tiga-$item->awal_kurang_roda_tiga
                                                +$item->awal_roda_empat-$item->awal_kurang_roda_empat
                                                +$item->awal_roda_enam-$item->awal_kurang_roda_enam   ?>

                        <td align="center"><?= $total_saldo_awal ?> </td>  

                        <td align="center"><?= $item->tambah_roda_dua+$item->tambah_baru_roda_dua?></td>
                        <td align="center"><?= $item->tambah_roda_tiga+$item->tambah_baru_roda_tiga?></td>
                        <td align="center"><?= $item->tambah_roda_empat+$item->tambah_baru_roda_empat?></td>
                        <td align="center"><?= $item->tambah_roda_enam+$item->tambah_baru_roda_enam?></td>

                        <?php 
                        $total_mutasi_roda_dua = $item->tambah_roda_dua+$item->tambah_baru_roda_dua;
                        $total_mutasi_bertambah = $item->tambah_roda_dua+$item->tambah_baru_roda_dua
                                                    +$item->tambah_roda_tiga+$item->tambah_baru_roda_tiga
                                                    +$item->tambah_roda_empat+$item->tambah_baru_roda_empat
                                                    +$item->tambah_roda_enam+$item->tambah_baru_roda_enam?>

                        <td align="center"><?= $total_mutasi_bertambah ?> </td>

                        <td align="center"><?= $item->kurang_roda_dua?></td>
                        <td align="center"><?= $item->kurang_roda_tiga?></td>
                        <td align="center"><?= $item->kurang_roda_empat?></td>
                        <td align="center"><?= $item->kurang_roda_enam?></td>

                        <?php $total_mutasi_berkurang = $item->kurang_roda_dua
                                                    +$item->kurang_roda_tiga
                                                    +$item->kurang_roda_empat
                                                    +$item->kurang_roda_enam?>

                        <td align="center"><?= $total_mutasi_berkurang ?> </td>

                        <td align="center">
                            <?= ($item->awal_roda_dua-$item->awal_kurang_roda_dua)
                                +($item->tambah_roda_dua+$item->tambah_baru_roda_dua)
                                -($item->kurang_roda_dua)?>
                        </td>  
                        <td align="center">
                        <?= ($item->awal_roda_tiga-$item->awal_kurang_roda_tiga)
                                +($item->tambah_roda_tiga+$item->tambah_baru_roda_tiga)
                                -($item->kurang_roda_tiga)?>
                        </td>  
                        <td align="center">
                        <?= ($item->awal_roda_empat-$item->awal_kurang_roda_empat)
                                +($item->tambah_roda_empat+$item->tambah_baru_roda_empat)
                                -($item->kurang_roda_empat)?>
                        </td>  
                        <td align="center">
                        <?= ($item->awal_roda_enam-$item->awal_kurang_roda_enam)
                                +($item->tambah_roda_enam+$item->tambah_baru_roda_enam)
                                -($item->kurang_roda_enam)?>
                        </td>  
                        <td align="center"><?= $total_saldo_awal+$total_mutasi_bertambah-$total_mutasi_berkurang ?></td> 
                    </tr>
                    <?php
                            $no++;
                           
                    }
                    ?>
                </tbody>
                <tr>
                        <td align="center" colspan="2">JUMLAH</td> 
                                             
                        <td align="center"><?= $total_saldo_awal_roda_dua ?></td>
                        <td align="center"><?= $total_saldo_awal_roda_tiga ?></td>
                        <td align="center"><?= $total_saldo_awal_roda_empat ?></td>
                        <td align="center"><?= $total_saldo_awal_roda_enam ?></td>
                        <td align="center"><?= $total_saldo_awal_roda_dua+$total_saldo_awal_roda_tiga+$total_saldo_awal_roda_empat+$total_saldo_awal_roda_enam?></td>
                        <td align="center"><?= $total_mutasi_bertambah_roda_dua?></td>  
                        <td align="center"><?= $total_mutasi_bertambah_roda_tiga?></td> 
                        <td align="center"><?= $total_mutasi_bertambah_roda_empat?></td> 
                        <td align="center"><?= $total_mutasi_bertambah_roda_enam?></td> 
                        <td align="center"><?= $total_mutasi_bertambah_roda_dua+$total_mutasi_bertambah_roda_tiga+$total_mutasi_bertambah_roda_empat+$total_mutasi_bertambah_roda_enam ?></td>  
                        <td align="center"><?= $total_mutasi_berkurang_roda_dua ?></td>  
                        <td align="center"><?= $total_mutasi_berkurang_roda_tiga ?></td>
                        <td align="center"><?= $total_mutasi_berkurang_roda_empat ?></td>
                        <td align="center"><?= $total_mutasi_berkurang_roda_enam ?></td>
                        <td align="center"><?= $total_mutasi_berkurang_roda_dua+$total_mutasi_berkurang_roda_tiga+$total_mutasi_berkurang_roda_empat+$total_mutasi_berkurang_roda_enam ?></td>
                        <td align="center"><?= $total_saldo_akhir_roda_dua ?></td>
                        <td align="center"><?= $total_saldo_akhir_roda_tiga ?></td>
                        <td align="center"><?= $total_saldo_akhir_roda_empat ?></td>
                        <td align="center"><?= $total_saldo_akhir_roda_enam ?></td>  
                        <td align="center"><?= $total_saldo_akhir_roda_dua+$total_saldo_akhir_roda_tiga+$total_saldo_akhir_roda_empat+$total_saldo_akhir_roda_enam ?></td>  
                </tr>
    
            </table>

</body>



</html>









   
