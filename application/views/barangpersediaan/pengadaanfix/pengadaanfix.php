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
  
        <li class="breadcrumb-item active"> Konfirmasi Harga Rekanan</li>
      </ol>
<!-- Example DataTables Card-->

      <div class="container">
      <a href="<?php echo base_url('barangpersediaan/pengadaanfixselesai')?>" class="btn btn-success" style="margin-bottom: 10px;"><i class="fa fa-eye"> Pengadaan Selesai</a></i>
      
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Konfirmasi Harga Rekanan</div>
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
                    <a href="<?php echo base_url()?>barangpersediaan/detailpengadaanfix/<?php echo $data->id_mutasi; ?>" class="btn btn-warning" style="margin-bottom: 1px;">List Barang<i class="fa fa-tag"></i></a>
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

