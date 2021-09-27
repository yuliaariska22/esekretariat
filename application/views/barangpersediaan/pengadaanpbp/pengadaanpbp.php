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
          <a href="">Konfirmasi Pengadaan Barang</a>
        </li>
  
        <li class="breadcrumb-item active"> Konfirmasi Pengadaan Barang</li>
      </ol>
<!-- Example DataTables Card-->
      
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Pengadaan Barang</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th>
                  <th>Tanggal Pesan</th>
                  <th>Nama Rekanan</th>          
                  <th>Status</th>               
                  <th>Tanggal Terima</th>                               
                  <th>Detail Order</th>
                  <th>Opsi</th>
                </tr>
              </thead>
            <tbody  class="text-center">
                <tr>
                <?php 
                  $i = 1;
                  foreach ($content as $data) : ?>
                  <td><?= $i ?></td>
                  <td><?= $data->tanggal_pesan ?></td>
                  <td><?= $data->nama_rekanan ?></td>
                  <td><?= $data->statusorder ?></td>
                  <td><?= $data->tanggalterimabarang ?></td>
                  <td> 
                    <a href="<?php echo base_url('barangpersediaan/lihatlistpengadaan')?>/<?php echo $data->id_mutasi; ?>" class="btn btn-success" style="margin-bottom: 1px;">Lihat<i class="fa fa-tag"></i></a>
                      </td> 
                    <?php if ($data->statusorder == "Selesai") { ?> 
                     <td> <a href="<?php echo base_url('suratpengadaan/updatepbp')?>/<?php echo $data->id_mutasi; ?>" class="btn btn-primary" style="margin-bottom: 1px;">Cetak Berita Acara<i class="fa fa-tag"></i></a>
                   </td> 
                      <?php }else{?>
                      <td> 
                      <a href="<?php echo base_url('suratpengadaan/updatepbp')?>/<?php echo $data->id_mutasi; ?>" class="btn btn-primary" style="margin-bottom: 1px;">Cetak Berita Acara<i class="fa fa-tag"></i></a>
                        <a href="<?php echo base_url('barangpersediaan/updatestatusorder')?>/<?php echo $data->id_mutasi; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda sudah memeriksa pemesanan dan ingin konfirmasi selesai?');" style="margin-bottom: 1px;">Konfirmasi Pengadaan Selesai<i class="fa fa-tag"></i></a>
                      </td> 
                      <?php }?>
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

