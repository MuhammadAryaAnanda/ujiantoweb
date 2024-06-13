<?php

use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'Seleksi Ujian Online';
?>
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="breadcrumb-title pe-3">UJIAN</div>
  <div class="ps-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="/dashboard/empat"><i class="bx bx-home-alt"></i></a>
        </li>
        <!-- <li class="breadcrumb-item active" aria-current="page">Dashboard</li> -->
        <!-- <li class="breadcrumb-item"></li> -->
        <li class="breadcrumb-item active" aria-current="page">Sesi Ujian</li>
      </ol>
    </nav>
  </div>
</div>
<div class="my-3 border-top"></div>
<!-- <h6 class="mb-0 text-uppercase">UJIAN</h6> -->
<!-- <div class="my-3 border-top"></div> -->
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-4">

  <div class="col">
    <div class="card radius-10 bg-success">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="">
            <p class="mb-1 text-white">Jurusan</p>
            <h6 class="mb-0 text-white">Teknologi Informasi</h6>
          </div>
          <div class="ms-auto widget-icon bg-white-1 text-white">
            <i class="bi bi-book-fill"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card radius-10 bg-pink">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="">
            <p class="mb-1 text-white">Tanggal</p>
            <h6 class="mb-0 text-white">
              <span class="d-block"><?= strftime('%A, %d %B %Y') ?></span>
            </h6>
          </div>
          <div class="ms-auto widget-icon bg-white-1 text-white">
            <i class="bi bi-calendar-fill"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card radius-10 bg-orange">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="">
            <p class="mb-1 text-white">Jam</p>
            <h6 class="mb-0 text-white">
              <span class="d-block">
                <span class="live-clock"><?= date('H:i:s') ?></span>
              </span>
            </h6>
          </div>
          <div class="ms-auto widget-icon bg-white-1 text-white">
            <i class="bi bi-clock-fill"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <!-- <div class="card radius-10 bg-primary">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <p class="mb-1 text-white">Total Orders</p>
                        <h4 class="mb-0 text-white">248</h4>
                      </div>
                      <div class="ms-auto widget-icon bg-white-1 text-white">
                        <i class="bi bi-bag-check-fill"></i>
                      </div>
                    </div>
                  </div>
                </div> -->
  </div>
  <!-- <div class="col">
                <div class="card radius-10 bg-danger">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <p class="mb-1 text-white">Total Orders</p>
                        <h4 class="mb-0 text-white">542</h4>
                      </div>
                      <div class="ms-auto fs-2 text-white">
                        <i class="bi bi-cup"></i>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
               <div class="col">
                <div class="card radius-10 bg-info">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <p class="mb-1 text-white">Total Income</p>
                        <h4 class="mb-0 text-white">$875</h4>
                      </div>
                      <div class="ms-auto fs-2 text-white">
                        <i class="bi bi-wallet"></i>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
               <div class="col">
                <div class="card radius-10 bg-purple">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <p class="mb-1 text-white">Comments</p>
                        <h4 class="mb-0 text-white">59</h4>
                      </div>
                      <div class="ms-auto fs-2 text-white">
                        <i class="bi bi-chat-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
               <div class="col">
                <div class="card radius-10 bg-primary">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <p class="mb-1 text-white">Tickets</p>
                        <h4 class="mb-0 text-white">145</h4>
                      </div>
                      <div class="ms-auto fs-2 text-white">
                        <i class="bi bi-truck"></i>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
               <div class="col">
                <div class="card radius-10 bg-primary">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <p class="mb-1 text-white">Notifications</p>
                        <h4 class="mb-0 text-white">145</h4>
                      </div>
                      <div class="ms-auto fs-2 text-white">
                        <i class="bi bi-bell"></i>
                      </div>
                    </div>
                    <hr class="my-2 border-top border-light">
                    <small class="mb-0 text-white"><i class="bi bi-arrow-up"></i> <span>+12.3% from last week</span></small>
                  </div>
                </div>
               </div>
               <div class="col">
                <div class="card radius-10 bg-orange">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <p class="mb-1 text-white">Total Posts</p>
                        <h4 class="mb-0 text-white">249</h4>
                      </div>
                      <div class="ms-auto fs-2 text-white">
                        <i class="bi bi-pencil"></i>
                      </div>
                    </div>
                    <hr class="my-2 border-top border-light">
                    <small class="mb-0 text-white"><i class="bi bi-arrow-up"></i> <span>+10.5% from last week</span></small>
                  </div>
                </div>
               </div>
               <div class="col">
                <div class="card radius-10 bg-success">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <p class="mb-1 text-white">Messages</p>
                        <h4 class="mb-0 text-white">845</h4>
                      </div>
                      <div class="ms-auto fs-2 text-white">
                        <i class="bi bi-envelope"></i>
                      </div>
                    </div>
                    <hr class="my-2 border-top border-light">
                    <small class="mb-0 text-white"><i class="bi bi-arrow-up"></i> <span>+15.8% from last week</span></small>
                  </div>
                </div>
               </div>
               <div class="col">
                <div class="card radius-10 bg-purple">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <p class="mb-1 text-white">Articles</p>
                        <h4 class="mb-0 text-white">645</h4>
                      </div>
                      <div class="ms-auto fs-2 text-white">
                        <i class="bi bi-book"></i>
                      </div>
                    </div>
                    <hr class="my-2 border-top border-light">
                    <small class="mb-0 text-white"><i class="bi bi-arrow-up"></i> <span>+16.5% from last week</span></small>
                  </div>
                </div>
               </div> -->
</div>
<div class="site-index">

  <div class="col-sm-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">List Ujian</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="box-body">
        <div class="row">
          <!-- <div class="col-sm-4">
                        <button type="button" onclick="reload_ajax()" class="btn btn-sm btn-flat bg-purple"><i class="fa fa-refresh"></i> Reload</button>
                    </div> -->
        </div>
      </div>
      <div class="table-responsive px-4 pb-3" style="border: 0">
        <table id="example2" class="display nowrap table table-striped table-hover dataTable dtr-column" style="width:100%">
          <thead>
            <tr>
              <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc"></th>
              <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">No</th>
              <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">Nama Ujian</th>
              <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">Bidang</th>
              <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">Mentor</th>
              <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">Jumlah Soal</th>
              <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">Waktu</th>
              <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">Aksi</th>
              <!-- <th>No.</th>
                        <th>Nama Ujian</th>
                        <th>Mata Kuliah</th>
						            <th>Dosen</th>
                        <th>Jumlah Soal</th>
                        <th>Waktu</th>
                        <th class="text-center">Aksi</th> -->
            </tr>
          </thead>
          <tbody>
            <?php //foreach ($dataProvider->models as $index => $model) : 
            ?>
            <tr>
              <td></td>
              <!-- <td><?php //= $index + 1 
                        ?></td> -->
              <td>1</td>
              <td>Tes Umum</td>
              <td>All</td>
              <td>-</td>
              <td>30</td>
              <td>60 Menit</td>
              <td>
                <?php if ($checkujian) : ?>
                  <?php if ($checkujian['waktu_selesai'] !== '00:00:00') : ?>
                    <p><a class="btn btn-lg btn-success" href="site/quiz?quiz=1">Lanjutkan Ujian</a></p>
                  <?php else : ?>
                    <p><button class="btn btn-lg btn-secondary" disabled>Anda Sudah Melakukan Ujian</button></p>
                  <?php endif; ?>
                <?php else : ?>
                  <p><a class="btn btn-lg btn-success" href="site/quiz?quiz=1">Mulai</a></p>
                <?php endif; ?>
              </td>
            </tr>
            <tr>
              <td></td>
              <!-- <td><?php //= $index + 1 
                        ?></td> -->
              <td>2</td>
              <td>Tes Bidang UKDP</td>
              <td>UKDP</td>
              <td>Opa</td>
              <td>10</td>
              <td>30 Menit</td>
              <td>
                <?php if ($checkujian2) : ?>
                  <?php if ($checkujian2['waktu_selesai'] !== '00:00:00') : ?>
                    <p><a class="btn btn-lg btn-success" href="site/quiz?quiz=2">Lanjutkan Ujian</a></p>
                  <?php else : ?>
                    <p><button class="btn btn-lg btn-secondary" disabled>Anda Sudah Melakukan Ujian</button></p>
                  <?php endif; ?>
                <?php else : ?>
                  <p><a class="btn btn-lg btn-success" href="site/quiz?quiz=2">Mulai</a></p>
                <?php endif; ?>
              </td>
            </tr>
            <?php //endforeach; 
            ?>
          </tbody>
          <!-- <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Nama Ujian</th>
                        <th>Mata Kuliah</th>
						<th>Dosen</th>
                        <th>Jumlah Soal</th>
                        <th>Waktu</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </tfoot> -->
        </table>
      </div>
    </div>
  </div>


  <div class="body-content">

    <div class="row">
      <!-- <div class="col-lg-4 mb-3">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div> -->

    </div>
  </div>
  <div class="overlay nav-toggle-icon"></div>

  <footer class="footer">
    <div class="footer-text">
      Copyright © 2022. All right reserved.
    </div>
  </footer>
  <!--end footer -->

  <!--Start Back To Top Button-->
  <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
  <!--End Back To Top Button-->

  <!--start switcher-->
  <div class="switcher-body">
    <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
    <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
      <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body">
        <h6 class="mb-0">Theme Variation</h6>
        <hr>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
          <label class="form-check-label" for="LightTheme">Light</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
          <label class="form-check-label" for="DarkTheme">Dark</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
          <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
        </div>
        <hr>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3" checked>
          <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
        </div>
        <!-- <hr />
                    <h6 class="mb-0">Header Colors</h6>
                    <hr />
                    <div class="header-colors-indigators">
                        <div class="row row-cols-auto g-3">
                            <div class="col">
                                <div class="indigator headercolor1" id="headercolor1"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor2" id="headercolor2"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor3" id="headercolor3"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor4" id="headercolor4"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor5" id="headercolor5"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor6" id="headercolor6"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor7" id="headercolor7"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor8" id="headercolor8"></div>
                            </div>
                        </div> -->
      </div>
    </div>
  </div>
</div>

<script>
  function updateClock() {
    var now = new Date();
    var hours = String(now.getHours()).padStart(2, '0');
    var minutes = String(now.getMinutes()).padStart(2, '0');
    var seconds = String(now.getSeconds()).padStart(2, '0');
    var timeString = hours + ':' + minutes + ':' + seconds;
    document.querySelector('.live-clock').textContent = timeString;
  }

  setInterval(updateClock, 1000);
  updateClock(); // initial call to display the clock immediately
</script>