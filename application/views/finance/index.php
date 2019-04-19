<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <?php $this->load->view('base_layout/head_tag'); ?>
  <title>Index Finance</title>
  <!-- Input CSS atau JS yang dibutuhkan setelah line ini -->
  <!-- Taruh file css di folder /css-->
  <!-- Taruh file js di /js-->

  <!-- Contoh cara input css, ganti sesuai kebutuhan -->
  <?php /* echo link_tag('css/base_styles.css') */ ?>
  <?php  echo link_tag('css/finance.css') ?>
  <?php /* echo link_tag('css/finance.css') */ ?>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
                  Dashboard Finance
                </div>
                <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                <div class="page-subtitle">
                  <?php 
                    if ($input == 1){ ?>
                  <div class="alert alert-success" role="alert">
                    Data Berhasil Di Masukan
                  </div>
                  <?php  }
                  ?>
                </div>
              </div>
              <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->
              <!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
              <!--tab pemasukkan-->
              <div class="row">
                <div class="col-4" data-toggle="modal" data-target="#pemasukan">
                  <div class="box">
                    <div class="box-body">
                      <div class="row">
                        <div class="col-md-4">
                          <img src="<?php echo base_url('css/images/pemasukkan.png'); ?>"
                            class="img-responsive fit-image" alt="">
                        </div>
                        <div class="col-md-8">
                          <h2>Pemasukkan</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--tab pengeluaran-->
                <div class="col-4" data-toggle="modal" data-target="#pengeluaran">
                  <div class="box">
                    <div class="box-body">
                      <div class="row">
                        <div class="col-md-4">
                          <img src="<?php echo base_url('css/images/pengeluaran.png'); ?>"
                            class="img-responsive fit-image" alt="">
                        </div>
                        <div class="col-md-8">
                          <h2>Pengeluaran</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--tab sinkronisasi pemesanan-->
                <div class="col-4">
                  <div class="box">
                    <div class="box-body">
                      <div class="row">
                        <div class="col-md-4">
                          <img src="<?php echo base_url('css/images/pemesanan.png'); ?>"
                            class="img-responsive fit-image" alt="">
                        </div>
                        <div class="col-md-8">
                          <h2>Pemesanan</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <!--tab laporan pemasukan-->
                <div class="col-4">
                  <div class="box">
                    <div class="box-body">
                      <div class="row">
                        <div class="col-md-4">
                          <img src="<?php echo base_url('css/images/pemasukkan.png'); ?>"
                            class="img-responsive fit-image" alt="">
                        </div>
                        <div class="col-md-8">
                          <h2>Laporan Pemasukkan</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--tab laporan pengeluaran-->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $this->load->view('base_layout/js_mandatory')?>
  <!-- Modal PEMASUKAN-->
  <div class="modal fade" id="pemasukan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Input Pemasukan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?php echo base_url('Finance/inputfinance'); ?>">
            <input type="hidden" class="form-control" id="Blanko" aria-describedby="emailHelp" name="tipe" value="M1">
            <div class="form-group">
              <label for="Blanko">Nomor Blanko</label>
              <input type="text" class="form-control" id="Blanko" aria-describedby="emailHelp"
                placeholder="Masukan Nomor Blanko" name="blanko">
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="Date" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Keperluan / Keterangan</label>
              <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="keperluan"
                name="keperluan"></textarea>
            </div>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Rp.</span>
              </div>
              <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Pemasukan / Debit"
                name="debit">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Pengeluaran-->
  <div class="modal fade" id="pengeluaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Input Pengeluaran</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?php echo base_url('Finance/inputfinance'); ?>">
            <input type="hidden" class="form-control" id="Blanko" aria-describedby="emailHelp" name="tipe" value="K1">
            <div class="form-group">
              <label for="Blanko">Nomor Blanko</label>
              <input type="text" class="form-control" id="Blanko" aria-describedby="emailHelp"
                placeholder="Masukan Nomor Blanko" name="blanko">
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="Date" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Keperluan / Keterangan</label>
              <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="keperluan"
                name="keperluan"></textarea>
            </div>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Rp.</span>
              </div>
              <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Pengeluaran / Kredit"
                name="Kredit">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>