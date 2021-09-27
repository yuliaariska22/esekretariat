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
  
  
        <li class="breadcrumb-item active">Tambah Pengajuan SPPD</li>
      </ol>
             <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Tambah Pengajuan SPPD</div>
        <div class="card-body">
          <div class="table-responsive">
  <div class="container">
  <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>sppd/action_updatesppd/<?php echo $data->id_sppd; ?>">
  <input type="hidden" name="id_sppd"  value="<?= $data->id_sppd?>" />
       <div class="form-group">
       <div class="form-row">
           <div class="col-md-6">
             <label for="tanggal_sppd">Tanggal</label>
             <input value="<?= $data->tanggal_sppd?>" class="form-control" id="tanggal_sppd" type="date" aria-describedby="nameHelp" name="tanggal_sppd" required/>
           </div>
           <div class="col-md-6">
             <label for="alat_angkut">Alat Angkut</label>
              <select class="form-control form-control-sm" id="alat_angkut" name="alat_angkut" required />
                    <option value="<?= $data->alat_angkut?>"><?= $data->alat_angkut?></option>
                    <option value="Angkutan Umum">Angkutan Umum</option>
                    <option value="Mobil Dinas">Mobil Dinas</option>
             </select>
           </div>
         </div>
       </div>

       <div class="form-group">
       <div class="form-row">
           <div class="col-md-6">
             <label for="alamat_berangkat">Alamat Berangkat</label>
             <input value="<?= $data->alamat_berangkat?>" class="form-control" id="alamat_berangkat" type="text" aria-describedby="nameHelp" name="alamat_berangkat"/>
           </div>
           <div class="col-md-6">
           <label for="kota_berangkat">Kota Berangkat</label>
             <input value="<?= $data->kota_berangkat?>" class="form-control" id="kota_berangkat" type="text" aria-describedby="nameHelp" name="kota_berangkat" required/>
           </div>
         </div>
       </div>

       <div class="form-group">
       <div class="form-row">
           <div class="col-md-6">
             <label for="alamat_tujuan">Alamat Tujuan</label>
             <input value="<?= $data->alamat_tujuan?>" class="form-control" id="alamat_tujuan" type="text" aria-describedby="nameHelp" name="alamat_tujuan"/>
           </div>
           <div class="col-md-6">
           <label for="kota_tujuan">Kota Tujuan</label>
             <input  value="<?= $data->kota_tujuan?>" class="form-control" id="kota_tujuan" type="text" aria-describedby="nameHelp" name="kota_tujuan" required/>
           </div>
         </div>
       </div>

       <div class="form-group">
       <div class="form-row">
           <div class="col-md-6">
             <label for="tanggal_berangkat">Tanggal Berangkat</label>
             <input value="<?= $data->tanggal_berangkat?>" class="form-control" id="tanggal_berangkat" type="date" aria-describedby="nameHelp" name="tanggal_berangkat"/>
           </div>
           <div class="col-md-6">
           <label for="tanggal_kembali">Tanggal Kembali</label>
             <input value="<?= $data->tanggal_kembali?>" class="form-control" id="tanggal_kembali" type="date" aria-describedby="nameHelp" name="tanggal_kembali" required/>
           </div>
         </div>
       </div>

       


       <div class="form-group">
       <div class="form-row">
           <div class="col-md-6">
             <label for="pembebanan_anggaran">Pembebanan Anggaran</label>
             <select class="form-control form-control-sm" id="pembebanan_anggaran" name="pembebanan_anggaran" required />
               
                <option value="<?= $data->pembebanan_anggaran?>"><?= $data->instansi?> - <?= $data->mataanggaran?></option>
                

                <?php 
                $id_opd = $this->session->userdata('id_opd');
                $pembebanananggaran = $this->db->query("SELECT * FROM tbl_pembebanananggaran where id_opd=$id_opd");
                
                foreach ($pembebanananggaran->result() as $pembebanananggaran) : ?>
                <option value="<?= $pembebanananggaran->id_pembebanananggaran?>"><?= $pembebanananggaran->instansi?> - <?= $pembebanananggaran->mataanggaran?></option>
                 <?php endforeach; ?>
             </select></div>
           <div class="col-md-6">
           <label for="keterangan_lain">Keterangan Lain Lain</label>
             <input value="<?= $data->keterangan_lain?>" class="form-control" id="keterangan_lain" type="text" aria-describedby="nameHelp" name="keterangan_lain" required/>
           </div>
         </div>
       </div>

       
       <div class="form-group">
       <div class="form-row">
           <div class="col-md-6">
             <label for="dinas">Dinas</label>
             <select class="form-control form-control-sm" id="dinas" name="dinas" required />
                    <option value="<?= $data->dinas?>"><?= $data->dinas?></option>
                    <option value="Dinas Dalam">Dinas Dalam</option>
                    <option value="Dinas Luar">Dinas Luar</option>
             </select> </div>
           
         </div>
       </div>

       <div class="form-group">
       <div class="form-row">
           <div class="col-md-6">
             <label for="no_spt">Nomor SPT</label>
             <input value="<?= $data->no_spt?>" class="form-control" id="no_spt" type="text" aria-describedby="nameHelp" name="no_spt" />
           </div>
           <div class="col-md-6">
           <label for="no_sppd">Nomor SPPD</label>
             <input value="<?= $data->no_sppd?>" class="form-control" id="no_sppd" type="text" aria-describedby="nameHelp" name="no_sppd" />
           </div>
         </div>
       </div>

       <div class="form-group">
       <div class="form-row">
           <div class="col-md-6">
             <label for="no_kwitansi">Nomor Kwitansi</label>
             <input value="<?= $data->no_kwitansi?>" class="form-control" id="no_kwitansi" type="text" aria-describedby="nameHelp" name="no_kwitansi"/>
           </div>
           <div class="col-md-6">
           <label for="no_daftarpembayaran">Nomor Daftar Pembayaran</label>
             <input value="<?= $data->no_daftarpembayaran?>" class="form-control" id="no_daftarpembayaran" type="text" aria-describedby="nameHelp" name="no_daftarpembayaran" />
           </div>
         </div>
       </div>


       <div class="form-group">
     <div class="form-row">
       <div class="col-md-2">
         <input class="form-control btn btn-primary" type="submit" value="Update" name="btnSimpan" >
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