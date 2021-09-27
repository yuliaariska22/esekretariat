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
  
  
        <li class="breadcrumb-item active">Pengajuan SPPD</li>
      </ol>
    
  <a href="<?php echo base_url('sppd/pengajuansppdtambah'); ?>" class="btn btn-primary">Tambah <i class="fa fa-plus"></i></a>
          
    <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
        
          <i class="fa fa-table"></i> Daftar Pengajuan SPPD </div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th>
                  <th>Tanggal SPPD</th>   
                  <th>Daftar</th>  
                  <th>Tujuan</th>    
                  <th>Dinas</th>    
                  <th>Cetak</th>
                  <th>Opsi</th> 
                </tr>
              </thead>
            <tbody  class="text-center">
            <?php 
                  $i = 1;
                  foreach ($content->result() as $data) : ?>
                <tr>
                <td><?= $i ?></td>
                  <td align="left"><?php echo format_indo(date($data->tanggal_sppd));?></td>
                  <td align="center">
                  <a href="<?php echo base_url()?>sppd/detailsppddasar/<?php echo $data->id_sppd; ?>" class="btn btn-primary">Dasar<i class="fa fa-eye"></i></a> 
                  <a href="<?php echo base_url()?>sppd/detailsppd/<?php echo $data->id_sppd; ?>" class="btn btn-primary">Pelaksana<i class="fa fa-eye"></i></a>
                  <a href="<?php echo base_url()?>sppd/detailsppdpengikut/<?php echo $data->id_sppd; ?>" class="btn btn-primary">Pengikut<i class="fa fa-eye"></i></a>  
                  <a href="<?php echo base_url()?>sppd/detailsppdtujuan/<?php echo $data->id_sppd; ?>" class="btn btn-primary">Tujuan<i class="fa fa-eye"></i></a>  
                </td>
                  <td align="left"><?= $data->alamat_tujuan?>, <?= $data->kota_tujuan?></td>
                  <td align="center"><?= $data->dinas?></td> 
                  <td>
                  <a href="<?php echo base_url()?>sppd/cetakspt/<?php echo $data->id_sppd?>/<?php echo $data->tanggal_sppd; ?>" class="btn btn-success"> SPT<i class="fa fa-print"></i></a>
                    <a href="<?php echo base_url()?>sppd/cetaksppd/<?php echo $data->id_sppd?>/<?php echo $data->tanggal_sppd; ?>" class="btn btn-success"> SPPD<i class="fa fa-print"></i></a> 
                    <?php if ($data->dinas == "Dinas Dalam") { ?>
                      <a href="<?php echo base_url()?>sppd/cetakkwitansidinasdalam/<?php echo $data->id_sppd?>/<?php echo $data->tanggal_sppd; ?>" class="btn btn-success"> Kwitansi<i class="fa fa-print"></i></a> 
                     <a href="<?php echo base_url()?>sppd/cetakdaftarpembayaran/<?php echo $data->id_sppd?>/<?php echo $data->tanggal_sppd; ?>" class="btn btn-success"> Daftar Pembayaran<i class="fa fa-print"></i></a>
                    <?php }else{?>
                      <a href="<?php echo base_url()?>sppd/cetakkwitansi/<?php echo $data->id_sppd?>/<?php echo $data->tanggal_sppd; ?>" class="btn btn-success"> Kwitansi<i class="fa fa-print"></i></a> 
                  
                    <?php }  ?>
                  </td>
                  <td>  
                    <a href="<?php echo base_url()?>sppd/updatesppd/<?php echo $data->id_sppd; ?>" class="btn btn-warning">Edit<i class="fa fa-edit"></i></a>
                    <a href="<?php echo base_url()?>sppd/action_deletesppd/<?php echo $data->id_sppd; ?>" onclick="return confirm('Apakah anda yakin?');" class="btn btn-danger">Hapus<i class="fa fa-trash"></i></a> 
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