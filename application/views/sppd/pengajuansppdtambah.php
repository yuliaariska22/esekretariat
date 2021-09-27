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
  
  
        <li class="breadcrumb-item active">Tambah Pengajuan SPPD</li>
      </ol>
             <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Tambah Pengajuan SPPD</div>
        <div class="card-body">
          <div class="table-responsive">
  <div class="container">
  <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>sppd/action_pengajuansppdtambah">
       
       <div class="form-group">
       <div class="form-row">
           <div class="col-md-6">
             <label for="tanggal_sppd">Tanggal</label>
             <input class="form-control" id="tanggal_sppd" type="date" aria-describedby="nameHelp" name="tanggal_sppd" required/>
           </div>
           <div class="col-md-6">
             <label for="alat_angkut">Alat Angkut</label>
              <select class="form-control form-control-sm" id="alat_angkut" name="alat_angkut" required />
                    <option>Silahkan Pilih</option>
                    <option value="Angkutan Umum">Angkutan Umum</option>
                    <option value="Mobil Dinas">Mobil Dinas </option>
             </select> </div>
         </div>
       </div>

       <div class="form-group">
       <div class="form-row">
           <div class="col-md-6">
             <label for="alamat_berangkat">Alamat Berangkat</label>
             <input class="form-control" id="alamat_berangkat" type="text" aria-describedby="nameHelp" name="alamat_berangkat"/>
           </div>
           <div class="col-md-6">
           <label for="kota_berangkat">Kota Berangkat</label>
             <input value="Padangsidimpuan" class="form-control" id="kota_berangkat" type="text" aria-describedby="nameHelp" name="kota_berangkat" required/>
           </div>
         </div>
       </div>

       <div class="form-group">
       <div class="form-row">
           <div class="col-md-6">
             <label for="alamat_tujuan">Alamat Tujuan</label>
             <input class="form-control" id="alamat_tujuan" type="text" aria-describedby="nameHelp" name="alamat_tujuan"/>
           </div>
           <div class="col-md-6">
           <label for="kota_tujuan">Kota Tujuan</label>
             <input class="form-control" id="kota_tujuan" type="text" aria-describedby="nameHelp" name="kota_tujuan" required/>
           </div>
         </div>
       </div>

       <div class="form-group">
       <div class="form-row">
           <div class="col-md-6">
             <label for="tanggal_berangkat">Tanggal Berangkat</label>
             <input class="form-control" id="tanggal_berangkat" type="date" aria-describedby="nameHelp" name="tanggal_berangkat"/>
           </div>
           <div class="col-md-6">
           <label for="tanggal_kembali">Tanggal Kembali</label>
             <input class="form-control" id="tanggal_kembali" type="date" aria-describedby="nameHelp" name="tanggal_kembali" required/>
           </div>
         </div>
       </div>

       <div class="form-group">
       <div class="form-row">
           <div class="col-md-6">
             <label for="pembebanan_anggaran">Pembebanan Anggaran</label>
             <select class="form-control form-control-sm" id="pembebanan_anggaran" name="pembebanan_anggaran" required />
                    <option>Silahkan Pilih Pembebanan Anggaran</option>
                <?php 
                $id_opd = $this->session->userdata('id_opd');
                $pembebanananggaran = $this->db->query("SELECT * FROM tbl_pembebanananggaran where id_opd=$id_opd");
                
                foreach ($pembebanananggaran->result() as $pembebanananggaran) : ?>
                <option value="<?= $pembebanananggaran->id_pembebanananggaran?>"><?= $pembebanananggaran->instansi?> - <?= $pembebanananggaran->mataanggaran?></option>
                 <?php endforeach; ?>
             </select> </div>
           <div class="col-md-6">
           <label for="keterangan_lain">Keterangan Lain Lain</label>
             <input class="form-control" id="keterangan_lain" type="text" aria-describedby="nameHelp" name="keterangan_lain"/>
           </div>
         </div>
       </div>

       
       <div class="form-group">
       <div class="form-row">
           <div class="col-md-6">
             <label for="dinas">Dinas</label>
             <select class="form-control form-control-sm" id="dinas" name="dinas" required />
                    <option>Silahkan Pilih Dinas Dalam/Luar</option>
                    <option value="Dinas Dalam">Dinas Dalam</option>
                    <option value="Dinas Luar">Dinas Luar</option>
             </select> </div>
           
         </div>
       </div>

       <div class="form-group">
       <div class="form-row">
           <div class="col-md-6">
             <label for="no_spt">Nomor SPT</label>
             <input class="form-control" id="no_spt" type="text" aria-describedby="nameHelp" name="no_spt" />
           </div>
           <div class="col-md-6">
           <label for="no_sppd">Nomor SPPD</label>
             <input class="form-control" id="no_sppd" type="text" aria-describedby="nameHelp" name="no_sppd" />
           </div>
         </div>
       </div>

       <div class="form-group">
       <div class="form-row">
           <div class="col-md-6">
             <label for="no_kwitansi">Nomor Kwitansi</label>
             <input class="form-control" id="no_kwitansi" type="text" aria-describedby="nameHelp" name="no_kwitansi"/>
           </div>
           <div class="col-md-6">
           <label for="no_daftarpembayaran">Nomor Daftar Pembayaran</label>
             <input class="form-control" id="no_daftarpembayaran" type="text" aria-describedby="nameHelp" name="no_daftarpembayaran" />
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
 </form>
  </div>

</div>

</div>

</div>

</div>

<?php 
$this->load->view('include/footer'); 
?>  