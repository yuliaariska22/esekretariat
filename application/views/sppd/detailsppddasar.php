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
          <a href="<?php echo base_url('sppd/pengajuansppd')?>">Pengajuan SPPD</a>
        </li>
  
  
        <li class="breadcrumb-item active">Detail Dasar</li>
      </ol>
      <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>sppd/action_detailsppddasartambah/<?= $id_sppd?>">
      <input type="hidden" name="id_sppd"  value="<?= $id_sppd?>" />
      <div class="form-group">
       <div class="form-row">
           <div class="col-md-10">
           <input class="form-control" id="dasar" type="text" aria-describedby="nameHelp" name="dasar" required/>
           </div>
             <div class="col-md-2">
             <input class="form-control btn btn-primary" type="submit" value="Tambah" name="btnSimpan" > </div>
           
         </div>
       </div>
           
    <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
        
          <i class="fa fa-table"></i> Daftar dasar </div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th>
                  <th>Dasar</th>    
                  <th>Opsi</th>
                </tr>
              </thead>
            <tbody  class="text-center">
            <?php 
                  $i = 1;
                  foreach ($content->result() as $data) : ?>
                <tr>
                <td><?= $i ?></td>
                  <td align="left"><?= $data->dasar?></td>
                  <td>  
                    <a href="<?php echo base_url()?>sppd/action_deletedetailsppddasar/<?php echo $data->id_detailsppddasar; ?>" onclick="return confirm('Apakah anda yakin?');" class="btn btn-danger">Hapus<i class="fa fa-trash"></i></a>
                   
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