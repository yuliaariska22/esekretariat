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
          <a href="<?php echo base_url('barangpersediaan/pengadaanfix')?>">Konfirmasi Harga Rekanan</a>
        </li>
  
        <li class="breadcrumb-item active"> Menambah List Barang</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Menambah List Barang</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">
             <div class="col-md-6">
             <form action="<?php echo base_url()?>barangpersediaan/simpan_detailpengadaanfix/<?php echo $hasilparsing; ?>" method="post" enctype="multipart/form-data">
                    <label for="id_ssh">Nama Barang</label>
                    <select class="theSelect" id="id_ssh" name="id_ssh" required />

                    <option>Silahkan Pilih Barang</option>
                        <?php $id_ssh = $this->db->query("SELECT * FROM tbl_ssh");
                
                        foreach ($id_ssh->result() as $id_ssh) : ?>
                        <option value="<?= $id_ssh->id_ssh?>"><?= $id_ssh->Namabarang_ssh?> - <?= 'Rp. '.number_format($id_ssh->Hargasatuan_ssh,0,'.','.')?></option>
                         <?php endforeach; ?>
                       </select>
                        </div>
                        <br>
                        <div class="col-md-5">
                    <label for="total_barang_in">Total Barang</label>
                    <input class="form-control" id="total_barang_in" type="text" aria-describedby="nameHelp" name="total_barang_in" required/>
                  </div>
              <br>   
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
    <script>
		$(".theSelect").select2();
	</script>
<?php $this->load->view('include/footer'); ?>





