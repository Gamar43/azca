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
              <li class="nav-item"><a class="nav-link" aria-current="page" href="blogs.php" style="color:black; font-weight: bold;">News</a></li>
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
            <p class="text-dark text-center fs-1">Blog</p>
            <h1 class="text-center fs-lg-7 fs-md-4 fs-3 text-dark mb-5">The Event Of The Week</h1>
            <div class="row align-items-center gx-xl-7">
              <div class="col-lg-6 text-center"><a href="#"><img class="img-fluid" src="assets/img/blog/blog-hero.png" alt="" /></a></div>
              <div class="col-lg-6 mt-5 mt-lg-0 text-center text-lg-start">
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-3"><a href="#">
                    <p class="fw-bold mb-0 text-black">  اعرف مجالك 1  </p>
                  </a>
                  <p class="mb-0" style="color: white;">November 22, 2021</p>
                </div><a href="#">
                  <h1 class="fs-xl-6 fs-md-4 fs-3 my-3"> الورشة الاولى من سلسلة اعرف مجالك  </h1>
                </a>
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-2"><img class="img-fluid" src="assets/img/blog/profile1.png" alt="" /><a href="#">
                    <p class="mb-0" style="color:white;">AZCA</p>
                  </a></div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
<section>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start"><img class="img-fluid" src="assets/img/offer/1.png" alt="" /></div>
            <div class="col-lg-6">
              <h1 class="fs-xl-5 fs-lg-4 fs-3">الورشة الاولى من سلسلة اعرف مجالك </h1>
              <ul class="list-unstyled my-xl-5 my-3">
                <li class="fs-2 my-4 d-flex align-items-center gap-3 text-black"><i class="fa-solid fa-circle-check fs-4 text-dark"></i><span>الفروقات الجوهرية بين مجالات  الحاسوب</span></li>
                <li class="fs-2 my-4 d-flex align-items-center gap-3 text-black"><i class="fa-solid fa-circle-check fs-4 text-dark"></i><span>مجال التطوير قسم الواجهات الامامية</span></li>
                <li class="fs-2 my-4 d-flex align-items-center gap-3 text-black"><i class="fa-solid fa-circle-check fs-4 text-dark"></i><span>مجال التطوير قسم التطوير الخلفي</span></li>
              </ul>
            </div>
          </div>
        </div><!-- end of .container-->
      </section>
    <!-- ============================================-->
    <div class="px-xl-8 px-md-5 px-3 py-8">
            <p class="fs-1">Preview</p>
            <h1 class="fs-lg-6 fs-md-4 fs-3 my-4">السلسلة  الاولى من نوعها في التعريف بمجالات البرمجة والحاسوب</h1>
            <p class="fs-1">جلبنا بعضا من افضل طلبة الكلية  ليوضحو لكم معنى ان تكون مبرمجا,ولانهم من بينكم فسيكون استقبال المعلومات منهم اسهل ,احرصو على حضور هذه الورشة التي ستحتوس على العديد من المفاهيم المهمة في مجال النطوير ومجالات الحاسوب عمومما.</p>
          </div>
        </div>


    <!-- ============================================-->

    <section>
        <div class="container">
          <div class="px-xl-8 px-md-5 px-3">
            <h1 class="text-black fs-lg-6 fs-md-4 fs-3 my-4">Team :</h1>
            <!-- <p class="text-gray fs-1 w-lg-75">We have the very best leadership team that we count on,Passionate and dedicated in their work,feel free to contact them for anything you need.</p> -->
          </div>
          <div class="row mt-7">
            <div class="col-md-4 col-sm-6 mb-5 mb-lg-0 text-center text-sm-left"><a href="#"><img class="img-fluid" src="assets/img/team/1.png" alt="" /></a>
              <h1 class="fs-3 mt-3">Mozamil ALfatih</h1>
              <p class="fs-1">Backend Developer</p>
            </div>
            <div class="col-md-4 col-sm-6 mb-5 mb-lg-0 text-center text-sm-left"><a href="#"><img class="img-fluid" src="assets/img/team/2.png" alt="" /></a>
              <h1 class="fs-3 mt-3">Mohammed Gamar</h1>
              <p class="fs-1">Frontend Developer</p>
            </div>
            <!-- <div class="col-md-4 col-sm-6 mb-5 mb-lg-0 text-center text-sm-left"><a href="#"><img class="img-fluid" src="assets/img/team/3.png" alt="" /></a>
              <h1 class="fs-3 mt-3">Hamad El-Neil</h1>
              <p class="fs-1">Media director</p>
            </div>
            <div class="col-md-4 col-sm-6 mb-5 mb-lg-0 text-center text-sm-left"><a href="#"><img class="img-fluid" src="assets/img/team/3.png" alt="" /></a>
              <h1 class="fs-3 mt-3">ELaf Khalid</h1>
              <p class="fs-1">Financial Secretary</p>
            </div>
            <div class="col-md-4 col-sm-6 mb-5 mb-lg-0 text-center text-sm-left"><a href="#"><img class="img-fluid" src="assets/img/team/3.png" alt="" /></a>
              <h1 class="fs-3 mt-3">Abd El-Hafeiz</h1>
              <p class="fs-1">public relations manager</p>
            </div> -->
          </div>
        </div><!-- end of .container-->
      </section>

    <!-- <section> begin ============================-->
    <section class="pt-0">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-6 col-sm-12"><a href="index.php"><img class="img-fluid mt-5 mb-4" src="assets/img/black-logo.png" alt="" /></a>
            <p class="w-lg-75 text-gray">Social media validation business model canvas graphical user interface launch party creative facebook iPad twitter.</p>
          </div>
          <div class="col-lg-2 col-sm-4">
            <h3 class="fw-bold fs-1 mt-5 mb-4">Landings</h3>
            <ul class="list-unstyled">
              <li class="my-3 col-md-4"><a href="#">Home</a></li>
              <li class="my-3"><a href="#">Products</a></li>
              <li class="my-3"><a href="#">Services</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-4">
            <h3 class="fw-bold fs-1 mt-5 mb-4">Company</h3>
            <ul class="list-unstyled">
              <li class="my-3"><a href="#">Home</a></li>
              <li class="my-3"><a href="#">Careers</a><span class="py-1 px-2 rounded-2 bg-success fw-bold text-dark ms-2">Hiring!</span></li>
              <li class="my-3"><a href="#">Services</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-4">
            <h3 class="fw-bold fs-1 mt-5 mb-4">Resources</h3>
            <ul class="list-unstyled">
              <li class="mb-3"><a href="#">Home</a></li>
              <li class="mb-3"><a href="#">Products</a></li>
              <li class="mb-3"><a href="#">Services</a></li>
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