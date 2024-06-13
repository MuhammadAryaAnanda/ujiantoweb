<?php
$this->title = 'Login';
?>
<body class="bg-surface">

<!--start wrapper-->
<div class="wrapper">

     <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded-0 border-bottom">
          <div class="container">
            <a class="navbar-brand" href="#"><img src="/onedash/assets/images/brand-logo-2.png" width="140" alt=""/></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
                <li class="nav-item">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="javascript:;">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                     Services <i class="bi bi-chevron-down align-middle ms-2"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="javascript:;">Contact Us</a>
                </li>
              </ul>

              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                    English
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="javascript:;">Support</a>
                </li>
              </ul>
              <div class="d-flex ms-3 gap-3">
                <a href="authentication-signin-with-header-footer.html" class="btn btn-primary btn-sm px-4 radius-30">Login</a>
                <a href="authentication-signup-with-header-footer.html" class="btn btn-white btn-sm px-4 radius-30">Register</a>
              </div>
            </div>
          </div>
        </nav>
     </header>
  
     <!--start content-->
     <main class="authentication-content">
      <div class="container">
        <div class="mt-4">
          <div class="card rounded-0 overflow-hidden shadow-none border mb-5 mb-lg-0">
            <div class="row g-0">
              <div class="col-12 order-1 col-xl-8 d-flex align-items-center justify-content-center border-end">
                <img src="/onedash/assets/images/error/auth-img-7.png" class="img-fluid" alt="">
              </div>
              <div class="col-12 col-xl-4 order-xl-2">
                <div class="card-body p-4 p-sm-5">
                  <h5 class="card-title">Sign In</h5>
                  <p class="card-text mb-4">See your growth and get consulting support!</p>
                   <form class="form-body">
                    
                      <div class="row g-3">
                        <div class="col-12">
                          <label for="inputEmailAddress" class="form-label">Email Address</label>
                          <div class="ms-auto position-relative">
                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                            <input type="email" class="form-control radius-30 ps-5" id="inputEmailAddress" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-12">
                          <label for="inputChoosePassword" class="form-label">Enter Password</label>
                          <div class="ms-auto position-relative">
                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                            <input type="password" class="form-control radius-30 ps-5" id="inputChoosePassword" placeholder="Password">
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                          </div>
                        </div>
                        <div class="col-6 text-end">	<a href="forgot">Forgot Password ?</a>
                        </div>
                        <div class="col-12">
                          <div class="d-grid">
                            <button type="submit" class="btn btn-primary radius-30">Sign In</button>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="login-separater text-center"> <span>OR SIGN IN WITH EMAIL</span>
                            <hr>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="d-flex align-items-center gap-3 justify-content-center">
                            <button type="button" class="btn btn-white text-danger"><i class="bi bi-google me-0"></i></button>
                            <button type="button" class="btn btn-white text-primary"><i class="bi bi-linkedin me-0"></i></button>
                            <button type="button" class="btn btn-white text-info"><i class="bi bi-facebook me-0"></i></button>
                          </div>
                        </div>
                        <div class="col-12 text-center">
                          <p class="mb-0">Don't have an account yet? <a href="site/register">Sign up here</a></p>
                        </div>
                      </div>
                  </form>
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </main>
      
     <!--end page main-->

     <footer class="bg-white border-top p-3 text-center fixed-bottom">
      <p class="mb-0">Copyright © 2021. All right reserved.</p>
    </footer>
  
</div>
<!--end wrapper-->


<!-- Bootstrap bundle JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!--plugins-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/pace.min.js"></script>


</body>