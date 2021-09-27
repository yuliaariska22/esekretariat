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
    font-size: 12pt;
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
<h1 class="jarak-lh" align="center">DAFTAR PENERIMAAN BARANG PERSEDIAAN</h1>
<table>
</head>

<body>
<?php foreach ($hasil as $item){}?>

<table>
<tr><p><td>OPD</td>	<td>:</td> <td><?= $opd->nama_opd ?></td></p></tr>
<tr><p><td>T.A</td>	    <td>:</td> <td><?=date("d/m/Y", strtotime( $tanggal_mulai));?> - <?=date("d/m/Y", strtotime( $tanggal_sampai));?></td></p></tr>
</table>

<table border="1" align="center">
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Tanggal</th>
                        <th rowspan="2">Dari</th> 
                        <th colspan="2 ">Dokumen Faktur</th>   
                        <th colspan="2 ">SPP/SPM</th>                         
                        <th rowspan="2">Nama Barang</th>
                        <th rowspan="2">Unit</th> 
                        <th rowspan="2">Satuan</th> 
                        <th rowspan="2">Harga Satuan</th>
                        <th rowspan="2">Jumlah Harga (Rp)</th>
                        <th colspan="2 ">Bukti Penerimaan/B.A Penerimaan</th>
                        <th rowspan="2">Ket</th> 
                    </tr>
                    <tr>
                        <th>Nomor</th>                        
                        <th>Tanggal</th>
                        <th>Nomor</th>                        
                        <th>Tanggal</th>    
                        <th>Nomor</th>                        
                        <th>Tanggal</th>
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
                    </tr>
                </thead>
                <?php
                    $no = 1 ;
                    $totalbarang = 0;
                    $total = 0;
                    foreach ($hasil as $item)
                    {
                        $totalbarang += $item->total_barang_in;
                        $total += $item->total_barang_in*$item->hargasatuanrekanan;
                    ?>
                    <tr>
                        <td align="center"><?= $no;?></td>
                        <td align="center"><?=date("d/m/Y", strtotime( $item->tanggal_pesan));?></td>
                        <td><?= $item->nama_rekanan;?></td>
                        <td align="center"><?= $item->no_faktur;?></td>
                        <td align="center"><?=date("d/m/Y", strtotime($item->tanggal_faktur));?></td>
                        <td align="center"><?= $item->no_suratperintahpengiriman;?></td>
                        <td align="center"><?=date("d/m/Y", strtotime($item->tanggal_suratperintahpengiriman));?></td>
                        <td><?= $item->Namabarang_ssh;?></td>                        
                        <td align="center"><?= $item->total_barang_in;?></td>
                        <td><?= $item->Satuan_ssh;?></td>
                        <td align="right"><?= 'Rp.'.number_format($item->hargasatuanrekanan,0,'.','.'); ?></td>
                        <td align="right"><?= 'Rp.'.number_format($item->total_barang_in*$item->hargasatuanrekanan,0,'.','.'); ?></td>
                        <td align="center"><?= $item->no_bappk;?></td>
                        <td align="center"><?= date("d/m/Y", strtotime($item->tanggal_bappk));?></td>
                        <td></td>
               
                       
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>
                </tbody>
                <tr>
                        <td align="center" colspan="8">JUMLAH</td> 
                        <td align="center"><?= $totalbarang?></td>
                        <td></td>
                        <td></td>
                        <td align="right"><?= 'Rp.'.number_format($total,0,'.','.')?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                </tr>
    
            </table>

</body>

<footer>
<br><br><br>
<table align="center" width="100%">
<tr>
    <td></td>
    <td>Padangsidimpuan, <?php echo format_indo(date('Y-m-d'));?></td>
</tr>
<tr>
    <td width="75%">PEJABAT PENATAUSAHAAN BARANG</td>
    <td width="25%">PENGURUS BARANG PENGGUNA</td>
</tr>
<tr height="75px"></tr>
<tr>
    <td><?= $pejabatpenatausahaanbarang->nama ?></td>
    <td><?= $pbp->nama ?></td>
</tr>

<tr>
    <td><?= $pejabatpenatausahaanbarang->nip ?></td>
    <td><?= $pbp->nip ?></td>
</tr>

</table>

<table align="center" width="100%">
<tr align="center">
<td><br><br></tr>
</tr>
<tr align="center">
    <td>ATASAN LANGSUNG</td>
</tr>
<tr height="75px"></tr>
<tr align="center">
    <td><?= $atasanlangsung->nama ?></td>
</tr>

<tr align="center">
    <td><?= $atasanlangsung->nip ?></td>
</tr>

</table>
</footer>

</html>









   
