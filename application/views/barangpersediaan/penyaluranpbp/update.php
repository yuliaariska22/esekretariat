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
          <a href="<?php echo base_url('barangpersediaan/penyaluranpbp')?>">Konfirmasi Penyaluran Barang</a>
        </li>
  
        <li class="breadcrumb-item active">Data Berita Acara </li>
      </ol>

      
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Data Berita Acara</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('barangpersediaan/simpan_update_beritaacarapbp')?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_mutasi"  value="<?php echo $ambil->id_mutasi; ?>" />
       
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_bapenyaluranbarang">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_bapenyaluranbarang; ?>"class="form-control" id="tanggal_bapenyaluranbarang" type="date" aria-describedby="nameHelp" name="tanggal_bapenyaluranbarang" />
                  </div>

                  <div class="col-md-4">
                    <label for="no_bapenyaluranbarang">Berita Acara Penyaluran Barang</label>
                    <input value="<?php echo $ambil->no_bapenyaluranbarang; ?>"class="form-control" id="no_bapenyaluranbarang" type="text" aria-describedby="nameHelp" name="no_bapenyaluranbarang" />
                  </div>  

                 

                
                </div>
              </div>

             
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="surat">Print Surat</label>
                    <select class="form-control form-control-sm" id="surat" name="surat"/>
                    <option value="">Pilih Jenis Surat untuk di Print</option>
                    <option value="surat2">Berita Acara Penyaluran Barang</option>
                    </select></div>

                </div>
              </div>

              <div class="form-group">
            <div class="form-row">
              <div class="col-md-2">
                <input class="form-control btn btn-primary" type="submit" value="Simpan" name="btnSimpan" >
              </div>
              <div class="col-md-2">
                <input class="form-control btn btn-success" type="submit" value="Print" name="btnPrint" >
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
