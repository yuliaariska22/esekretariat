<?php 
$this->load->view('include/header'); 
?>
<?php foreach ($content->result() as $data) {
          # code...
        } ?>

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
  

        <li class="breadcrumb-item active">Detail SPPD</li>
      </ol>
      <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>sppd/action_updatedetailsppd/">
      <input type="hidden" name="id_detailsppd"  value="<?= $data->id_detailsppd?>" />
      
      <div class="form-group">
       <div class="form-row">
          <div class="col-md-4">
            <label><b>No BKU</b></label>
             <input value="<?= $data->no_bku?>" class="form-control" id="no_bku" type="text" aria-describedby="nameHelp" name="no_bku"/>
          </div>
       </div>
      </div>

      

      <div class="form-group">
       <div class="form-row">
          <div class="col-md-2">
             <input class="form-control btn btn-primary" type="submit" value="Simpan" name="btnSimpan" > </div>
          </div>
       </div>
      </div>

      </form>
                </div>
       

<?php 
$this->load->view('include/footer'); 
?>  