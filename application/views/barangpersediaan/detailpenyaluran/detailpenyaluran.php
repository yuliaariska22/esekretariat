<?php 
$this->load->view('include/header'); 
?>


  <div>
    <table>
    <tr height="100px"><td></td></tr>
</table>
  </div>

<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('barangpersediaan/penyaluran')?>">Pengajuan Penyaluran</a>
        </li>
  
        <li class="breadcrumb-item active"> Menambah List Barang</li>
      </ol>
 <a href="<?php echo base_url()?>barangpersediaan/tambahdetailpenyaluran/<?php echo $hasilparsing; ?>" class="btn btn-primary" style="margin-bottom: 10px;"><i class="fa fa-plus">Tambah Barang</a></i>
 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Daftar List Barang</div>
          
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th> 
                        <th>Nama Barang</th> 
                        <th>Total Barang</th>
                        <th>Harga Satuan</th>
                        <th>Spesifikasi</th> 
                      
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no=1;
                    $total=0;
                    foreach ($hasil as $item)
                    {
                      $total += $item->total_barang_out*$item->Hargasatuan_ssh;
                    ?>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $item->Namabarang_ssh;?></td>
                        <td align="center"><?php echo $item->total_barang_out;?> <?php echo $item->Satuan_ssh;?></td>   
                        <td><?php echo $item->hargasatuanrekanan;?></td>                    
                        <td><?php echo $item->Spesifikasi_ssh;?></td>                    
                           <td align="center"> <a href="<?php echo base_url()?>barangpersediaan/hapusdetailpenyaluran/<?php echo $item->id_detailmutasisementara;?>/<?php echo $hasilparsing?>" onclick="return confirm('Apakah anda yakin?');"class="btn btn-danger" role="button">Delete</a></td>
                    </tr>
                    <?php
                            $no++;
                    }
                    ?>
                </tbody>
               
            </table>
    </div>
</div>
</div>
</div>
</div>
</div>
    </section>

<?php $this->load->view('include/footer'); ?>

