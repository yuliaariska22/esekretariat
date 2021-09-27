<?php 
$this->load->view('include/header'); 
?>


  <div>
    <table>
    <tr height="100px"><td></td></tr>
</table>
  </div>
  <?php foreach ($content->result() as $data) {
          # code...
        } ?>
 
  <div class="container">
  <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('aset/kibb')?>">Aset</a>
        </li>
  
  
        <li class="breadcrumb-item active">Mutasi Data KIB B</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Mutasi Data KIB B</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo config_item('base_url'); ?>/aset/action_mutasidatakibb/<?= $data->id_riwayat_kibb?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_riwayat_kibb"  value="<?= $data->id_riwayat_kibb?>" />
        <input type="hidden" name="no_polisi"  value="<?= $data->no_polisi?>" />
      
           

              <div class="form-group">
              <div class="form-row">
              <div class="col-md-6">
                    <label for="tanggal_pencatatan">Tanggal Mutasi</label>
                    <input value="<?= $data->tanggal_pencatatan?>" class="form-control" id="tanggal_pencatatan" type="date" aria-describedby="nameHelp" name="tanggal_pencatatan" required/>
                  </div>
                <div class="col-md-6">
                    <label for="id_opd">Mutasi ke OPD</label>
                    <select class="theSelect" id="id_opd" name="id_opd" required />

                    <option>Silahkan Pilih Nama OPD</option>
                        <?php $id_opd = $this->db->query("SELECT * FROM tbl_opd");

                        foreach ($id_opd->result() as $id_opd) : ?>
                        <option value="<?= $id_opd->id_opd?>"><?= $id_opd->nama_opd?></option>
                        <?php endforeach; ?>
                      </select>    </div>      
                 
              </div>
              </div>

            <div class="form-group">
            <div class="form-row">
              <div class="col-md-2">
                <input class="form-control btn btn-primary" onclick="return confirm('Apakah anda yakin?');" type="submit" value="Proses Mutasi" name="btnSimpan" >
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
