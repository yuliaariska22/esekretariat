<?php 
$this->load->view('include/header'); 
?>


  <div>
    <table>
    <tr height="100px"><td></td></tr>
</table>
  </div>
  <?php foreach ($content as $data) {
          # code...
        } ?>
 
  <div class="container">
  <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="">Data Penginapan</a>
        </li>
  
  
        <li class="breadcrumb-item active">Data Penginapan</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Data Penginapan</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo config_item('base_url'); ?>/sppd/action_tambahdetailpenginapan" method="post" enctype="multipart/form-data">
        <input value="<?= $this->uri->segment(3);?>" class="form-control" id="id_daftarpengeluaranrill" type="hidden" aria-describedby="nameHelp" name="id_daftarpengeluaranrill"/>
      
        <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label><b>Hotel/Penginapan</b></label>
           </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>Nama Hotel</label>
             <input value="<?= $data->nama_hotel?>" class="form-control" id="nama_hotel" type="text" aria-describedby="nameHelp" name="nama_hotel"/>
          </div>
          
          <div class="col-md-4">
            <label>Alamat Hotel</label>
             <input value="<?= $data->alamat_hotel?>" class="form-control" id="alamat_hotel" type="text" aria-describedby="nameHelp" name="alamat_hotel"/>
          </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>Tanggal Check In</label>
             <input value="<?= $data->tgl_check_in?>" class="form-control" id="tgl_check_in" type="date" aria-describedby="nameHelp" name="tgl_check_in"/>
          </div>
          
          <div class="col-md-4">
            <label>Tanggal Check Out</label>
             <input value="<?= $data->tgl_check_out?>" class="form-control" id="tgl_check_out" type="date" aria-describedby="nameHelp" name="tgl_check_out"/>
          </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>No Kamar</label>
             <input value="<?= $data->no_kamar?>" class="form-control" id="no_kamar" type="text" aria-describedby="nameHelp" name="no_kamar"/>
          </div>
          
         
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>No Invoice</label>
             <input value="<?= $data->no_invoice?>" class="form-control" id="no_invoice" type="text" aria-describedby="nameHelp" name="no_invoice"/>
          </div>
          
          <div class="col-md-4">
            <label>Agen Perjalanan</label>
             <input value="<?= $data->agen_perjalanan?>" class="form-control" id="agen_perjalanan" type="text" aria-describedby="nameHelp" name="agen_perjalanan"/>
          </div>

         
       </div>
      </div>

              <div class="form-group">
            <div class="form-row">
              <div class="col-md-2">
                <input class="form-control btn btn-primary" type="submit" value="Simpan" name="btnSimpan" >
              </div>
            </div>
          </div>
</div>
</div>
</div>
</div>



</div>
    </section>

<?php $this->load->view('include/footer'); ?>


