<?php
$this->title = 'Dashboard Mentor';
?>
<h6 class="mb-0 text-uppercase">DASHBOARD</h6>
<div class="my-3 border-top"></div>
<div class="row">
    <div class="col-sm-4">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Informasi Akun</h3>
            </div>
            <table class="table table-hover">
                <tr>
                    <th>NIP</th>
                    <td><?=$mentor->nip?></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td><?=$mentor->name?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?=$mentor->email?></td>
                </tr>
                <tr>
                    <th>Bidang</th>
                    <td><?=$mentor->bidang->nama?></td>
                </tr>
            </table>
        </div>
    </div>
    <!-- <div class="col-sm-8">
        <div class="box box-solid">
            <div class="box-header bg-purple">
                <h3 class="box-title">Pemberitahuan</h3>
            </div>
            <div class="box-body">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem in animi quibusdam nihil esse ratione, nulla sint enim natus, aut mollitia quas veniam, tempore quia!</p>
                <ul class="pl-4">
                    <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur, culpa.</li>
                    <li>Provident dolores doloribus, fugit aperiam alias tempora saepe non omnis.</li>
                    <li>Doloribus sed eum et repellat distinctio a repudiandae quia voluptates.</li>
                    <li>Adipisci hic rerum illum odit possimus voluptatibus ad aliquid consequatur.</li>
                    <li>Laudantium sapiente architecto excepturi beatae est minus, labore non libero.</li>
                </ul>
            </div>
        </div>
    </div> -->
</div>


          
       <!--end page main-->

       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

       <!--start footer-->
       <footer class="footer">
        <div class="footer-text">
           Copyright © 2022. All right reserved.
        </div>
        </footer>
        <!--end footer-->


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
            <hr/>
            <h6 class="mb-0">Header Colors</h6>
            <hr/>
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
              </div>
            </div>
          </div>
        </div>
       </div>
       <!--end switcher-->

  
  <!--end wrapper-->
  
  <!-- <script>new PerfectScrollbar(".best-product")</script> -->





  
  <!--end wrapper-->
  
  <!-- <script>new PerfectScrollbar(".best-product")</script> -->
 <!--start content-->
              
              <!-- <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
                <div class="col">
                  <div class="card overflow-hidden rounded-4">
                      <div class="card-body p-2">
                       <div class="d-flex align-items-stretch justify-content-between  rounded-4 overflow-hidden bg-primary">
                        <div class="w-50 p-3">
                          <p class="text-white">Total Orders</p>
                          <h4 class="text-white">8,542</h4>
                        </div>
                        <div class="w-50 p-3">
                           <p class="mb-3 text-white text-end">+ 16% <i class="bi bi-arrow-up"></i></p>
                           <div id="chart1"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                 </div>
                 <div class="col">
                  <div class="card overflow-hidden  rounded-4">
                      <div class="card-body p-2">
                       <div class="d-flex align-items-stretch justify-content-between rounded-4 overflow-hidden bg-primary">
                        <div class="w-50 p-3">
                          <p class="text-white">Total Views</p>
                          <h4 class="text-white">12.5M</h4>
                        </div>
                        <div class="w-50 p-3">
                           <p class="mb-3 text-white text-end">- 3.4% <i class="bi bi-arrow-down"></i></p>
                           <div id="chart2"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                 </div>
                 <div class="col">
                  <div class="card overflow-hidden rounded-4">
                      <div class="card-body p-2">
                       <div class="d-flex align-items-stretch justify-content-between rounded-4 overflow-hidden bg-primary">
                        <div class="w-50 p-3">
                          <p class="text-white">Revenue</p>
                          <h4 class="text-white">$64.5K</h4>
                        </div>
                        <div class="w-50 p-3">
                           <p class="mb-3 text-white text-end">+ 24% <i class="bi bi-arrow-up"></i></p>
                           <div id="chart3"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                 </div>
                 <div class="col">
                  <div class="card overflow-hidden rounded-4">
                      <div class="card-body p-2">
                       <div class="d-flex align-items-stretch justify-content-between rounded-4 overflow-hidden bg-primary">
                        <div class="w-50 p-3 bg-light-primary">
                          <p class="text-white">Customers</p>
                          <h4 class="text-white">25.8K</h4>
                        </div>
                        <div class="w-50 p-3">
                           <p class="mb-3 text-white text-end">+ 8.2% <i class="bi bi-arrow-up"></i></p>
                           <div id="chart4"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                 </div> -->
               <!-- </div>end row -->
  
              <!-- <div class="row row-cols-1 row-cols-lg-3">
                 <div class="col d-flex">
                  <div class="card radius-10 w-100 overflow-hidden">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <h6 class="mb-0">Sales</h6>
                        <div class="fs-5 ms-auto">
                          <div class="d-flex align-items-center justify-content-sm-end gap-3 cursor-pointer">
                            <div class="font-13"><i class="bi bi-circle-fill text-primary"></i><span class="ms-2">iPad</span></div>
                            <div class="font-13"><i class="bi bi-circle-fill text-primary-2"></i><span class="ms-2">Mob</span></div>
                            <div class="font-13"><i class="bi bi-circle-fill text-primary-3"></i><span class="ms-2">Lap</span></div>
                          </div>
                         </div>
                     </div>
                    </div>
                    <div id="chart5"></div>
                  </div>
                 </div>
                 <div class="col d-flex">
                  <div class="card rounded-4 overflow-hidden w-100">
                    <div class="card-body">
                     <div class="d-flex align-items-center">
                       <h6 class="mb-0">By Device</h6>
                       <div class="fs-5 ms-auto dropdown">
                          <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                      </div>
                      <div class="by-device-container p-3">
                       <canvas id="chart6"></canvas>
                     </div>
                    </div>
                    <ul class="list-group list-group-flush">
                     <li class="list-group-item d-flex align-items-center justify-content-between bg-transparent border-top">
                       <i class="bi bi-tablet-landscape-fill me-2 text-primary"></i> <span>Tablet - </span> <span>22.5%</span>
                     </li>
                     <li class="list-group-item d-flex align-items-center justify-content-between bg-transparent">
                       <i class="bi bi-phone-fill me-2 text-primary-2"></i> <span>Mobile - </span> <span>62.3%</span>
                     </li>
                     <li class="list-group-item d-flex align-items-center justify-content-between bg-transparent">
                       <i class="bi bi-display-fill me-2 text-primary-3"></i> <span>Desktop - </span> <span>15.2%</span>
                     </li>
                   </ul>
                  </div>
                </div>
                <div class="col d-flex">
                  <div class="card radius-10 w-100">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <h6 class="mb-0">Traffic</h6>
                        <div class="fs-5 ms-auto">
                          <div class="d-flex align-items-center justify-content-sm-end gap-3 cursor-pointer">
                            <div class="font-13"><i class="bi bi-circle-fill text-primary"></i><span class="ms-2">Referral</span></div>
                            <div class="font-13"><i class="bi bi-circle-fill text-primary-3"></i><span class="ms-2">Search</span></div>
                          </div>
                         </div>
                       </div>
                       <div id="chart7"></div>
                    </div>
                  </div>
                </div>
              </div>end row -->
  
              <!-- <div class="row">
                <div class="col-12 col-lg-6 d-flex">
                  <div class="card rounded-4 w-100">
                    <div class="card-header bg-transparent border-0">
                      <div class="row g-3 align-items-center">
                        <div class="col">
                          <h6 class="mb-0">Top Sold</h6>
                        </div>
                        <div class="col">
                          <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                            <div class="dropdown">
                              <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:;">Action</a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                </li>
                                <li>
                                  <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                       </div>
                    </div>
                    <div class="card-body p-0">
                       <div class="best-product p-2 mb-3">
                         <div class="best-product-item">
                           <div class="d-flex align-items-center gap-3">
                             <div class="product-box border">
                                <img src="assets/images/products/01.png" alt="">
                             </div>
                             <div class="product-info flex-grow-1">
                              <div class="progress-wrapper">
                                <div class="progress" style="height: 5px;">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;"></div>
                                </div>
                              </div>
                               <p class="product-name mb-0 mt-2 fs-6">White Polo T-Shirt <span class="float-end">245</span></p>
                             </div>
                           </div>
                         </div>
                         <div class="best-product-item">
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="assets/images/products/02.png" alt="">
                            </div>
                            <div class="product-info flex-grow-1">
                             <div class="progress-wrapper">
                               <div class="progress" style="height: 5px;">
                                 <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;"></div>
                               </div>
                             </div>
                              <p class="product-name mb-0 mt-2 fs-6">Black Coat Pant <span class="float-end">245</span></p>
                            </div>
                          </div>
                        </div>
                        <div class="best-product-item">
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="assets/images/products/03.png" alt="">
                            </div>
                            <div class="product-info flex-grow-1">
                             <div class="progress-wrapper">
                               <div class="progress" style="height: 5px;">
                                 <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;"></div>
                               </div>
                             </div>
                              <p class="product-name mb-0 mt-2 fs-6">Blue Shade Jeans <span class="float-end">245</span></p>
                            </div>
                          </div>
                        </div>
                        <div class="best-product-item">
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="assets/images/products/04.png" alt="">
                            </div>
                            <div class="product-info flex-grow-1">
                             <div class="progress-wrapper">
                               <div class="progress" style="height: 5px;">
                                 <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;"></div>
                               </div>
                             </div>
                              <p class="product-name mb-0 mt-2 fs-6">Yellow Winter Jacket <span class="float-end">245</span></p>
                            </div>
                          </div>
                        </div>
                        <div class="best-product-item">
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="assets/images/products/05.png" alt="">
                            </div>
                            <div class="product-info flex-grow-1">
                             <div class="progress-wrapper">
                               <div class="progress" style="height: 5px;">
                                 <div class="progress-bar bg-primary" role="progressbar" style="width: 40%;"></div>
                               </div>
                             </div>
                              <p class="product-name mb-0 mt-2 fs-6">Men Sports Shoes Nike <span class="float-end">245</span></p>
                            </div>
                          </div>
                        </div>
                        <div class="best-product-item">
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="assets/images/products/06.png" alt="">
                            </div>
                            <div class="product-info flex-grow-1">
                             <div class="progress-wrapper">
                               <div class="progress" style="height: 5px;">
                                 <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;"></div>
                               </div>
                             </div>
                              <p class="product-name mb-0 mt-2 fs-6">Fancy Home Sofa <span class="float-end">245</span></p>
                            </div>
                          </div>
                        </div>
                        <div class="best-product-item">
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="assets/images/products/07.png" alt="">
                            </div>
                            <div class="product-info flex-grow-1">
                             <div class="progress-wrapper">
                               <div class="progress" style="height: 5px;">
                                 <div class="progress-bar bg-primary" role="progressbar" style="width: 20%;"></div>
                               </div>
                             </div>
                              <p class="product-name mb-0 mt-2 fs-6">Sports Time Watch <span class="float-end">245</span></p>
                            </div>
                          </div>
                        </div>
                        <div class="best-product-item">
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="assets/images/products/08.png" alt="">
                            </div>
                            <div class="product-info flex-grow-1">
                             <div class="progress-wrapper">
                               <div class="progress" style="height: 5px;">
                                 <div class="progress-bar bg-primary" role="progressbar" style="width: 10%;"></div>
                               </div>
                             </div>
                              <p class="product-name mb-0 mt-2 fs-6">Women Blue Heals <span class="float-end">245</span></p>
                            </div>
                          </div>
                        </div>
                       </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-6 d-flex">
                  <div class="card rounded-4 w-100 overflow-hidden">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <h6 class="mb-0">Orders</h6>
                        <div class="fs-5 ms-auto dropdown">
                           <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                             <ul class="dropdown-menu">
                               <li><a class="dropdown-item" href="#">Action</a></li>
                               <li><a class="dropdown-item" href="#">Another action</a></li>
                               <li><hr class="dropdown-divider"></li>
                               <li><a class="dropdown-item" href="#">Something else here</a></li>
                             </ul>
                         </div>
                       </div>
                      <div id="chart8"></div>
                      <div class="d-flex align-items-center gap-5 justify-content-center mt-0 p-2 bg-light radius-10 border"> 
                        <div class="text-center">
                          <h2 class="mb-2 text-success">9.32m</h2>
                          <p class="mb-0">Total <br> Orders</p>
                        </div>
                        <div class="border-end sepration"></div>
                        <div class="text-center">
                         <h2 class="mb-2">2.56</h2>
                         <p class="mb-0">AVG per <br> Customer</p>
                       </div>
                     </div>
                    </div>
                  </div>
                </div>
              </div>end row -->
  
  
              <!-- <div class="row">
                <div class="col-12 col-lg-12 col-xl-4 d-flex">
                  <div class="card w-100 radius-10">
                    <div class="card-body">
                      <div class="card radius-10 border shadow-none">
                        <div class="card-body pb-0">
                          <div class="d-flex align-items-center">
                            <div class="">
                              <h6 class="mb-0">Montly Sales</h6>
                            </div>
                            <div class="fs-5 ms-auto dropdown">
                              <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                          </div>
                          <div class="mt-0">
                            <div class="widget-icon mx-auto mb-2 bg-light-primary text-primary">
                              <i class="bi bi-bank2"></i>
                            </div>
                            <h4 class="mb-0 text-center">$45,865</h4>
                          </div>
                          <div id="chart9"></div>
                         </div>
                      </div>
                      <div class="card radius-10 border shadow-none">
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <div class="">
                              <h6 class="mb-0">Total Clicks</h6>
                            </div>
                            <div class="fs-5 ms-auto dropdown">
                              <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                          </div>
                          <div id="chart10"></div>
                        </div>
                      </div>
                      <div class="card radius-10 border shadow-none mb-0">
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <div class="">
                              <h6 class="mb-0">Sessions</h6>
                            </div>
                            <div class="fs-5 ms-auto dropdown">
                              <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                          </div>
                          <div id="chart11"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-12 col-xl-8 d-flex">
                  <div class="w-100">
                     <div class="row">
                       <div class="col-12 col-lg-12 col-xl-12">
                        <div class="card radius-10">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                              <h6 class="mb-0">Visitors</h6>
                              <div class="fs-5 ms-auto dropdown">
                                 <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                   <ul class="dropdown-menu">
                                     <li><a class="dropdown-item" href="#">Action</a></li>
                                     <li><a class="dropdown-item" href="#">Another action</a></li>
                                     <li><hr class="dropdown-divider"></li>
                                     <li><a class="dropdown-item" href="#">Something else here</a></li>
                                   </ul>
                               </div>
                             </div>
                             <div class="d-sm-flex align-items-center gap-3 mt-3">
                               <div class="mb-2 mb-sm-0">
                                <h4 class="mb-0">254,852</h4>
                                 <p class="mb-0">New / Returning</p>
                               </div>
                               <div class="d-none d-sm-block border-end sepration-2"></div>
                               <div class="align-self-end mb-2 mb-sm-0">
                                <p class="mb-0">45,762 / 2,491</p>
                              </div>
                              <div class="align-self-end ms-auto">
                                <div class="d-flex align-items-center gap-3">
                                  <p class="mb-0 font-13">
                                    <i class="bi bi-square-fill ms-1 text-primary"></i> New Visitors
                                  </p>
                                  <p class="mb-0 font-13">
                                    <i class="bi bi-square-fill ms-1 text-primary-3"></i> Returning Visitors
                                  </p>
                                </div>
                              </div>
                             </div>
                            <div id="chart12"></div>
                          </div>
                        </div>
                       </div>
                       <div class="col-12 col-lg-4 col-xl-4">
                        <div class="card radius-10">
                          <div class="card-body">
                             <div id="chart13"></div>
                          </div>
                        </div>
                       </div>
                       <div class="col-12 col-lg-4 col-xl-4">
                        <div class="card radius-10">
                          <div class="card-body">
                             <div id="chart14"></div>
                          </div>
                        </div>
                       </div>
                       <div class="col-12 col-lg-4 col-xl-4">
                        <div class="card radius-10">
                          <div class="card-body">
                             <div id="chart15"></div>
                          </div>
                        </div>
                       </div>
                     </div>end row-->
                    <!-- </div>
                </div>
              </div>end row --> 
  
  
              <!-- <div class="card radius-10 w-100 mb-0">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <h6 class="mb-0">Recent Orders</h6>
                    <div class="fs-5 ms-auto dropdown">
                       <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                         <ul class="dropdown-menu">
                           <li><a class="dropdown-item" href="#">Action</a></li>
                           <li><a class="dropdown-item" href="#">Another action</a></li>
                           <li><hr class="dropdown-divider"></li>
                           <li><a class="dropdown-item" href="#">Something else here</a></li>
                         </ul>
                     </div>
                   </div>
                   <div class="table-responsive mt-2">
                    <table class="table align-middle mb-0">
                      <thead class="table-light">
                        <tr>
                          <th>#ID</th>
                          <th>Product</th>
                          <th>Quantity</th>
                          <th>Price</th>
                          <th>Date</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#89742</td>
                          <td>
                            <div class="d-flex align-items-center gap-3">
                              <div class="product-box border">
                                 <img src="assets/images/products/11.png" alt="">
                              </div>
                              <div class="product-info">
                                <h6 class="product-name mb-1">Smart Mobile Phone</h6>
                              </div>
                            </div>
                          </td>
                          <td>2</td>
                          <td>$214</td>
                          <td>Apr 8, 2021</td>
                          <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                              <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                              <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                              <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>#68570</td>
                          <td>
                            <div class="d-flex align-items-center gap-3">
                              <div class="product-box border">
                                 <img src="assets/images/products/07.png" alt="">
                              </div>
                              <div class="product-info">
                                <h6 class="product-name mb-1">Sports Time Watch</h6>
                              </div>
                            </div>
                          </td>
                          <td>1</td>
                          <td>$185</td>
                          <td>Apr 9, 2021</td>
                          <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                              <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                              <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                              <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>#38567</td>
                          <td>
                            <div class="d-flex align-items-center gap-3">
                              <div class="product-box border">
                                 <img src="assets/images/products/17.png" alt="">
                              </div>
                              <div class="product-info">
                                <h6 class="product-name mb-1">Women Red Heals</h6>
                              </div>
                            </div>
                          </td>
                          <td>3</td>
                          <td>$356</td>
                          <td>Apr 10, 2021</td>
                          <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                              <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                              <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                              <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>#48572</td>
                          <td>
                            <div class="d-flex align-items-center gap-3">
                              <div class="product-box border">
                                 <img src="assets/images/products/04.png" alt="">
                              </div>
                              <div class="product-info">
                                <h6 class="product-name mb-1">Yellow Winter Jacket</h6>
                              </div>
                            </div>
                          </td>
                          <td>1</td>
                          <td>$149</td>
                          <td>Apr 11, 2021</td>
                          <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                              <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                              <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                              <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>#96857</td>
                          <td>
                            <div class="d-flex align-items-center gap-3">
                              <div class="product-box border">
                                 <img src="assets/images/products/10.png" alt="">
                              </div>
                              <div class="product-info">
                                <h6 class="product-name mb-1">Orange Micro Headphone</h6>
                              </div>
                            </div>
                          </td>
                          <td>2</td>
                          <td>$199</td>
                          <td>Apr 15, 2021</td>
                          <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                              <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                              <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                              <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>#96857</td>
                          <td>
                            <div class="d-flex align-items-center gap-3">
                              <div class="product-box border">
                                 <img src="assets/images/products/12.png" alt="">
                              </div>
                              <div class="product-info">
                                <h6 class="product-name mb-1">Pro Samsung Laptop</h6>
                              </div>
                            </div>
                          </td>
                          <td>1</td>
                          <td>$699</td>
                          <td>Apr 18, 2021</td>
                          <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                              <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                              <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                              <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div> -->
  
  
            
         <!--end page main-->
         <!--start overlay-->
        <!-- <div class="overlay nav-toggle-icon"></div> -->
       <!--end overlay-->

       <!--start footer-->
       <!-- <footer class="footer">
        <div class="footer-text">
           Copyright © 2022. All right reserved.
        </div>
        </footer> -->
        <!--end footer-->


       <!--Start Back To Top Button-->
		     <!-- <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a> -->
       <!--End Back To Top Button-->

       <!--start switcher-->
       <!-- <div class="switcher-body">
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
            <hr/>
            <h6 class="mb-0">Header Colors</h6>
            <hr/>
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
              </div>
            </div>
          </div>
        </div>
       </div> -->
       <!--end switcher-->