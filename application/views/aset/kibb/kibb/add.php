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
          <a href="<?php echo base_url('aset/kibb')?>">Aset</a>
        </li>
  
  
        <li class="breadcrumb-item active">Menambah Data KIB B</li>
      </ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Menambah Data KIB B</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('aset/action_menambahdatakibb')?>" method="post" enctype="multipart/form-data">
        
              <div class="form-group">
              <div class="form-row">
                 <div class="col-md-6">
                    <label for="no_polisi">No Polisi</label>
                    <input class="form-control" id="no_polisi" type="text" aria-describedby="nameHelp" name="no_polisi" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="no_pabrik">No Pabrik</label>
                    <input class="form-control" id="no_pabrik" type="text" aria-describedby="nameHelp" name="no_pabrik" required/>
                  </div>
                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="no_rangka">No Rangka</label>
                    <input class="form-control" id="no_rangka" type="text" aria-describedby="nameHelp" name="no_rangka" required/>
                  </div>  
                  <div class="col-md-6">
                    <label for="no_mesin">No Mesin</label>
                    <input class="form-control" id="no_mesin" type="text" aria-describedby="nameHelp" name="no_mesin" required/>
                  </div>
              </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                    <label for="no_bpkb">No BPKB</label>
                    <input class="form-control" id="no_bpkb" type="text" aria-describedby="nameHelp" name="no_bpkb" required/>
                  </div>      
                  <div class="col-md-6">
                    <label for="no_stnk">No STNK</label>
                    <input class="form-control" id="no_stnk" type="text" aria-describedby="nameHelp" name="no_stnk" required/>
                  </div>
              </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                    <label for="nama_barang">Nama Barang</label>
                    <input class="form-control" id="nama_barang" type="text" aria-describedby="nameHelp" name="nama_barang" required/>
                  </div>      
                  <div class="col-md-6">
                    <label for="roda">Roda</label>
                    <select class="form-control" id="roda" name="roda" required />
                    <option></option>
                    <option value="Roda 2 (Dua)">Roda 2 (Dua)</option>
                    <option value="Roda 3 (Tiga)">Roda 3 (Tiga)</option>
                    <option value="Roda 4 (Empat)">Roda 4 (Empat)</option>
                    <option value="Roda 6 (Enam)">Roda 6 (Enam)</option>
                      </select>    </div>
              </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                    <label for="merk">Merk</label>
                    <input class="form-control" id="merk" type="text" aria-describedby="nameHelp" name="merk" required/>
                  </div>      
                  <div class="col-md-6">
                    <label for="type">Type</label>
                    <input class="form-control" id="type" type="text" aria-describedby="nameHelp" name="type" required/>
                  </div>
              </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                    <label for="bahan">Bahan</label>
                    <input class="form-control" id="bahan" type="text" aria-describedby="nameHelp" name="bahan" required/>
                  </div>      
                  <div class="col-md-6">
                    <label for="tahun_pembelian">Tahun Pembelian</label>
                    <input class="form-control" id="tahun_pembelian" type="text" aria-describedby="nameHelp" name="tahun_pembelian" required/>
                  </div>
              </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                    <label for="harga">Harga</label>
                    <input class="form-control" id="harga" type="text" aria-describedby="nameHelp" name="harga" required/>
                  </div>
                  <div class="col-md-6">
                    <label for="sumber_perolehan">Sumber Perolehan</label>
                    <input class="form-control" id="sumber_perolehan" type="text" aria-describedby="nameHelp" name="sumber_perolehan" required/>
                  </div>
              </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                    <label for="tgl_berlaku_pajak">Tanggal Berlaku Pajak</label>
                    <input class="form-control" id="tgl_berlaku_pajak" type="date" aria-describedby="nameHelp" name="tgl_berlaku_pajak" required/>
                  </div>      
                  <div class="col-md-6">
                    <label for="tgl_berlaku_stnk">Tanggal Berlaku STNK</label>
                    <input class="form-control" id="tgl_berlaku_stnk" type="date" aria-describedby="nameHelp" name="tgl_berlaku_stnk" required/>
                  </div>
              </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                    <label for="keterangan">Keterangan</label>
                    <input class="form-control" id="keterangan" type="text" aria-describedby="nameHelp" name="keterangan" required/>
                  </div>    
              </div>
              </div>

              <div class="form-group">
              <div class="form-row">
              <div class="col-md-6">
                    <label for="tanggal_pencatatan">Tanggal Pencatatan</label>
                    <input class="form-control" id="tanggal_pencatatan" type="date" aria-describedby="nameHelp" name="tanggal_pencatatan" required/>
                  </div>
                <div class="col-md-6">
                    <label for="pejabat_pengguna">Pejabat Pengguna</label>
                    <input class="form-control" id="pejabat_pengguna" type="text" aria-describedby="nameHelp" name="pejabat_pengguna" required/>
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
          </form>
        </div>
</div>
</div>
</div>
</div>



</div>
    </section>

<?php $this->load->view('include/footer'); ?>
