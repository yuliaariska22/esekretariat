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
<h1 class="jarak-lh" align="center">REKAPITULASI MUTASI BARANG PERSEDIAAN</h1>
<table>
</head>

<body>

<table>
<tr><p><td>OPD</td>	<td>:</td> <td><?= $opd->nama_opd ?></td></p></tr>
<tr><p><td>T.A</td>	    <td>:</td> <td><?=date("d/m/Y", strtotime( $tanggal_mulai));?> - <?=date("d/m/Y", strtotime( $tanggal_sampai));?></td></p></tr>
</table>

<table border="1" align="center">
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Nama Barang</th>
                        <th colspan="3">SALDO AWAL PER <?=date("d/m/Y", strtotime( $tanggal_mulai));?></th>        
                        <th colspan="3">PEMBELIAN/PENERIMAAN</th>        
                        <th colspan="3">PEMAKAIAN/PENGELUARAN</th>       
                        <th colspan="3">SALDO AKHIR PER <?=date("d/m/Y", strtotime( $tanggal_sampai));?></th>       
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
                        <th>13</th>                        
                        <th>14</th>                        
                        <th>15</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1 ;
                    $total_semua_saldo_awal = 0;
                    $total_semua_barang_in = 0;
                    $total_semua_barang_out = 0;

                    $total_harga_saldo_awal= 0;
                    $total_harga_in = 0;
                    $total_harga_out = 0;

                    $harga_satuan_saldo_awal = 0;
                    $harga_satuan_barang_in = 0;
                    $harga_satuan_barang_out = 0;
                    $harga_satuan_barang_saldo_akhir = 0;

                    $grand_total_harga_saldo_awal =0;
                    $grand_total_harga_pembelian =0;
                    $grand_total_harga_pengeluaran =0;
                    $grand_total_harga_saldo_akhir =0;

                    $total = 0;
                    foreach ($hasil as $item)
                    {
                        
                        $total_semua_saldo_awal += ($item->saldo_awal_in-$item->saldo_awal_out);
                        $total_semua_barang_in += $item->pembelian;
                        $total_semua_barang_out += $item->pengeluaran;

                        if ($item->saldo_awal_in-$item->saldo_awal_out>0) {
                            $harga_satuan_saldo_awal = $item->harga_barang;
                        }else{
                            $harga_satuan_saldo_awal = 0;
                        }

                        if ($item->pembelian>0) {
                            $harga_satuan_barang_in = $item->harga_barang;
                        }else{
                            $harga_satuan_barang_in = 0;
                        }

                        if ($item->pengeluaran>0) {
                            $harga_satuan_barang_out = $item->harga_barang;
                        }else{
                            $harga_satuan_barang_out = 0;
                        }

                        if ($item->saldo_awal_in-$item->saldo_awal_out-$item->pembelian+$item->pengeluaran>0) {
                            $harga_satuan_barang_saldo_akhir = $item->harga_barang;
                        }else{
                            $harga_satuan_barang_saldo_akhir = 0;
                        }
                        
                        
                        $total_harga_saldo_awal = ($item->saldo_awal_in-$item->saldo_awal_out)*$harga_satuan_saldo_awal;
                        $total_harga_in = $item->pembelian*$harga_satuan_barang_in;
                        $total_harga_out = $item->pengeluaran*$harga_satuan_barang_out;


                           


                    ?>
                    <tr>
                        <td align="center"><?= $no;?></td>
                        <td><?= $item->nama_barang;?></td>
                        <td align="center"><?= $item->saldo_awal_in-$item->saldo_awal_in;?></td>
                        <td align="right"><?='Rp. '.number_format( $harga_satuan_saldo_awal);?></td>
                        <td align="right"><?= 'Rp. '.number_format($total_harga_saldo_awal);?></td>
                        <td align="center"><?= $item->pembelian;?></td>
                        <td align="right"><?= 'Rp. '.number_format($harga_satuan_barang_in);?></td>
                        <td align="right"><?= 'Rp. '.number_format($total_harga_in);?></td>                
                        <td align="center"><?= $item->pembelian;?></td>
                        <td align="right"><?='Rp. '.number_format( $harga_satuan_barang_in);?></td>
                        <td align="right"><?='Rp. '.number_format( $total_harga_in);?></td>
                        <td align="center"><?= 0;?></td>
                        <td align="right"><?= 'Rp. '.number_format(0);?></td>
                        <td align="right"><?= 'Rp. '.number_format(0);?></td>
                        <td></td>
               
                       
                    </tr>
                    <?php
                            $no++;

                            $grand_total_harga_saldo_awal += $total_harga_saldo_awal;
                            $grand_total_harga_pembelian += $total_harga_in;
                            $grand_total_harga_pengeluaran += $total_harga_out;
                            $grand_total_harga_saldo_akhir += $total_harga_saldo_awal+$total_harga_in-$total_harga_out;
                    }
                    ?>
                </tbody>
                   
                </tbody>
                <tr>
                        <td align="center" colspan="2">JUMLAH</td> 
                        <td colspan="3" align="center"><?='Rp. '.number_format(0); ?></td>
                        <td colspan="3" align="center"><?='Rp. '.number_format( $grand_total_harga_pembelian); ?></td>
                        <td colspan="3" align="center"><?='Rp. '.number_format( $grand_total_harga_pembelian); ?></td>
                        <td colspan="3" align="center"><?='Rp. '.number_format(0);?></td>
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


   
