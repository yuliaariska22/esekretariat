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
          <a href="<?php echo base_url('sppd/laporanperjalanandinas')?>">Laporan Perjalanan Dinas</a>
        </li>
  

        <li class="breadcrumb-item active">Daftar Pengeluaran</li>
      </ol>
      <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>sppd/action_daftarpengeluaranrilltambah/<?= $id_detailsppd?>">
      <input type="hidden" name="id_detailsppd"  value="<?= $id_detailsppd?>" />

      <?php 
      $gol=$this->session->userdata('gol'); 
      $eselon=$this->session->userdata('eselon');

      if ($gol=='I' | $gol=='II') {
        $golongan="bp5";
      }else if($eselon=='IV' | $gol=='III'){
        $golongan="bp4";
      }else if($eselon=='III' | $gol=='IV'){
        $golongan="bp3";
      }else if($eselon=='II'){
        $golongan="bp2";
      }else if($eselon=='I'){
        $golongan="bp1";
      }else{
        $golongan="0";
      }

      if ($eselon=="I") {
        $hasil_eselon="PEJABAT ESELON I";
      }else if($eselon=="II"){
        $hasil_eselon="PEJABAT ESELON II";
      }else{
        $hasil_eselon="0";
      }
      ?>

     
      
      <div class="form-group">
       <div class="form-row">
           <div class="col-md-4">
           <label>Uraian Pengeluaran</label>
             <select class="form-control form-control-sm" id="uraian" name="uraian" required />
                    <option></option>
                <?php 
                $uraian = $this->db->query("SELECT * FROM tbl_ssh_sppd where kategori='dinas luar' and jenis_pengeluaran!='Biaya Penginapan' and jenis_pengeluaran!='Uang Representasi'");
                foreach ($uraian->result() as $uraian) : ?>
                <option value="<?= $uraian->id_ssh_sppd.'|'.$uraian->harga?>"><?= $uraian->jenis_pengeluaran.' '.$uraian->keterangan?> - <?= 'Rp. '.number_format($uraian->harga);?></option>
                <?php endforeach; ?>

                <?php 
                $uraian = $this->db->query("SELECT * FROM tbl_ssh_sppd where jenis_pengeluaran='Biaya Penginapan' and golongan='$golongan'");
                foreach ($uraian->result() as $uraian) : ?>
                <option value="<?= $uraian->id_ssh_sppd.'|'.$uraian->harga?>"><?= $uraian->jenis_pengeluaran.' '.$uraian->keterangan?> - <?= 'Rp. '.number_format($uraian->harga);?></option>
                <?php endforeach; ?>

                <?php 
                $uraian = $this->db->query("SELECT * FROM tbl_ssh_sppd where jenis_pengeluaran='Uang Representasi' and keterangan='$hasil_eselon' and kategori='dinas luar'");
                foreach ($uraian->result() as $uraian) : ?>
                <option value="<?= $uraian->id_ssh_sppd.'|'.$uraian->harga?>"><?= $uraian->jenis_pengeluaran.' '.$uraian->keterangan?> - <?= 'Rp. '.number_format($uraian->harga);?></option>
                <?php endforeach; ?>


             </select> 
             </div>

         
          <div class="col-md-1">
           <label>Jumlah</label>
             <input class="form-control" id="jumlah" type="textarea" aria-describedby="nameHelp" name="jumlah"/>
          </div>
          <div class="col-md-2">
           <label>Bukti</label>
           <select class="form-control form-control-sm" id="bukti" name="bukti" required />
                    <option></option>
                    <option value="Ada">Ada</option>
                    <option value="Tidak Ada">Tidak Ada</option>
             </select> 
            </div>

            <div class="col-md-2">
           <label>Harga sesuai Bukti</label>
          <input class="form-control" id="harga_sesuai_bukti" type="textarea" aria-describedby="nameHelp" name="harga_sesuai_bukti"/>
          </div>
          <div class="col-md-2">
             <input class="form-control btn btn-primary" type="submit" value="Tambah" name="btnSimpan" > </div>
          </div>
       </div>

    
           
    <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
        
          <i class="fa fa-table"></i> Detail Laporan Perjalanan Dinas </div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th>
                  <th>Uraian</th>
                  <th>Harga</th>
                  <th>Jumlah</th>
                  <th>Bukti</th>
                  <th>Opsi</th>
                </tr>
              </thead>
            <tbody  class="text-center">
            <?php 
                  $i = 1;
                  foreach ($content->result() as $data) : 
                  ?>

                <tr>
                <td><?= $i ?></td>
                  <td align="left"><?=  $data->jenis_pengeluaran.' '.$data->keterangan?></td>
                  <td align="left"><?= 'Rp. '.number_format($data->harga_rill);?></td>
                  <td align="center"><?= $data->jumlah?></td>
                  <td align="center"><?= $data->bukti?></td>
                  <td>  
                      <a href="<?php echo base_url()?>sppd/action_deletedaftarpengeluaranrill/<?php echo $data->id_daftarpengeluaranrill; ?>" onclick="return confirm('Apakah anda yakin?');" class="btn btn-danger">Hapus<i class="fa fa-trash"></i></a>
                    <?php if($data->jenis_pengeluaran=='Tiket Pesawat Ekonomi'){ ?>
                      <br> <a href="<?php echo base_url()?>sppd/tiketpesawat/<?php echo $data->id_daftarpengeluaranrill; ?>" class="btn btn-primary">Tiket Pesawat<i class="fa fa-edit"></i></a>
                    <?php }else if($data->jenis_pengeluaran=='Tiket Pesawat Bisnis'){ ?>
                      <br> <a href="<?php echo base_url()?>sppd/tiketpesawat/<?php echo $data->id_daftarpengeluaranrill; ?>" class="btn btn-primary">Tiket Pesawat<i class="fa fa-edit"></i></a>
                    <?php }else if($data->jenis_pengeluaran=='Biaya Penginapan'){ ?>
                      <br> <a href="<?php echo base_url()?>sppd/penginapan/<?php echo $data->id_daftarpengeluaranrill; ?>" class="btn btn-primary">Penginapan<i class="fa fa-edit"></i></a>
                    <?php }?>
                  </td>
                </tr>
                <?php
                      $i++;
                    endforeach;
                  ?>
              </tbody>
            </table>
          
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

<?php 
$this->load->view('include/footer'); 
?>  