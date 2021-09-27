<?php 
$this->load->view('include/header'); 
?>
  <div>
    <table>
    <tr height="100px"><td></td></tr>
</table>
  </div>
<section id_rekanan="services" class="services">
      <div class="container">
      <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="">Barang Persediaan</a>
        </li>
  
        <li class="breadcrumb-item active"> Surat Penyaluran Barang</li>
      </ol>

      <div class="container">
      
  <!-- Example DataTables Card-->
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>  Surat Penyaluran Barang</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
            
                <tr class="text-center">
                  <th>No</th>
                  <th>Tanggal Pesan</th>
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
                  <td><?= $data->tanggal_pesan ?></td>
                  <td><?= $data->statuspenyaluran ?></td>
                  <td> 
                    <a href="<?php echo base_url('')?>suratpenyaluran/update/<?php echo $data->id_mutasi; ?>" class="btn btn-warning" style="margin-bottom: 1px;">Surat<i class="fa fa-tag"></i></a>
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
