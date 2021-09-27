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
          <a href="<?php echo base_url('sppd/laporansppd')?>">Laporan SPPD</a>
        </li>
  
  
        <li class="breadcrumb-item active">Rekapitulasi Biaya Penginapan</li>
      </ol>
             <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-print"></i> Rekapitulasi Biaya Penginapan</div>
        <div class="card-body">
          <div class="table-responsive">
  <div class="container">
  <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>sppd/cetakrekapitulasibiayapenginapan">
       
       <div class="form-group">
       <div class="form-row">
           <div class="col-md-6">
             <label for="tanggal_mulai">Tanggal Mulai</label>
             <input class="form-control" id="tanggal_mulai" type="date" aria-describedby="nameHelp" name="tanggal_mulai" required/>
           </div>
           <div class="col-md-6">
             <label for="tanggal_sampai">Tanggal Sampai</label>
             <input class="form-control" id="tanggal_sampai" type="date" aria-describedby="nameHelp" name="tanggal_sampai" required/>
           </div>
         </div>
       </div>

       <div class="form-group">
     <div class="form-row">
       <div class="col-md-2">
         <input class="form-control btn btn-primary" type="submit" value="Print" name="btnSimpan" >
       </div>
     </div>
   </div>
 </form>
  </div>

</div>

</div>

</div>

</div>

<?php 
$this->load->view('include/footer'); 
?>  