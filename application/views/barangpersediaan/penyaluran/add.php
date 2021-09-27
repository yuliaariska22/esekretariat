<?php 
$this->load->view('include/header'); 
?>


  <div>
    <table>
    <tr height="100px"><td></td></tr>
</table>
  </div>

<section id="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('barangpersediaan/penyaluran')?>">Pengajuan Penyaluran</a>
        </li>
  
        <li class="breadcrumb-item active"> Menambah Pengajuan Penyaluran</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Menambah Pengajuan Penyaluran</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('barangpersediaan/action_menambahdatapenyaluran')?>" method="post" enctype="multipart/form-data">

             <div class="form-group">
              <div class="form-row">
              <div class="col-md-6">
                    <label for="tanggal_pesan">Tanggal Pesan</label>
                    <input class="form-control" id="tanggal_pesan" type="date" aria-describedby="nameHelp" name="tanggal_pesan" required/>
                  </div>
                  
                  <div class="col-md-6">
                    <label for="id_bidang_opd">Untuk Bidang</label>
                    <select class="form-control form-control-sm" id="id_bidang_opd" name="id_bidang_opd" required/>
                    <option>Silahkan Pilih Nama Bidang</option>
                        <?php 
                        $id_bidang_opd = $this->db->query("SELECT * FROM tbl_bidang_opd");
                
                        foreach ($id_bidang_opd->result() as $id_bidang_opd) : ?>
                        
                        <option value="<?= $id_bidang_opd->id_bidang_opd?>"><?= $id_bidang_opd->nama_bidang?></option>
                         <?php endforeach; ?>
                       </select>
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



</div>
    </section>

<?php $this->load->view('include/footer'); ?>

