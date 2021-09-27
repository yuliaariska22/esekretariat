<?php 
$this->load->view('include/header'); 
?>


  <div>
    <table>
    <tr height="100px"><td></td></tr>
</table>
  </div>
  
 
  <div class="container">
  <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('sppd')?>">SPPD</a>
        </li>
  
  
        <li class="breadcrumb-item active">Daftar Laporan Perjalanan Dinas</li>
      </ol>
    
          
    <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
        
          <i class="fa fa-table"></i> Daftar Laporan Perjalanan Dinas </div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th>
                  <th>Tanggal SPPD</th> 
                  <th>Tujuan</th>    
                  <th>Tanggal Dinas</th> 
                  <th>Dinas</th>     
                  <th>Opsi</th>  
                  <th>Cetak</th>
                </tr>
              </thead>
            <tbody  class="text-center">
            <?php 
                  $i = 1;
                  foreach ($content->result() as $data) : ?>
                <tr>
                <td><?= $i ?></td>
                  <td align="left"><?php echo format_indo(date($data->tanggal_sppd));?></td>
                  <td align="left"><?= $data->alamat_tujuan?>, <?=$data->kota_tujuan?></td>
                  <td align="left"><?= $data->tanggal_berangkat?> sampai <?=$data->tanggal_kembali?></td>
                  <td align="center"><?= $data->dinas?></td> 
                  <td>  
                  <a href="<?php echo base_url()?>sppd/updatelaporanmaksud/<?php echo $data->id_sppd; ?>" class="btn btn-primary">Maksud dan Tujuan<i class="fa fa-edit"></i></a>  
                  <a href="<?php echo base_url()?>sppd/updatelaporan/<?php echo $data->id_sppd; ?>" class="btn btn-primary">Laporan<i class="fa fa-edit"></i></a>
                    <?php if ($data->dinas == "Dinas Luar") { ?>
                      <a href="<?php echo base_url()?>sppd/updatedaftarpengeluaranrill/<?php echo $data->id_detailsppd; ?>" class="btn btn-primary">Daftar Pengeluaran<i class="fa fa-edit"></i></a>
                    <?php }  ?>
                  </td>
                  <td>
                    <a href="<?php echo base_url()?>sppd/cetaklaporanperjalanandinas/<?php echo $data->id_sppd ?>/<?php echo $data->tanggal_sppd; ?>" class="btn btn-success"> Laporan Perjalanan Dinas<i class="fa fa-print"></i></a>
                   <?php if ($data->dinas == "Dinas Luar") { ?>
                      <a href="<?php echo base_url()?>sppd/cetakrincianpembayaranrampung/<?php echo $data->id_sppd ?>/<?php echo $data->tanggal_sppd; ?>" class="btn btn-success"> Rincian Pembayaran Rampung<i class="fa fa-print"></i></a>
                      <a href="<?php echo base_url()?>sppd/cetakdaftarpengeluaranrill/<?php echo $data->id_sppd ?>/<?php echo $data->tanggal_sppd; ?>" class="btn btn-success"> Daftar Pengeluaran Rill<i class="fa fa-print"></i></a>
                    <?php }  ?>
                  </td>
                </tr>
                <?php
                      $i++;
                    endforeach;
                  ?>
              </tbody>
            </table>
          
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

<?php 
$this->load->view('include/footer'); 
?>  