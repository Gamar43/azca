<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Latest News</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="vendors/prism/prism.css" rel="stylesheet">
    <link href="vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/theme.min.css" rel="stylesheet" />
    <link href="assets/css/user.min.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg fixed-top " style="  background: linear-gradient(to left, rgb(0, 255, 223), rgb(83, 0, 255));
" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container">
         <!--  here is the logo -->
         <a href="profile.php">
         <div class=" rounded-3 ">
                    <img src="assets/img/review/3.png" alt="" />
                </div>
          </a>
          <!--  here is the logo -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars text-white fs-3"></i></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php" style="color:black; font-weight: bold;">Home</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="about.php" style="color:black; font-weight: bold;">About</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="blogs.php" style="color:black; font-weight: bold;">News </a></li>
              <li class="nav-item mt-2 mt-lg-0"><a class="nav-link btn btn-light text-black w-md-25 w-50 w-lg-100" aria-current="page" href="../auth/login.php">Logout</a></li>
              <li class="nav-item mt-2 mt-lg-0">
                
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section style="  background: linear-gradient(to left, rgb(0, 255, 223), rgb(83, 0, 255));
">
        <div class="container">
          <div class="border-bottom border-dark py-7">
            <p class="text-dark text-center fs-1">  احضر ورشة  </p>
            <h1 class="text-center fs-lg-7 fs-md-4 fs-3 text-dark mb-5"> ورشة الاسبوع  </h1>
            <div class="row align-items-center gx-xl-7">
              <div class="col-lg-6 text-center"><a href="#"><img class="img-fluid" src="assets/img/blog/blog-hero.png" alt="" /></a></div>
              <div class="col-lg-6 mt-5 mt-lg-0 text-center text-lg-start">
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-3">
                    <p class="fw-bold mb-0 text-black">  اعرف مجالك 1  </p>
                  <p class="mb-0" style="color: white;">November 22, 2021</p>
                </div><a href="#">
                  <h1 class="fs-xl-6 fs-md-4 fs-3 my-3"> الورشة الاولى من سلسلة اعرف مجالك  </h1>
                </a>
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-2"><img class="img-fluid" src="assets/img/blog/profile1.png" alt="" />
                    <p class="mb-0" style="color:white;">Technical Society</p>
                  </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0">
        <div class="container">
          <h1 class="fs-lg-6 fs-md-5 fs-3" style="text-align:right;">  :الورشات القادمة  </h1>
          <div class="row mt-5 gx-xl-7">
            <div class="col-lg-4 col-md-6 mb-5 mb-md-0 text-center text-md-start h-auto">
              <div class="d-flex justify-content-between flex-column h-100"><a href="#"><img class="w-md-100 w-75 rounded-2" src="assets/img/blog/1.png" alt="" /></a>
                <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-2 mt-3"><a href="#">
                    <p class="fw-bold mb-0 text-black">  اعرف مجالك  1</p>
                  </a>
                  <p class="mb-0">November 22, 2021</p>
                </div><a href="#">
                  <h5 class="mt-1 mb-3 fs-0 fs-md-1">سلسلة من الورش التعريفية بمجالات البرمجة والحاسوب</h5>
                </a>
                <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-3 mb-md-5"><img class="img-fluid" src="assets/img/blog/profile1.png" alt="" /><a href="#">
                    <p class="mb-0 text-gray">  مقدمة في  جامعة الرعيم الازهري  </p>
                  </a></div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

      <section class="py-0">
        <div class="container">
          <h1 class="fs-lg-6 fs-md-5 fs-3" style="text-align:right;">:الورشات السابقة</h1>
          <div class="row mt-5 gx-xl-7">
            <div class="col-lg-4 col-md-6 mb-5 mb-md-0 text-center text-md-start h-auto">
              <div class="d-flex justify-content-between flex-column h-100"><a href="#"><img class="w-md-100 w-75 rounded-2" src="assets/img/blog/1.png" alt="" /></a>
                <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-2 mt-3"><a href="#">
                    <p class="fw-bold mb-0 text-black">  اعرف مجالك  1</p>
                  </a>
                  <p class="mb-0">November 22, 2021</p>
                </div><a href="#">
                  <h5 class="mt-1 mb-3 fs-0 fs-md-1">سلسلة من الورش التعريفية بمجالات البرمجة والحاسوب</h5>
                </a>
                <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-3 mb-md-5"><img class="img-fluid" src="assets/img/blog/profile1.png" alt="" /><a href="#">
                    <p class="mb-0 text-gray">  مقدمة في  جامعة الرعيم الازهري  </p>
                  </a></div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section>


    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <!--/.bg-holder-->
    <!-- <section>
      <div class="container  overflow-hidden rounded-1" style="  background: linear-gradient(to left, rgb(0, 255, 223), rgb(83, 0, 255));
" >
        <div class="bg-holder" style="background-image:url(assets/img/promo/promo-bg.png);"></div>
        
        <div class="px-5 py-7 position-relative">
          <h1 class="text-center w-lg-75 mx-auto fs-lg-6 fs-md-4 fs-3 text-white">An enterprise template to ramp up your company website</h1>
          <div class="row justify-content-center mt-5">
            <div class="col-auto w-100 w-lg-50"><input class="form-control mb-2 border-light fs-1" type="email" placeholder="Your email address" /></div>
            <div class="col-auto mt-2 mt-lg-0"><button class="btn btn-success text-dark fs-1">Start now</button></div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- end of .container-->
    <!-- <section> close ============================-->
    <!-- ============================================-->



    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-0 mt-7">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-6 col-sm-12">
            <h1 style="font-weight:bold;">AZCA</h1>
              <p class="w-lg-75 text-gray">
            First home for all computer students in AAU university.
              </p>
          </div>
          <div class="col-lg-2 col-sm-4">
            <h3 class="fw-bold fs-1 mt-5 mb-4">Shortcuts</h3>
            <ul class="list-unstyled">
              <li class="my-3 col-md-4"><a href="#">Home</a></li>
              <li class="my-3"><a href="#">About us</a></li>
              <li class="my-3"><a href="#">News</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-4">
            <h3 class="fw-bold fs-1 mt-5 mb-4">Membership</h3>
            <ul class="list-unstyled">
              <li class="my-3"><a href="#">join us</a><span class="py-1 px-2 rounded-2 bg-success fw-bold text-dark ms-2">Hiring!</span></li>
            </ul>
          </div>
        </div>
        <p class="text-gray">All rights reserved.</p>
      </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/prism/prism.js"></script>
    <script src="vendors/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/theme.js"></script>
  </body>

</html>


<?php 
}else{
     header("Location: ../auth/login.php");
     exit();
}
 ?>