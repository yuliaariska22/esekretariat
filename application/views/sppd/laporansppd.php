<?php 
$this->load->view('include/header'); 
?>
  <section id="hero">
    <div class="hero-container" data-aos="fade-in"> 
    <div class="container">
        <div class="row">

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="feature-block">

              <img src="<?php echo base_url(); ?>assets/img/svg/cloud.svg" alt="img" class="img-fluid">
              <h4 class="title"><a href="<?php echo base_url('sppd/rekapitulasisppd'); ?>">Rekapitulasi SPPD </a></h4>

            </div>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="feature-block">

              <img src="<?php echo base_url(); ?>assets/img/svg/planet.svg" alt="img" class="img-fluid">
              <h4 class="title"><a href="<?php echo base_url('sppd/rekapitulasisppdtransportasiudara'); ?>">Rekapitulasi Pembayaran Transportasi Udara</a></h4>

            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="feature-block">
              <img src="<?php echo base_url(); ?>assets/img/svg/asteroid.svg" alt="img" class="img-fluid">
              <h4 class="title"><a href="<?php echo base_url('sppd/rekapitulasibiayapenginapan'); ?>">Rekapitulasi Biaya Penginapan</a></h4>
            </div>
          </div>

        </div>

      <br><br><br>
      <div class="row">

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="feature-block">
              <img src="<?php echo base_url(); ?>assets/img/svg/asteroid.svg" alt="img" class="img-fluid">
              <h4 class="title"><a href="<?php echo base_url('sppd/rekapitulasisppddalamdaerah'); ?>">Rekapitulasi SPPD Dalam Daerah</a></h4>
            </div>
          </div>

          </div>
</div>
      

    
  </section><!-- End Hero Section -->

  <main id="main">
  </main>
<?php 
$this->load->view('include/footer'); 
?>  