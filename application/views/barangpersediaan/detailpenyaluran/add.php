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
        <form action="<?php echo base_url()?>barangpersediaan/simpan_detailpenyaluran/<?php echo $hasilparsing; ?>" method="post" enctype="multipart/form-data">
                    <label for="id_ssh">Nama Barang</label>
                    <select class="theSelect" id="id_ssh" name="id_ssh" required />
                    <option>Silahkan Pilih Barang</option>

                        <?php 
                        $id_opd = $this->session->userdata('id_opd');
                        $id_ssh = $this->db->query("SELECT * FROM tbl_detailmutasisementara 
                        join tbl_ssh,tbl_mutasi,tbl_bidang_opd
                        where tbl_ssh.id_ssh=tbl_detailmutasisementara.id_ssh 
                        and tbl_mutasi.id_mutasi=tbl_detailmutasisementara.id_mutasi 
                        and tbl_bidang_opd.id_bidang_opd=tbl_mutasi.id_bidang_opd 
                        and tbl_mutasi.id_opd=$id_opd 
                        and tbl_mutasi.jenis_mutasi='Pengadaan' 
                        and nama_bidang='Sekretariat'");
                
                        foreach ($id_ssh->result() as $id_ssh) : 
                        ?>
                        <option value="<?= $id_ssh->id_ssh.'|'.$id_ssh->hargasatuanrekanan;?>">
                            <?= $id_ssh->Namabarang_ssh?>  
                            <?= 'Rp. '.number_format($id_ssh->hargasatuanrekanan);?>/
                            <?= $id_ssh->Satuan_ssh?> - 
                            <?php $kalimat=$id_ssh->Spesifikasi_ssh; $potong_kalimat=substr($kalimat,0,75) ?>
                            <?= $potong_kalimat?>
                        </option>

                        <?php 
                        endforeach; ?>

                      </select>
                      </div>
                      <br>
                  

                  <div class="col-md-5">
                    <label for="total_barang_out">Total Barang</label>
                    <input class="form-control" id="total_barang_out" type="text" aria-describedby="nameHelp" name="total_barang_out" required/>
                  </div>
              <br>
              <div class="col-md-2">
                <input class="form-control btn btn-primary" type="submit" value="Simpan" name="btnSimpan" >
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

<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(id){
    document.getElementById('hargasatuanrekanan').value = prdName[id].hargasatuanrekanan;
};
</script>
<?php $this->load->view('include/footer'); ?>
