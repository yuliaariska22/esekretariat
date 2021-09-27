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
          <a href="">Aset</a>
        </li>
  
  
        <li class="breadcrumb-item active">KIB A (Tanah)</li>
      </ol>
    
  <a href="<?php echo base_url('aset/menambahdatakiba'); ?>" class="btn btn-primary">Tambah Tanah Baru<i class="fa fa-plus"></i></a>
       
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
        <?php echo $this->session->flashdata('msg'); ?>
          <i class="fa fa-table"></i> Data KIB A (Tanah)</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th>
                  <th>Nama Barang</th>
                  <th>Kode Barang</th>
                  <th>Nomor Register</th>
                  <th>Luas</th>
                  <th>Keterangan Tanah</th>
                  <th>Alamat</th>
                  <th>Status Tanah</th>
                  <th>Opsi</th>
                </tr>
              </thead>
            <tbody  class="text-center">
                <tr>
                <?php 
                  $i = 1;
                  foreach ($content->result() as $data) : ?>
                  <td><?= $i ?></td>
                  <td><?= $data->nama_barang ?></td>
                  <td><?= $data->no_kode_barang ?></td>
                  <td><?= $data->no_register ?></td>
                  <td>
                  <b>Luas di KIB : <?= $data->luas_catat_kib?> m2</b>
                  <br><br>
                  Koreksi :
                  <br> + <?= $data->kor_tambah_luas?> m2
                  <br> - <?= $data->kor_kurang_luas?> m2
                  <br><br>
                  <b>Luas di Sertifikat : <?=$data->luas_catat_kib+$data->kor_tambah_luas-$data->kor_kurang_luas?> m2</b>
                  </td>
                  <td><?= $data->ket_tanah ?></td>
                  <td><?= $data->alamat ?></td>
                  <td><?= $data->status_kiba ?></td>
                  <?php if ($data->status_kiba == "Tidak Tersedia") {?>
                  <td> 
                  </td> 
                 <?php } else { ?>
                  <td>
                    <a href="<?php echo base_url()?>aset/updatedatakiba/<?php echo $data->id_riwayat_kiba; ?>/<?php echo $data->id_kiba; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Edit<i class="fa fa-tag"></i></a>
                    <a href="<?php echo base_url()?>aset/mutasidatakiba/<?php echo $data->id_riwayat_kiba; ?>/<?php echo $data->id_kiba; ?>" class="btn btn-success" style="margin-bottom: 1px;">Mutasi<i class="fa fa-tag"></i></a>
                    <a href="<?php echo base_url()?>aset/action_deletedatakiba/<?php echo $data->id_riwayat_kiba; ?>" onclick="return confirm('Apakah anda yakin?');" class="btn btn-danger">Hapus<i class="fa fa-trash"></i></a>
                  </td>
                  <?php } ?>
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
  
<?php $this->load->view('include/footer'); ?>
