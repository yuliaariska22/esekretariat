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
          <a href="">Data Tiket Pesawat</a>
        </li>
  
  
        <li class="breadcrumb-item active">Tambah Data Tiket Pesawat</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Tambah Data Tiket Pesawat</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo config_item('base_url'); ?>/sppd/action_tambahdetailtiketpesawat" method="post" enctype="multipart/form-data">
        <input value="<?= $this->uri->segment(3);?>" class="form-control" id="id_daftarpengeluaranrill" type="hidden" aria-describedby="nameHelp" name="id_daftarpengeluaranrill"/>
        

        <div class="form-group">
       <div class="form-row">
          <div class="col-md-4">
            <label><b>Tiket Pesawat Keberangkatan</b></label>
           </div>
          
          <div class="col-md-4">
            <label><b>Tiket Pesawat Kedatangan</b></label>
          </div>
       </div>
      </div>


      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>Maskapai</label>
             <input   class="form-control" id="keb_maskapai" type="text" aria-describedby="nameHelp" name="keb_maskapai"/>
          </div>
          
          <div class="col-md-4">
            <label>Maskapai</label>
             <input  class="form-control" id="ked_maskapai" type="text" aria-describedby="nameHelp" name="ked_maskapai"/>
          </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>Kode Booking</label>
             <input  class="form-control" id="keb_kode_booking" type="text" aria-describedby="nameHelp" name="keb_kode_booking"/>
          </div>
          
          <div class="col-md-4">
            <label>Kode Booking</label>
             <input  class="form-control" id="ked_kode_booking" type="text" aria-describedby="nameHelp" name="ked_kode_booking"/>
          </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>No Tiket</label>
             <input   class="form-control" id="keb_no_tiket" type="text" aria-describedby="nameHelp" name="keb_no_tiket"/>
          </div>
          
          <div class="col-md-4">
            <label>No Tiket</label>
             <input  class="form-control" id="ked_no_tiket" type="text" aria-describedby="nameHelp" name="ked_no_tiket"/>
          </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>No Flight</label>
             <input  class="form-control" id="keb_no_flight" type="text" aria-describedby="nameHelp" name="keb_no_flight"/>
          </div>
          
          <div class="col-md-4">
            <label>No Flight</label>
             <input   class="form-control" id="keb_no_flight" type="text" aria-describedby="nameHelp" name="ked_no_flight"/>
          </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>Origin</label>
             <input   class="form-control" id="keb_origin" type="text" aria-describedby="nameHelp" name="keb_origin"/>
          </div>
          
          <div class="col-md-4">
            <label>Origin</label>
             <input   class="form-control" id="ked_origin" type="text" aria-describedby="nameHelp" name="ked_origin"/>
          </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>Destination</label>
             <input class="form-control" id="keb_destination" type="text" aria-describedby="nameHelp" name="keb_destination"/>
          </div>
          
          <div class="col-md-4">
            <label>Destination</label>
             <input class="form-control" id="ked_destination" type="text" aria-describedby="nameHelp" name="ked_destination"/>
          </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>Tanggal Penerbangan</label>
             <input  class="form-control" id="keb_tgl_penerbangan" type="date" aria-describedby="nameHelp" name="keb_tgl_penerbangan"/>
          </div>
          
          <div class="col-md-4">
            <label>Tanggal Penerbangan</label>
             <input class="form-control" id="ked_tgl_penerbangan" type="date" aria-describedby="nameHelp" name="ked_tgl_penerbangan"/>
          </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>Basic Fare</label>
             <input class="form-control" id="keb_basicfare" type="text" aria-describedby="nameHelp" name="keb_basicfare"/>
          </div>
          
          <div class="col-md-4">
            <label>Basic Fare</label>
             <input class="form-control" id="ked_basicfare" type="text" aria-describedby="nameHelp" name="ked_basicfare"/>
          </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>Taxes</label>
             <input class="form-control" id="keb_taxes" type="text" aria-describedby="nameHelp" name="keb_taxes"/>
          </div>
          
          <div class="col-md-4">
            <label>Taxes</label>
             <input class="form-control" id="ked_taxes" type="text" aria-describedby="nameHelp" name="ked_taxes"/>
          </div>
       </div>
      </div>
      <div class="col-md-4">
            <label>Apakah Ada Bukti Pembayaran?</label>
            <select class="form-control form-control-sm" id="bukti_pembayaran" name="bukti_pembayaran" required />
                    <option>-</option>
                    <option value="Ada">Ada</option>
                    <option value="Tidak Ada">Tidak Ada</option>
             </select>  
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


