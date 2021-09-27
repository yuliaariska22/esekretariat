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
<h1 class="jarak-lh" align="center">BUKU BARANG PERSEDIAAN</h1>
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
                        <th rowspan="2">Nama Barang</th>
                        <th colspan="3">MASUK</th>        
                        <th colspan="3">KELUAR</th>        
                        <th colspan="3">SISA</th>      
                        <th rowspan="2">Keterangan</th> 
                    </tr>
                    <tr>
                        <th>Unit</th>                        
                        <th>Harga Satuan</th>
                        <th>Jumlah</th>                        
                        <th>Unit</th>                        
                        <th>Harga Satuan</th>
                        <th>Jumlah</th> 
                        <th>Unit</th>                        
                        <th>Harga Satuan</th>
                        <th>Jumlah</th> 
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
                    </tr>
                </thead>
                <?php
                      $no = 1 ;
                      $total = 0;
                    foreach ($hasil as $item)
                    {
                        $total += $item->sum_total_barang_in*$item->hargasatuanrekanan;;
                    ?>
                    <tr>
                        <td align="center"><?= $no;?></td>
                        <td><?= $item->Namabarang_ssh;?></td>
                        <td align="center"><?= $item->sum_total_barang_in;?></td>
                        <td align="right"><?= 'Rp. '.number_format($item->hargasatuanrekanan);?></td>
                        <td align="right"><?= 'Rp. '.number_format($item->hargasatuanrekanan*$item->sum_total_barang_in);?></td>
                        <td align="center"><?= $item->sum_total_barang_in;?></td>
                        <td align="right"><?= 'Rp. '.number_format($item->hargasatuanrekanan);?></td>
                        <td align="right"><?= 'Rp. '.number_format($item->hargasatuanrekanan*$item->sum_total_barang_in);?></td>
                        <td align="center"><?= 0;?></td>
                        <td align="right"><?= 'Rp. '.number_format(0);?></td>
                        <td align="right"><?= 'Rp. '.number_format(0);?></td>
                        <td></td>
                   
                       
                    </tr>
                    <?php
                            $no++;

                                       }
                    ?>
                </tbody>
                <tr>
                        <td align="center" colspan="2">JUMLAH</td> 
                        <td colspan="3" align="center"><?='Rp. '.number_format($total); ?></td>
                        <td colspan="3" align="center"><?='Rp. '.number_format($total); ?></td>
                        <td colspan="3" align="center"><?='Rp. '.number_format( 0); ?></td>
                        <td align="center" colspan="3"></td>
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









   
