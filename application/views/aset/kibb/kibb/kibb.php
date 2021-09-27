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
  
  
        <li class="breadcrumb-item active">KIB B (Kendaraan)</li>
      </ol>
    
  <a href="<?php echo base_url('aset/menambahdatakibb'); ?>" class="btn btn-primary">Tambah Kendaraan Baru<i class="fa fa-plus"></i></a>
       
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
        <?php echo $this->session->flashdata('msg'); ?>
          <i class="fa fa-table"></i> Data KIB B (Kendaraan)</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th>
                  <th>No Polisi</th>
                  <th>Nama Barang</th>
                  <th>Roda</th>
                  <th>Tanggal Berlaku Pajak</th>
                  <th>Tanggal Berlaku STNK</th>
                  <th>Status Kendaraan</th>
                  <th>Opsi</th>
                </tr>
              </thead>
            <tbody  class="text-center">
                <tr>
                <?php 
                  $i = 1;
                  foreach ($content->result() as $data) : ?>
                  <td><?= $i ?></td>
                  <td><?= $data->no_polisi ?></td>
                  <td><?= $data->nama_barang ?></td>
                  <td><?= $data->roda ?></td>
                  <td><?= $data->tgl_berlaku_pajak ?></td>
                  <td><?= $data->tgl_berlaku_stnk ?></td>
                  <td><?= $data->status_kibb ?></td>
                  <?php if ($data->status_kibb == "Tidak Tersedia") {?>
                  <td> 
                  </td> 
                 <?php } else { ?>
                  <td>
                    <a href="<?php echo base_url()?>aset/updatedatakibb/<?php echo $data->id_riwayat_kibb; ?>/<?php echo $data->no_polisi; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Edit<i class="fa fa-tag"></i></a>
                    <a href="<?php echo base_url()?>aset/mutasidatakibb/<?php echo $data->id_riwayat_kibb; ?>/<?php echo $data->no_polisi; ?>" class="btn btn-success" style="margin-bottom: 1px;">Mutasi<i class="fa fa-tag"></i></a>
                    <a href="<?php echo base_url()?>aset/action_deletedatakibb/<?php echo $data->id_riwayat_kibb; ?>" onclick="return confirm('Apakah anda yakin?');" class="btn btn-danger">Hapus<i class="fa fa-trash"></i></a>
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
