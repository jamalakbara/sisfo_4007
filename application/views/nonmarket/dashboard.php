<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('base_layout/head_tag'); ?>
    <title>Dashboard</title>
    <!-- Input CSS atau JS yang dibutuhkan setelah line ini -->
    <!-- Taruh file css di folder /css-->
    <!-- Taruh file js di /js-->


    <!-- Contoh cara input css, ganti sesuai kebutuhan -->
    <?php /* echo link_tag('css/base_styles.css') */ ?>
  </head>
  <body>
    <div class="container-fluid p-0">
      <div class="row equal no-gutters">
        <?php $this->load->view('base_layout/sidebar'); ?>
        <div class="col-12 col-sm-8 col-md-9 col-xl-10 wrapper">
          <?php $this->load->view('base_layout/topmenu'); ?>
          <div class="col-12 wrapper-container">
            <div class="main-wrapper">
              <div class="container">
                <div class="page-header">
                  <!-- Silakan replace sesuai judul halaman divisi kalian -->
                  <div class="page-title">
                    Dashboard
                  </div>
                  <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                  <div class="page-subtitle">

                  </div>
                </div>
                <div class="row">
								<!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->
								<!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
								<div class="col-8">
									<div class="box">
										<div class="box-header">
											Dashboard
										</div>
										<div class="box-body">
											<p>
												<marquee id="test">Selamat Datang Di Aplikasi Telkom Indonesia </marquee>
											</p>
										</div>
									</div>
								</div>
                <div class="col-4">
                    <div class="box">
                    
                      <div class="box-body">
                        <img src="<?php echo base_url('css/images/telkom.jpg'); ?>" class="img-responsive  fit-image" alt="" height="" width="300">
                      </div>
                    </div>
                  </div>
							</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('base_layout/js_mandatory')?>
  </body>
</html>
