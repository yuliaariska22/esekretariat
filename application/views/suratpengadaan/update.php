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
          <a href="<?php echo base_url('suratpengadaan')?>">Surat Pengadaan</a>
        </li>
  
        <li class="breadcrumb-item active">No Surat Pengadaan</li>
      </ol>

      
<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> No Surat Pengadaan</div>
        <div class="card-body">
          <div class="table-responsive">
             <div class="container">

        <form action="<?php echo base_url('suratpengadaan/simpan_update')?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_mutasi"  value="<?php echo $ambil->id_mutasi; ?>" />
        
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_suratpermohonanpptk">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_suratpermohonanpptk; ?>"class="form-control" id="tanggal_suratpermohonanpptk" type="date" aria-describedby="nameHelp" name="tanggal_suratpermohonanpptk" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_suratpermohonanpptk">Nomor Surat Permohonan Permintaan Barang</label>
                    <input value="<?php echo $ambil->no_suratpermohonanpptk; ?>"class="form-control" id="no_suratpermohonanpptk" type="text" aria-describedby="nameHelp" name="no_suratpermohonanpptk" />
                  </div>  

                  <div class="col-md-2">
                    <label for="belanja">Penyediaan Belanja</label>
                    <input value="<?php echo $ambil->belanja; ?>"class="form-control" id="belanja" type="text" aria-describedby="nameHelp" name="belanja" />
                  </div>

                

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_suratpermohonanpenyedia">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_suratpermohonanpenyedia; ?>"class="form-control" id="tanggal_suratpermohonanpenyedia" type="date" aria-describedby="nameHelp" name="tanggal_suratpermohonanpenyedia" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_suratpermohonanpenyedia">Nomor Surat Permohonan dari SKPD kepada Penyedia</label>
                    <input value="<?php echo $ambil->no_suratpermohonanpenyedia; ?>"class="form-control" id="no_suratpermohonanpenyedia" type="text" aria-describedby="nameHelp" name="no_suratpermohonanpenyedia" />
                  </div>  

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_suratbalasan">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_suratbalasan; ?>"class="form-control" id="tanggal_suratbalasan" type="date" aria-describedby="nameHelp" name="tanggal_suratbalasan" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_suratbalasan">Nomor Surat Balasan dari Penyedia</label>
                    <input value="<?php echo $ambil->no_suratbalasan; ?>"class="form-control" id="no_suratbalasan" type="text" aria-describedby="nameHelp" name="no_suratbalasan" />
                  </div>  


                </div>
              </div>
              
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_suratperintahpengiriman">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_suratperintahpengiriman; ?>"class="form-control" id="tanggal_suratperintahpengiriman" type="date" aria-describedby="nameHelp" name="tanggal_suratperintahpengiriman" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_suratperintahpengiriman">Nomor Surat Perintah Pengiriman (Surat Pesanan)</label>
                    <input value="<?php echo $ambil->no_suratperintahpengiriman; ?>"class="form-control" id="no_suratperintahpengiriman" type="text" aria-describedby="nameHelp" name="no_suratperintahpengiriman" />
                  </div>  

                  <div class="col-md-2">
                    <label for="waktu_penyelesaian">Waktu Penyelesaian</label>
                    <input value="<?php echo $ambil->waktu_penyelesaian; ?>"class="form-control" id="waktu_penyelesaian" type="date" aria-describedby="nameHelp" name="waktu_penyelesaian" />
                  </div>  

                  <div class="col-md-2">
                    <label for="hari">Selama .... Hari</label>
                    <input value="<?php echo $ambil->hari; ?>"class="form-control" id="hari" type="text" aria-describedby="nameHelp" name="hari" />
                  </div> 

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  
                  <div class="col-md-2">
                  </div>
                  <div class="col-md-2">
                    <label for="tanggal_spp">Tanggal SPP</label>
                    <input value="<?php echo $ambil->tanggal_spp; ?>"class="form-control" id="tanggal_spp" type="date" aria-describedby="nameHelp" name="tanggal_spp" />
                  </div>

                  <div class="col-md-2">
                    <label for="no_spp">Nomor SPP</label>
                    <input value="<?php echo $ambil->no_spp; ?>"class="form-control" id="no_spp" type="text" aria-describedby="nameHelp" name="no_spp" />
                  </div>  

                  <div class="col-md-2">
                    <label for="sppbelanja">SPP Belanja</label>
                    <input value="<?php echo $ambil->sppbelanja; ?>"class="form-control" id="sppbelanja" type="text" aria-describedby="nameHelp" name="sppbelanja" />
                  </div>  

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_bapenyedia">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_bapenyedia; ?>"class="form-control" id="tanggal_bapenyedia" type="date" aria-describedby="nameHelp" name="tanggal_bapenyedia" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_bapenyedia">Nomor BA Penerimaan Dan Pemeriksaan Dari Penyedia Ke PPK</label>
                    <input value="<?php echo $ambil->no_bapenyedia; ?>"class="form-control" id="no_bapenyedia" type="text" aria-describedby="nameHelp" name="no_bapenyedia" />
                  </div>  
                 

                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_bappk">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_bappk; ?>"class="form-control" id="tanggal_bappk" type="date" aria-describedby="nameHelp" name="tanggal_bappk" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_bappk">Nomor BA Serah Terima Barang dari PPK ke PA/KPA</label>
                    <input value="<?php echo $ambil->no_bappk; ?>"class="form-control" id="no_bappk" type="text" aria-describedby="nameHelp" name="no_bappk" />
                  </div>  

                </div>
              </div>
            
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_faktur">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_faktur; ?>"class="form-control" id="tanggal_faktur" type="date" aria-describedby="nameHelp" name="tanggal_faktur" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_faktur">Nomor Faktur</label>
                    <input value="<?php echo $ambil->no_faktur; ?>"class="form-control" id="no_faktur" type="text" aria-describedby="nameHelp" name="no_faktur" />
                  </div>  


                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_suratpermohonanpembayaran">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_suratpermohonanpembayaran; ?>"class="form-control" id="tanggal_suratpermohonanpembayaran" type="date" aria-describedby="nameHelp" name="tanggal_suratpermohonanpembayaran" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_suratpermohonanpembayaran">Nomor Surat Permohonan Pembayaran</label>
                    <input value="<?php echo $ambil->no_suratpermohonanpembayaran; ?>"class="form-control" id="no_suratpermohonanpembayaran" type="text" aria-describedby="nameHelp" name="no_suratpermohonanpembayaran" />
                  </div>  


                </div>
                </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-2">
                    <label for="ppn">PPN</label>
                    <input value="<?php echo $ambil->ppn; ?>"class="form-control" id="ppn" type="text" aria-describedby="nameHelp" name="ppn" />  
                  </div>

                  <div class="col-md-2">
                    <label for="pphpasal22">PPh Pasal 22</label>
                    <input value="<?php echo $ambil->pphpasal22; ?>"class="form-control" id="pphpasal22" type="text" aria-describedby="nameHelp" name="pphpasal22" />  
                  </div>
                  <div class="col-md-2">
                    <label for="pphpasal23">PPN Pasal 23</label>
                    <input value="<?php echo $ambil->pphpasal23; ?>"class="form-control" id="pphpasal23" type="text" aria-describedby="nameHelp" name="pphpasal23" />  
                  </div>
                  <div class="col-md-2">
                    <label for="pasal4ayat2">Pasal 4 ayat 2</label>
                    <input value="<?php echo $ambil->pasal4ayat2; ?>"class="form-control" id="pasal4ayat2" type="text" aria-describedby="nameHelp" name="pasal4ayat2" />  
                  </div>
                  <div class="col-md-2">
                    <label for="pajakdaerah">Pajak Daerah</label>
                    <input value="<?php echo $ambil->pajakdaerah; ?>"class="form-control" id="pajakdaerah" type="text" aria-describedby="nameHelp" name="pajakdaerah" />  
                  </div>
                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_bapembayaran">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_bapembayaran; ?>"class="form-control" id="tanggal_pesan" type="date" aria-describedby="nameHelp" name="tanggal_bapembayaran" />
                  </div>

                  <div class="col-md-6">
                    <label for="no_bapembayaran">Nomor Berita Acara Pembayaran</label>
                    <input value="<?php echo $ambil->no_bapembayaran; ?>"class="form-control" id="no_bapembayaran" type="text" aria-describedby="nameHelp" name="no_bapembayaran" />
                  </div>  

                  <div class="col-md-2">
                    <label for="namakegiatan">Nama Kegiatan</label>
                    <input value="<?php echo $ambil->namakegiatan; ?>"class="form-control" id="namakegiatan" type="text" aria-describedby="nameHelp" name="namakegiatan" />
                  </div>

                  <div class="col-md-2">
                    <label for="namapekerjaan">Nama Pekerjaan</label>
                    <input value="<?php echo $ambil->namapekerjaan; ?>"class="form-control" id="namapekerjaan" type="text" aria-describedby="nameHelp" name="namapekerjaan" />
                  </div>

                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-2">
                    <label for="potppn"><b>Potongan</b> PPN</label>
                    <input value="<?php echo $ambil->potppn; ?>"class="form-control" id="potppn" type="text" aria-describedby="nameHelp" name="potppn" />  
                  </div>

                  <div class="col-md-2">
                    <label for="potpphpasal22"> PPh Pasal 22</label>
                    <input value="<?php echo $ambil->potpphpasal22; ?>"class="form-control" id="potpphpasal22" type="text" aria-describedby="nameHelp" name="potpphpasal22" />  
                  </div>
                  <div class="col-md-2">
                    <label for="potpphpasal23"> PPN Pasal 23</label>
                    <input value="<?php echo $ambil->potpphpasal23; ?>"class="form-control" id="potpphpasal23" type="text" aria-describedby="nameHelp" name="potpphpasal23" />  
                  </div>
                  <div class="col-md-2">
                    <label for="potpasal4ayat2"> Pasal 4 ayat 2</label>
                    <input value="<?php echo $ambil->potpasal4ayat2; ?>"class="form-control" id="potpasal4ayat2" type="text" aria-describedby="nameHelp" name="potpasal4ayat2" />  
                  </div>
                  <div class="col-md-2">
                    <label for="potpajakdaerah"> Pajak Daerah</label>
                    <input value="<?php echo $ambil->potpajakdaerah; ?>"class="form-control" id="potpajakdaerah" type="text" aria-describedby="nameHelp" name="potpajakdaerah" />  
                  </div>
                </div>
              </div>
  <div class="form-group">
              <div class="form-row">
                  <div class="col-md-2">
                    <label for="tanggal_kwitansi">Tanggal</label>
                    <input value="<?php echo $ambil->tanggal_kwitansi; ?>"class="form-control" id="tanggal_kwitansi" type="date" aria-describedby="nameHelp" name="tanggal_kwitansi" />
                  </div>

                  <div class="col-md-2">
                    <label for="no_kwitansi">Nomor Kwitansi</label>
                    <input value="<?php echo $ambil->no_kwitansi; ?>"class="form-control" id="no_kwitansi" type="text" aria-describedby="nameHelp" name="no_kwitansi" />
                  </div> 

                  <div class="col-md-2">
                    <label for="kode_kegiatan">Kode Kegiatan</label>
                    <input value="<?php echo $ambil->kode_kegiatan; ?>"class="form-control" id="kode_kegiatan" type="text" aria-describedby="nameHelp" name="kode_kegiatan" />
                  </div>

                  <div class="col-md-2">
                    <label for="kode_rekening">Kode Rekening</label>
                    <input value="<?php echo $ambil->kode_rekening; ?>"class="form-control" id="kode_rekening" type="text" aria-describedby="nameHelp" name="kode_rekening" />
                  </div>   


                </div>
              </div>
              <div class="form-group">
              <div class="form-row">
                  <div class="col-md-6">
                    <label for="surat">Print Surat</label>
                    <select class="form-control form-control-sm" id="surat" name="surat"/>
                    <option value="">Pilih Jenis Surat untuk di Print</option>
                    <option value="surat1">Surat Permohonan Permintaan Barang</option>
                    <option value="surat2">Surat Permohonan dari SKPD kepada Penyedia</option>
                    <option value="surat3">Surat Balasan dari Penyedia</option>
                    <option value="surat4">Surat Perintah Pengiriman (Surat Pesanan)</option>
                    <option value="surat5">Berita Acara Penerimaan Dan Pemeriksaan Dari Penyedia Ke PPK</option>
                    <option value="surat6">Berita Acara Serah Terima Barang dari PPK ke PA/KPA</option>
                    <option value="surat7">Kwitansi</option>
                    <option value="surat8">Faktur</option>
                    <option value="surat9">Surat Permohonan Pembayaran</option>
                    <option value="surat10">Berita Acara Pembayaran</option>
                    </select></div>

                </div>
              </div>

             

              <div class="form-group">
            <div class="form-row">
              <div class="col-md-2">
                <input class="form-control btn btn-primary" type="submit" value="Simpan" name="btnSimpan" >
              </div>
              <div class="col-md-2">
                <input class="form-control btn btn-success" type="submit" value="Print" name="btnPrint" >
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
