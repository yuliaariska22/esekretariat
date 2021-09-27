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
                        <th rowspan="2">Jenis Barang/Nama Barang</th>
                        <th colspan="4">Jenis Kendaraan</th>        
                        <th rowspan="2">Merk</th>        
                        <th rowspan="2">Type</th>        
                        <th rowspan="2">Bahan</th>        
                        <th rowspan="2">Tahun Pembelian</th>   
                        <th colspan="5">Nomor</th>        
                        <th colspan="2">Pajak</th>        
                        <th colspan="2">STNK</th>        
                        <th rowspan="2">Harga (Rp)</th>   
                        <th rowspan="2">Pemakai</th>        
                        <th rowspan="2">Keterangan</th>      
                    </tr>
                    <tr>
                        <th>Roda 2 (Dua)</th>                        
                        <th>Roda 3 (Tiga)</th>
                        <th>Roda 4 (Empat)</th>                        
                        <th>Roda 6 (Enam)</th>   
                        <th>Pabrik</th>                        
                        <th>Rangka</th>
                        <th>Mesin</th>                        
                        <th>Polisi</th>
                        <th>BPKB</th>                        
                        <th>Hidup</th>
                        <th>Mati</th>                         
                        <th>Hidup</th>
                        <th>Mati</th>       
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
                        <th>23</th>
                    </tr>
                </thead>
                </thead>
                <?php
                    $no = 1 ;
                    $total_roda_dua = 0;
                    $total_roda_tiga = 0;
                    $total_roda_empat = 0;
                    $total_roda_enam = 0;
                    $total_harga= 0;
                    foreach ($hasil as $item)
                    {
                        if ($item->roda='Roda 2 (Dua)') { 
                            $roda_dua=1;
                            $roda_tiga=0;
                            $roda_empat=0;
                            $roda_enam=0;
                        }else if($item->roda='Roda 3 (Tiga)'){ 
                            $roda_dua=0;
                            $roda_tiga=1;
                            $roda_empat=0;
                            $roda_enam=0;
                        }else if($item->roda='Roda 4 (Empat)'){ 
                            $roda_dua=0;
                            $roda_tiga=0;
                            $roda_empat=1;
                            $roda_enam=0;
                        }else if($item->roda='Roda 6 (Enam)'){ 
                            $roda_dua=0;
                            $roda_tiga=0;
                            $roda_empat=0;
                            $roda_enam=1;
                        }

                        $total_roda_dua += $roda_dua;
                        $total_harga += $item->harga;
                    ?>
                    <tr>
                        <td align="center"><?= $no;?></td>
                        <td><?= $item->nama_opd;?></td>
                        <td align="center"><?= $item->nama_barang;?></td>
                        <td align="center"><?= $roda_dua;?></td>
                        <td align="center"><?= $roda_tiga;?></td>
                        <td align="center"><?= $roda_empat;?></td>
                        <td align="center"><?= $roda_enam;?></td>
                        <td align="center"><?= $item->merk;?></td>
                        <td align="center"><?= $item->type;?></td>
                        <td align="center"><?= $item->bahan;?></td>
                        <td align="center"><?= $item->tahun_pembelian;?></td>
                        <td align="center"><?= $item->no_pabrik;?></td>
                        <td align="center"><?= $item->no_rangka;?></td>
                        <td align="center"><?= $item->no_mesin;?></td>
                        <td align="center"><?= $item->no_polisi;?></td>
                        <td align="center"><?= $item->no_bpkb;?></td>
                        <?php
                        if ($item->tgl_berlaku_pajak > date("Y-m-d")) {
                            $pajak_hidup = 'YA';
                            $pajak_mati = '';
                        }else{
                            $pajak_hidup = '';
                            $pajak_mati = 'YA';
                        }
                        
                        if ($item->tgl_berlaku_stnk > date("Y-m-d")){
                            $stnk_hidup = 'YA';
                            $stnk_mati = '';
                        }else{
                            $stnk_hidup = '';
                            $stnk_mati = 'YA';
                        }
                        ?>
                        <td align="center"><?=$pajak_hidup?></td>
                        <td align="center"><font color="red"><?=$pajak_mati?></font></td>
                        <td align="center"><?=$stnk_hidup?></td>
                        <td align="center" ><font color="red"><?=$stnk_mati?></font></td>
                        <td align="center"><?= $item->harga;?></td>
                        <td align="center"><?= $item->pejabat_pengguna;?></td>
                        <td align="center"><?= $item->keterangan;?></td>
                        
               
                       
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>
                </tbody>
                <tr>
                        <td align="center" colspan="3"><b>TOTAL KESELURUHAN</b></td> 
                        <td align="center"><?= $total_roda_dua?></td>
                        <td align="center"><?= $total_roda_tiga?></td>
                        <td align="center"><?= $total_roda_empat?></td>
                        <td align="center"><?= $total_roda_enam?></td>
                        <td align="center" colspan="13"></td>                        
                        <td align="center"><?= $total_harga?></td>                
                        <td align="center"></td>                          
                        <td align="center"></td>                
                       
                </tr>
    
            </table>

</body>



</html>









   
