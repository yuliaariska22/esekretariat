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

<?php foreach ($hasil as $item){}?>
<table align="center">
<h3 class="jarak-lh" align="center">DAFTAR TANAH</h3>
<h3 class="jarak-lh" align="center">MILIK PEMERINTAH KOTA PADANGSIDIMPUAN</h3>
<h4 class="jarak-lh" align="center"><?= format_indo(date($tanggal_mulai))?> - <?= format_indo(date($tanggal_sampai))?></h4>

<table>
</head>

<body>
<br>

<table border="1" align="center">
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Nama OPD</th>
                        <th rowspan="2">Jenis Barang/Nama Barang</th>
                        <th colspan="2">Nomor</th>   
                        <th rowspan="2">Keterangan Tanah</th> 
                        <th rowspan="2">Luas (M2) yang Dicatat di KIB</th>  
                        <th colspan="2">Koreksi</th>   
                        <th rowspan="2">Luas (M2) Sesuai Sertifikat</th>
                        <th rowspan="2">Tahun Pengadaan</th>
                        <th rowspan="2">Letak / Alamat</th>
                        <th colspan="3">Status Tanah</th>  
                        <th rowspan="2">Harga (Rp)</th>        
                        <th rowspan="2">Keterangan Perolehan</th>    
                        <th rowspan="2">Keterangan Penguasaan</th>       
                    </tr>
                    <tr>
                        <th>Kode Barang</th>                        
                        <th>Register</th>   
                        <th>Bertambah</th>                        
                        <th>Berkurang</th>
                        <th>Hak</th>   
                        <th>Tanggal</th>                        
                        <th>Nomor</th>      
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
                    </tr>
                    <?php
                    $no = 1 ;
                    $total_luas_kib = 0;
                    $total_kor_tambah_luas = 0;
                    $total_kor_kurang_luas = 0;
                    $total_luas_sertifikat = 0;
                    $total_harga = 0;
                    foreach ($hasil as $item)
                    {
                        
                        $total_luas_kib += $item->luas_catat_kib;
                        $total_kor_tambah_luas += $item->kor_tambah_luas;
                        $total_kor_kurang_luas += $item->kor_kurang_luas;
                        $total_luas_sertifikat += $item->luas_catat_kib+$item->kor_tambah_luas-$item->kor_kurang_luas;
                        $total_harga += $item->harga;
                    ?>
                    <tr>
                    <tr>
                        <td align="center"><?= $no;?></td>
                        <td align="left"><?= $item->nama_opd;?></td>
                        <td align="center"><?= $item->nama_barang;?></td>
                        <td align="center"><?= $item->no_kode_barang;?></td>
                        <td align="center"><?= $item->no_register;?></td>
                        <td align="center"><?= $item->ket_tanah;?></td>
                        <td align="center"><?= $item->luas_catat_kib;?></td>
                        <td align="center"><?= $item->kor_tambah_luas;?></td>
                        <td align="center"><?= $item->kor_kurang_luas;?></td>
                        <td align="center"><?= $item->luas_catat_kib+$item->kor_tambah_luas-$item->kor_kurang_luas;?></td>
                        <td align="center"><?= $item->tahun_pengadaan;?></td>
                        <td align="center"><?= $item->alamat;?></td>
                        <td align="center"><?= $item->statustanah_hak;?></td>
                        <td align="center"><?= format_indo(date($item->tanggal_sertifikat))?></td>
                        <td align="center"><?= $item->no_sertifikat;?></td>
                        <td align="center"><?= 'Rp. '.number_format($item->harga);?></td>
                        <td align="center"><?= $item->ket_perolehan;?></td>
                        <td align="center"><?= $item->keterangan_penguasaan;?></td>
               
                       
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>
                </tbody>
                <tr>
                    <b>
                        <td align="center" colspan="6"><b>Total Keseluruhan</b></td> 
                        <td align="center"><b><?= $total_luas_kib ?></b></td>
                        <td align="center"><b><?= $total_kor_tambah_luas ?></b></td>
                        <td align="center"><b><?= $total_kor_kurang_luas ?></b></td>
                        <td align="center"><b><?= $total_luas_sertifikat ?></b></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"><b><?= 'Rp. '.number_format($total_harga);?></b></td>
                        <td align="center"></td>
                        <td align="center"></td>
                    </b>
                       
                </tr>
    
            </table>


</body>
<br>
<table align="right" width="35%">
            <tr><td><b>Padangsidimpuan,</td></tr>
            <tr><td><b>KEPALA BIDANG PENGELOLAAN ASET </td></tr>
            <tr><td><b>KOTA PADANGSIDIMPUAN</td></tr>
            <tr height="75px"><td></td></tr>
            <tr><td><b>SORITUA PARDAMEAN, S.E</td></tr>
            <tr><td><b>PENATA Tk. I</td></tr>
            <tr><td><b>NIP. 19760405 200901 1 001</td></tr>
            </table>


</html>