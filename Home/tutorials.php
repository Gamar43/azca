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
    <title>Technical Society</title>

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
              <li class="nav-item"><a class="nav-link" aria-current="page" href="blogs.php" style="color:black; font-weight: bold;">News</a></li>
              <li class="nav-item mt-2 mt-lg-0"><a class="nav-link btn btn-light text-black w-md-25 w-50 w-lg-100" aria-current="page" href="../auth/login.php">Logout</a></li>
              <li class="nav-item mt-2 mt-lg-0">
                
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- bg-dark background -->
      <div style="  background: linear-gradient(to left, rgb(0, 255, 223), rgb(83, 0, 255));
"><img class="img-fluid position-absolute end-0" src="assets/img/hero/hero-bg.png" alt="" />

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section>
          <div class="container">
            <div class="row align-items-center py-lg-8 py-6">
              <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white fs-5 fs-xl-6" style="text-align:right;">   دوراتك علينا  </h1>
                <p class="text-white py-lg-3 py-2" style="text-align:right;">
                  اختار من بين عشرات الدورات في تخصصك ,احجز موعدك واستلم الدورات في الجامعة ,جيب فلاشك وخلي الباقي علينا
                </p>
                <div class="d-sm-flex align-items-center gap-3">
                  
                  <a href="book.php" class="btn btn-outline-light mb-3 w-75" >  احجز موعد  </a>
                  </div>
                
              </div>
              <div class="col-lg-6 text-center text-lg-end mt-3 mt-lg-0"><img class="img-fluid" src="assets/img/hero/hero-graphics.png" alt="" /></div>
            </div>
            
            </div>
          </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->

      </div>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start"><img class="img-fluid" src="assets/img/offer/1.png" alt="" /></div>
            <div class="col-lg-6">
              <h1 class="fs-xl-5 fs-lg-4 fs-3" style="text-align: right;">  تنتظر ليه وانت ممكن تتعلم تخصصك وتشتغل ؟احجز موعدك واحنا حنجيب ليك الدورات المحتاجها لي مكانك  </h1>
              <ul class="list-unstyled my-xl-5 my-3">
                <li class="fs-2 my-4 d-flex align-items-center gap-3 text-black"><i class="fa-solid fa-circle-check fs-4 text-dark"></i><span>  دورات عديدة في كل المجالات  </span></li>
                <li class="fs-2 my-4 d-flex align-items-center gap-3 text-black"><i class="fa-solid fa-circle-check fs-4 text-dark"></i><span>  الدورات حتصلك في اقرب وقت من طلبك ليها  </span></li>
                <li class="fs-2 my-4 d-flex align-items-center gap-3 text-black"><i class="fa-solid fa-circle-check fs-4 text-dark"></i><span>   ما تنسى , سنعبر وسننتصر  </span></li>
                  <div class="d-sm-flex align-items-center gap-3">
                  <a href="book.php" class="btn btn-outline-dark mb-3 w-75" >  احجز موعد  </a>
                  </div>
                


                
              </ul>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-8 pt-lg-0">
        <div class="container">
          <div class="d-flex flex-column-reverse flex-lg-row">
            <div class="col-lg-6">
              <h1 class="fs-lg-4 fs-md-3 fs-xl-5 mb-5">
              Our first priority is making the best Technical students</h1>
              <ul class="list-unstyled">
                <li class="fs-2 shadow-sm offer-list-item"><i class="fa-solid fa-leaf fs-lg-4 fs-3"></i><span>We will teach you how to choose the right enviroment for you.</span></li>
                <li class="fs-2 shadow-sm offer-list-item"><i class="fa-solid fa-eye fs-lg-4 fs-3"></i><span>We give You a better vision of your futur.</span></li>
                <li class="fs-2 shadow-sm offer-list-item"><i class="fa-solid fa-sun fs-lg-4 fs-3"></i><span>We keep you motivated</span></li>
              </ul>
            </div>
            <div class="col-lg-6 text-center text-lg-end"><img class="img-fluid" src="assets/img/offer/2.png" alt="" /></div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



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