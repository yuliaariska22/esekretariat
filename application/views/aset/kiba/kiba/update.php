<?php 
$this->load->view('include/header'); 
?>


  <div>
    <table>
    <tr height="100px"><td></td></tr>
</table>
  </div>
  <?php foreach ($content->result() as $data) {
          # code...
        } ?>

<?php foreach ($content2->result() as $data2) {
          # code...
        } ?>
 
  <div class="container">
  <ol class="breadcrumb" >
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('aset/kiba')?>">Aset</a>
        </li>
  
  
        <li class="breadcrumb-item active">Edit Data KIB B</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Edit Data KIB B</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo config_item('base_url'); ?>/aset/action_updatedatakiba/<?= $data->id_kiba?>/<?= $data2->id_riwayat_kiba?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_kiba"  value="<?= $data->id_kiba?>" />
        <input type="hidden" name="id_riwayat_kiba"  value="<?= $data2->id_riwayat_kiba?>" />
      
        <div class="form-group">
              <div class="form-row">
                 <div class="col-md-6">
                    <label for="nama_barang">Nama Barang</label>
                    <input value="<?=$data->nama_barang ?>" class="form-control" id="nama_barang" type="text" aria-describedby="nameHelp" name="nama_barang" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="no_kode_barang">No Kode Barang</label>
                    <input value="<?=$data->no_kode_barang ?>" class="form-control" id="no_kode_barang" type="text" aria-describedby="nameHelp" name="no_kode_barang" required/>
                  </div>
                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="no_register">No Register</label>
                    <input value="<?=$data->no_register ?>" class="form-control" id="no_register" type="text" aria-describedby="nameHelp" name="no_register" required/>
                  </div>  
                  <div class="col-md-6">
                    <label for="luas_catat_kib">Luas Catat Sesuai KIB</label>
                    <input value="<?=$data->luas_catat_kib ?>" class="form-control" id="luas_catat_kib" type="text" aria-describedby="nameHelp" name="luas_catat_kib" required/>
                  </div>
              </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                    <label for="kor_tambah_unit">Koreksi Bertambah Unit</label>
                    <input value="<?=$data->kor_tambah_unit ?>" class="form-control" id="kor_tambah_unit" type="text" aria-describedby="nameHelp" name="kor_tambah_unit" required/>
                  </div>      
                  <div class="col-md-6">
                    <label for="kor_kurang_unit">Koreksi Berkurang Unit</label>
                    <input value="<?=$data->kor_kurang_unit ?>" class="form-control" id="kor_kurang_unit" type="text" aria-describedby="nameHelp" name="kor_kurang_unit" required/>
                  </div>
              </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                    <label for="kor_tambah_luas">Koreksi Bertambah Luas</label>
                    <input value="<?=$data->kor_tambah_luas ?>" class="form-control" id="kor_tambah_luas" type="text" aria-describedby="nameHelp" name="kor_tambah_luas" required/>
                  </div>      
                  <div class="col-md-6">
                    <label for="kor_kurang_luas">Koreksi Berkurang Luas</label>
                    <input value="<?=$data->kor_kurang_luas ?>" class="form-control" id="kor_kurang_luas" type="text" aria-describedby="nameHelp" name="kor_kurang_luas" required/>
                   </div>
              </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                    <label for="kor_kurang_luas">Koreksi Bertambah Nilai</label>
                    <input value="<?=$data->kor_kurang_luas ?>" class="form-control" id="kor_tambah_nilai" type="text" aria-describedby="nameHelp" name="kor_tambah_nilai" required/>
                  </div>      
                  <div class="col-md-6">
                    <label for="kor_kurang_nilai">Koreksi Berkurang Nilai</label>
                    <input value="<?=$data->kor_kurang_nilai ?>" class="form-control" id="kor_kurang_nilai" type="text" aria-describedby="nameHelp" name="kor_kurang_nilai" required/>
                  </div>
              </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                    <label for="alamat">Alamat</label>
                    <input value="<?=$data->alamat ?>" class="form-control" id="alamat" type="text" aria-describedby="nameHelp" name="alamat" required/>
                  </div>      
                  <div class="col-md-6">
                    <label for="ket_tanah">Keterangan Tanah</label>
                    <select class="form-control" id="ket_tanah" name="ket_tanah" required />
                    <option value="<?=$data->ket_tanah ?>"><?=$data->ket_tanah ?></option>
                    <option value="TB">TB</option>
                    <option value="TI">TI</option>
                    <option value="TJ/G">TJ/G</option>
                      </select></div>
              </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                    <label for="tahun_pengadaan">Tahun Pengadaan</label>
                    <input value="<?=$data->tahun_pengadaan ?>" class="form-control" id="tahun_pengadaan" type="text" aria-describedby="nameHelp" name="tahun_pengadaan" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="statustanah_hak">Status Tanah</label>
                    <input value="<?=$data->statustanah_hak ?>" class="form-control" id="statustanah_hak" type="text" aria-describedby="nameHelp" name="statustanah_hak" required/>
                  </div>
              </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                    <label for="tanggal_sertifikat">Tanggal Sertifikat</label>
                    <input value="<?=$data->tanggal_sertifikat ?>" class="form-control" id="tanggal_sertifikat" type="date" aria-describedby="nameHelp" name="tanggal_sertifikat" required/>
                  </div>      
                  <div class="col-md-6">
                    <label for="no_sertifikat">Nomor Sertifikat</label>
                    <input value="<?=$data->no_sertifikat ?>" class="form-control" id="no_sertifikat" type="text" aria-describedby="nameHelp" name="no_sertifikat" required/>
                  </div>
              </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                    <label for="harga">Harga</label>
                    <input value="<?=$data->harga ?>" class="form-control" id="harga" type="text" aria-describedby="nameHelp" name="harga" required/>
                  </div>    
                  <div class="col-md-6">
                    <label for="ket_perolehan">Keterangan Perolehan</label>
                    <select class="form-control" id="ket_perolehan" name="ket_perolehan" required />
                    <option value="<?=$data->ket_perolehan?>"><?=$data->ket_perolehan?></option>
                    <option value="SERTIFIKAT">SERTIFIKAT</option>
                    <option value="SURAT PERNYATAAN PENYERAHAN TANAH">SURAT PERNYATAAN PENYERAHAN TANAH</option>
                    <option value="AKTA JUAL BELI">AKTA JUAL BELI</option>
                    <option value="AKTA PELEPASAN HAK DENGAN GANTI">AKTA PELEPASAN HAK DENGAN GANTI</option>
                    <option value="PENYERAHAN GANTI RUGI">PENYERAHAN GANTI RUGI</option>
                    <option value="SURAT PERJANJIAN">SURAT PERJANJIAN</option>
                    <option value="TANAH BANGUNAN AIR IRIGASI">TANAH BANGUNAN AIR IRIGASI</option>
                    <option value="TANAH TANPA DOKUMEN">TANAH TANPA DOKUMEN	</option>
                    <option value="HIBAH">HIBAH	</option>
                      </select>   </div>
             </div>
              </div>

              <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                    <label for="keterangan_penguasaan">Keterangan Penguasaan</label>
                    <input value="<?=$data->keterangan_penguasaan?>" class="form-control" id="keterangan_penguasaan" type="text" aria-describedby="nameHelp" name="keterangan_penguasaan" required/>
                  </div>      

                  <div class="col-md-6">
                    <label for="tanggal_pencatatan">Tanggal Pencatatan</label>
                    <input value="<?=$data2->tanggal_pencatatan?>" class="form-control" id="tanggal_pencatatan" type="date" aria-describedby="nameHelp" name="tanggal_pencatatan" required/>
                  </div>      
            
                 
              </div>
              </div>

              <div class="form-group">
            <div class="form-row">
              <div class="col-md-2">
                <input class="form-control btn btn-primary" type="submit" value="Simpan" name="btnSimpan" >
              </div>
            </div>
          </div>
</div>
</div>
</div>
</div>



</div>
    </section>

<?php $this->load->view('include/footer'); ?>


