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
          <a href="">Barang Persediaan</a>
        </li>
  
        <li class="breadcrumb-item active">Pengajuan Pengadaan</li>
      </ol>

      <div class="container">
      <a href="<?php echo base_url('barangpersediaan/menambahdatapengadaan')?>" class="btn btn-primary" style="margin-bottom: 10px;"><i class="fa fa-plus">Tambah</a></i>
      <a href="<?php echo base_url('barangpersediaan/pengadaanselesai')?>" class="btn btn-success" style="margin-bottom: 10px;"><i class="fa fa-eye"> Pengadaan Selesai</a></i>
      
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Tabel Pengadaan Barang</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th>
                  <th>Tanggal Pesan</th>
                  <th>Nama Rekanan</th>
                  <th>Status Order</th>
                  <th>Opsi</th>
                </tr>
              </thead>
            <tbody  class="text-center">
                <tr>
                <?php 
                  $i = 1;
                  foreach ($content as $data) : ?>
                  <td><?= $i ?></td>
                  <td><?=date("d/m/Y", strtotime( $data->tanggal_pesan));?></td>
                  <td><?= $data->nama_rekanan ?></td>
                  <td><?= $data->statusorder ?></td>
                  <td> 
                    <a href="<?php echo base_url()?>barangpersediaan/detailpengadaan/<?php echo $data->id_mutasi; ?>" class="btn btn-warning" style="margin-bottom: 1px;">List Barang<i class="fa fa-tag"></i></a>
                    <a href="<?php echo base_url()?>barangpersediaan/action_deletedatapengadaan/<?php echo $data->id_mutasi; ?>" onclick="return confirm('Apakah anda yakin?');" class="btn btn-danger">Hapus<i class="fa fa-trash"></i></a>
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
  
<?php $this->load->view('include/footer'); ?>

