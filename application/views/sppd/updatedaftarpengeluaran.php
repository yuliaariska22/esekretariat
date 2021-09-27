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
          <a href="<?php echo base_url('sppd/laporanperjalanandinas')?>">Laporan Perjalanan Dinas</a>
        </li>
  

        <li class="breadcrumb-item active">Daftar Pengeluaran</li>
      </ol>
      <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>sppd/action_daftarpengeluarantambah/<?= $id_detailsppd?>">
      <input type="hidden" name="id_detailsppd"  value="<?= $id_detailsppd?>" />
      
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
             <input value="<?= $data->keb_maskapai?>" class="form-control" id="keb_maskapai" type="text" aria-describedby="nameHelp" name="keb_maskapai"/>
          </div>
          
          <div class="col-md-4">
            <label>Maskapai</label>
             <input value="<?= $data->ked_maskapai?>" class="form-control" id="ked_maskapai" type="text" aria-describedby="nameHelp" name="ked_maskapai"/>
          </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>Kode Booking</label>
             <input value="<?= $data->keb_kode_booking?>" class="form-control" id="keb_kode_booking" type="text" aria-describedby="nameHelp" name="keb_kode_booking"/>
          </div>
          
          <div class="col-md-4">
            <label>Kode Booking</label>
             <input value="<?= $data->ked_kode_booking?>" class="form-control" id="ked_kode_booking" type="text" aria-describedby="nameHelp" name="ked_kode_booking"/>
          </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>No Tiket</label>
             <input value="<?= $data->keb_no_tiket?>" class="form-control" id="keb_no_tiket" type="text" aria-describedby="nameHelp" name="keb_no_tiket"/>
          </div>
          
          <div class="col-md-4">
            <label>No Tiket</label>
             <input value="<?= $data->ked_no_tiket?>" class="form-control" id="ked_no_tiket" type="text" aria-describedby="nameHelp" name="ked_no_tiket"/>
          </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>No Flight</label>
             <input value="<?= $data->keb_no_flight?>" class="form-control" id="keb_no_flight" type="text" aria-describedby="nameHelp" name="keb_no_flight"/>
          </div>
          
          <div class="col-md-4">
            <label>No Flight</label>
             <input value="<?= $data->keb_no_flight?>" class="form-control" id="keb_no_flight" type="text" aria-describedby="nameHelp" name="ked_no_flight"/>
          </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>Origin</label>
             <input value="<?= $data->keb_origin?>" class="form-control" id="keb_origin" type="text" aria-describedby="nameHelp" name="keb_origin"/>
          </div>
          
          <div class="col-md-4">
            <label>Origin</label>
             <input value="<?= $data->ked_origin?>" class="form-control" id="ked_origin" type="text" aria-describedby="nameHelp" name="ked_origin"/>
          </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>Destination</label>
             <input value="<?= $data->keb_destination?>" class="form-control" id="keb_destination" type="text" aria-describedby="nameHelp" name="keb_destination"/>
          </div>
          
          <div class="col-md-4">
            <label>Destination</label>
             <input value="<?= $data->ked_destination?>" class="form-control" id="ked_destination" type="text" aria-describedby="nameHelp" name="ked_destination"/>
          </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>Tanggal Penerbangan</label>
             <input value="<?= $data->keb_tgl_penerbangan?>" class="form-control" id="keb_tgl_penerbangan" type="date" aria-describedby="nameHelp" name="keb_tgl_penerbangan"/>
          </div>
          
          <div class="col-md-4">
            <label>Tanggal Penerbangan</label>
             <input value="<?= $data->ked_tgl_penerbangan?>" class="form-control" id="ked_tgl_penerbangan" type="date" aria-describedby="nameHelp" name="ked_tgl_penerbangan"/>
          </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>Basic Fare</label>
             <input value="<?= $data->keb_basicfare?>" class="form-control" id="keb_basicfare" type="text" aria-describedby="nameHelp" name="keb_basicfare"/>
          </div>
          
          <div class="col-md-4">
            <label>Basic Fare</label>
             <input value="<?= $data->ked_basicfare?>" class="form-control" id="ked_basicfare" type="text" aria-describedby="nameHelp" name="ked_basicfare"/>
          </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>Taxes</label>
             <input value="<?= $data->keb_taxes?>" class="form-control" id="keb_taxes" type="text" aria-describedby="nameHelp" name="keb_taxes"/>
          </div>
          
          <div class="col-md-4">
            <label>Taxes</label>
             <input value="<?= $data->ked_taxes?>" class="form-control" id="ked_taxes" type="text" aria-describedby="nameHelp" name="ked_taxes"/>
          </div>
       </div>
      </div>

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
          
          <div class="col-md-4">
            <label>Harga Per Malam</label>
             <input value="<?= $data->harga_per_malam?>" class="form-control" id="harga_per_malam" type="text" aria-describedby="nameHelp" name="harga_per_malam"/>
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

          <div class="col-md-4">
            <label>Apakah Ada Bukti Pembayaran?</label>
            <select class="form-control form-control-sm" id="bukti_pembayaran_hotel" name="bukti_pembayaran_hotel" required />
                    <option value="<?= $data->bukti_pembayaran_hotel?>"><?= $data->bukti_pembayaran_hotel?></option>
                    <option value="Ada">Ada</option>
                    <option value="Tidak Ada">Tidak Ada</option>
             </select>  
          </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label><b>Biaya Perjalanan Dinas</b></label>
           </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>Uang Harian</label>
             <input value="<?= $data->uangharian?>" class="form-control" id="uangharian" type="text" aria-describedby="nameHelp" name="uangharian"/>
          </div>
          
          <div class="col-md-4">
            <label>Representasi</label>
             <input value="<?= $data->representasi?>" class="form-control" id="representasi" type="text" aria-describedby="nameHelp" name="representasi"/>
          </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>Tiket Angkutan Darat</label>
             <input value="<?= $data->tiket_angkutan_darat?>" class="form-control" id="tiket_angkutan_darat" type="text" aria-describedby="nameHelp" name="tiket_angkutan_darat"/>
          </div>
          
          <div class="col-md-4">
            <label>Taxi</label>
             <input value="<?= $data->representasi?>" class="form-control" id="representasi" type="taxi" aria-describedby="nameHelp" name="taxi"/>
          </div>
       </div>
      </div>

      <div class="form-group">
       <div class="form-row">
         
          <div class="col-md-4">
            <label>Biaya Kontribusi</label>
             <input value="<?= $data->biaya_kontribusi?>" class="form-control" id="biaya_kontribusi" type="text" aria-describedby="nameHelp" name="biaya_kontribusi"/>
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