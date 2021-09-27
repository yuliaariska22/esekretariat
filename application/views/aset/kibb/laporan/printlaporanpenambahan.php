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
<h3 class="jarak-lh" align="center">DAFTAR PENAMBAHAN PENGADAAN KENDERAAN DINAS DAN PINDAH SKPD DILINGKUNGAN PEMERINTAH KOTA PADANGSIDIMPUAN</h1>
<h3 class="jarak-lh" align="center">SAMPAI DENGAN TAHUN ANGGARAN <?=date("Y", strtotime($tanggal_sampai));?></h1>
<table>
</head>

<body>
<br>

<?php foreach ($hasil as $item){}?>

<table border="1" align="center">
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Nama OPD</th>
                        <th colspan="4">Jenis Kendaraan</th>        
                        <th rowspan="2">Total</th>        
                        <th colspan="4">Jenis Kendaraan Pindah SKPD</th> 
                        <th rowspan="2">Total Perpindahan</th>        
                        <th rowspan="2">Total Penambahan <br>dan Perpindahan OPD</th>            
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
                        
                    </tr>
                </thead>
                <?php
                    $no = 1 ;
                    $total_roda_dua_tambah = 0;
                    $total_roda_tiga_tambah = 0;
                    $total_roda_empat_tambah = 0;
                    $total_roda_enam_tambah = 0;

                    $total_roda_dua_pindah = 0;
                    $total_roda_tiga_pindah = 0;
                    $total_roda_empat_pindah = 0;
                    $total_roda_enam_pindah = 0;

                    foreach ($hasil as $item)
                    {
                        $total_roda_dua_tambah += $item->tambah_baru_roda_dua;
                        $total_roda_tiga_tambah += $item->tambah_baru_roda_tiga;
                        $total_roda_empat_tambah += $item->tambah_baru_roda_empat;
                        $total_roda_enam_tambah += $item->tambah_baru_roda_enam;

                        $total_roda_dua_pindah += $item->tambah_roda_dua;
                        $total_roda_tiga_pindah += $item->tambah_roda_tiga;
                        $total_roda_empat_pindah += $item->tambah_roda_empat;
                        $total_roda_enam_pindah += $item->tambah_roda_enam;

                    ?>
                    <tr>
                        <td align="center"><?= $no;?></td>
                        <td><?= $item->nama_opd;?></td>
                        <td align="center"><?=$item->tambah_baru_roda_dua?></td>
                        <td align="center"><?=$item->tambah_baru_roda_tiga?></td>
                        <td align="center"><?=$item->tambah_baru_roda_empat?></td>
                        <td align="center"><?=$item->tambah_baru_roda_enam?></td>
                        <td align="center"><?= $item->tambah_baru_roda_dua+$item->tambah_baru_roda_tiga+$item->tambah_baru_roda_empat+$item->tambah_baru_roda_enam  ?></td>
                        <td align="center"><?=$item->tambah_roda_dua?></td>
                        <td align="center"><?=$item->tambah_roda_tiga?></td>
                        <td align="center"><?=$item->tambah_roda_empat?></td>
                        <td align="center"><?=$item->tambah_roda_enam?></td>
                        <td align="center"><?=$item->tambah_roda_dua+$item->tambah_roda_tiga+$item->tambah_roda_empat+$item->tambah_roda_enam?></td>
                        <td align="center"><?= $item->tambah_baru_roda_dua+$item->tambah_baru_roda_tiga+$item->tambah_baru_roda_empat+$item->tambah_baru_roda_enam+$item->tambah_roda_dua+$item->tambah_roda_tiga+$item->tambah_roda_empat+$item->tambah_roda_enam ?></td>
                        
               
                       
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>
                </tbody>
                <tr>
                        <td align="center" colspan="2"><b>TOTAL</b></td> 
                        <td align="center"><?= $total_roda_dua_tambah ?></td>
                        <td align="center"><?= $total_roda_tiga_tambah ?></td>
                        <td align="center"><?= $total_roda_empat_tambah ?></td>
                        <td align="center"><?= $total_roda_enam_tambah ?></td>
                        <td align="center"><?= $total_roda_dua_tambah+$total_roda_tiga_tambah+$total_roda_empat_tambah+$total_roda_enam_tambah ?></td>
                        <td align="center"><?= $total_roda_dua_pindah ?></td>
                        <td align="center"><?= $total_roda_tiga_pindah ?></td>
                        <td align="center"><?= $total_roda_empat_pindah ?></td>
                        <td align="center"><?= $total_roda_enam_pindah ?></td>
                        <td align="center"><?= $total_roda_dua_pindah+$total_roda_tiga_pindah+$total_roda_empat_pindah+$total_roda_enam_pindah ?></td>
                        <td align="center"><?= $total_roda_dua_tambah+$total_roda_tiga_tambah+$total_roda_empat_tambah+$total_roda_enam_tambah+$total_roda_dua_pindah+$total_roda_tiga_pindah+$total_roda_empat_pindah+$total_roda_enam_pindah ?></td>
                
                    </tr>
    
            </table>

</body>



</html>









   
