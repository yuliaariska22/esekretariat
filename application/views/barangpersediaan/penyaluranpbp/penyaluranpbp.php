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
          <a href="">Konfirmasi Penyaluran Barang</a>
        </li>
  
        <li class="breadcrumb-item active"> Konfirmasi Penyaluran Barang</li>
      </ol>
<!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Penyaluran Barang</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th>
                  <th>Tanggal Pesan</th>
                  <th>Diajukan Oleh</th>
                  <th>Status Penyaluran</th>           
                  <th>Tanggal Penyaluran</th>                               
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
                  <td><?= $data->nama ?></td>
                  <td><?= $data->statuspenyaluran ?></td>
                  <td><?= $data->tanggalpenyaluran ?></td>
                  <td> 
                    <a href="<?php echo base_url('')?>barangpersediaan/lihatlistpenyaluran/<?php echo $data->id_mutasi; ?>" class="btn btn-success" style="margin-bottom: 1px;">Lihat<i class="fa fa-tag"></i></a>
                    <a href="<?php echo base_url('')?>barangpersediaan/updateberitaacarapbp/<?php echo $data->id_mutasi; ?>" class="btn btn-primary" style="margin-bottom: 1px;">Cetak Berita Acara<i class="fa fa-print"></i></a>
                    </td> 
                      <?php if ($data->statuspenyaluran == "Sudah Disalurkan") { ?> 
                      <td></td> 
                      <?php }else{?>
                  <td> 
                    <a href="<?php echo base_url('')?>barangpersediaan/updatestatusorderpenyaluran/<?php echo $data->id_mutasi; ?>" onclick="return confirm('Apakah anda sudah memeriksa barang dan ingin konfirmasi selesai?');" class="btn btn-danger" style="margin-bottom: 1px;">Konfirmasi Sudah Disalurkan<i class="fa fa-tag"></i></a>
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
