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
    <title>About | Boldo Agency Template</title>

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
      <section class=" text-center py-9" style="  background: linear-gradient(to left, rgb(0, 255, 223), rgb(83, 0, 255));
" >
        <div class="container">
          <p class="text-light fs-1">About</p>
          <div class="col-12 col-md-7 mx-auto">
            <h1 class="text-white fs-lg-7 fs-md-4 fs-3 my-4">We love to make great things, things that matter.</h1>
          </div>
          <p class="w-md-50 text-light mx-auto">We seek to create a society full of awareness and development, we seek to create a better society.</p>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-0">
        <div class="container">
          <div class="gallery-wraper">
            <div class="img-wraper"><img class="img-fluid" src="assets/img/gallery/p1.jpg" alt="" /></div>
            <div class="img-wraper"><img class="img-fluid" src="assets/img/gallery/pp1.jpg" alt="" /></div>
            <div class="img-wraper"><img class="img-fluid" src="assets/img/gallery/p2.jpg" alt="" /></div>
            <div class="img-wraper"><img class="img-fluid" src="assets/img/gallery/p3.jpg" alt="" /></div>
            <div class="img-wraper"><img class="img-fluid" src="assets/img/gallery/p4.jpg" alt="" /></div>
          </div>
          <div class="px-xl-8 px-md-5 px-3 py-8">
            <p class="fs-1">Our Story</p>
            <h1 class="fs-lg-6 fs-md-4 fs-3 my-4">We started as a bunch of students with a dream,Now we are a whole comunity with Attainable goals.</h1>
            <p class="fs-1">The most common things between us are respect,humanity and the love of helping.In a time that most people only cares about their goals ,we are trying to make the world a better place,The love for the goodness is what gatherd us and made us who we are .The thought of making a diffrence in someone's life is what keeping us motivated and trying to do our best in all times no matter what,we have a goal of making a comunity that belive in goodness ,And we will not calm before we achive our goal.</p>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="" style="  background: linear-gradient(to left, rgb(0, 255, 223), rgb(83, 0, 255));
" >
        <div class="container">
          <p class="text-center text-light">Our numbers</p>
          <h1 class="text-center text-white w-lg-75 mx-auto fs-xl-6 fs-lg-4 fs-3">Step by Step,we will make GLory.</h1>
          <div class="row mt-5">
            <div class="col-md-4 col-sm-6 text-center">
              <h1 class="text-success fs-5 fs-md-6 fs-lg-7 fs-xl-9">+300Gb</h1>
              <p class="text-light fs-2">Tutorials</p>
            </div>
            <div class="col-md-4 col-sm-6 text-center">
              <h1 class="text-success fs-5 fs-md-6 fs-lg-7 fs-xl-9">+100</h1>
              <p class="text-light fs-2">Working Members</p>
            </div>
            <div class="col-md-4 col-sm-6 text-center">
              <h1 class="text-success fs-5 fs-md-6 fs-lg-7 fs-xl-9">+10</h1>
              <p class="text-light fs-2">Events per an year</p>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>
        <div class="container">
          <div class="px-xl-8 px-md-5 px-3">
            <p class="text-gray fs-1">Our team</p>
            <h1 class="text-black fs-lg-6 fs-md-4 fs-3 my-4">The leadership team</h1>
            <p class="text-gray fs-1 w-lg-75">We have the very best leadership team that we count on,Passionate and dedicated in their work,feel free to contact them for anything you need.</p>
          </div>
          <div class="row mt-7">
            <div class="col-md-4 col-sm-6 mb-5 mb-lg-0 text-center text-sm-left"><a href="#"><img class="img-fluid" src="assets/img/team/hanz.jpg" alt="" style="width:299px; height: 354px; border-radius: 20px;" /></a>
              <h1 class="fs-3 mt-3">Abd Al-rahman</h1>
              <p class="fs-1">
                الامين العام
              </p>
            </div>
            <div class="col-md-4 col-sm-6 mb-5 mb-lg-0 text-center text-sm-left"><a href="#"><img class="img-fluid" src="assets/img/team/mg.jpg" alt="" style="width:299px; height: 354px; border-radius: 20px;"/></a>
              <h1 class="fs-3 mt-3">Mohammed Gamar</h1>
              <p class="fs-1">
                رئيس الدورة
              </p>
            </div>
            <div class="col-md-4 col-sm-6 mb-5 mb-lg-0 text-center text-sm-left"><a href="#"><img class="img-fluid" src="assets/img/team/money.jpg" alt="" style="width:299px; height: 354px; border-radius: 20px;" /></a>
              <h1 class="fs-3 mt-3">Mubarak Al-taher</h1>
              <p class="fs-1">
                الامين المالي
              </p>
            </div>
            <div class="col-md-4 col-sm-6 mb-5 mb-lg-0 text-center text-sm-left"><a href="#"><img class="img-fluid" src="assets/img/team/p3.jpg" alt="" style="width:299px; height: 354px; border-radius: 20px;" /></a>
              <h1 class="fs-3 mt-3">ELaf Khalid</h1>
              <p class="fs-1">
                الامينة الاجتماعية
              </p>
            </div>
            <div class="col-md-4 col-sm-6 mb-5 mb-lg-0 text-center text-sm-left"><a href="#"><img class="img-fluid" src="assets/img/team/3.png" alt="" style="width:299px; height: 354px; border-radius: 20px;" /></a>
              <h1 class="fs-3 mt-3">Mohammed Al-neil</h1>
              <p class="fs-1">
                الامين الاعلامي
              </p>
            </div>
             <div class="col-md-4 col-sm-6 mb-5 mb-lg-0 text-center text-sm-left"><a href="#"><img class="img-fluid" src="assets/img/team/Adam.jpg" alt="" style="width:299px; height: 354px; border-radius: 20px;" /></a>
              <h1 class="fs-3 mt-3">Adam Faisal</h1>
              <p class="fs-1">
                الامين الاكاديمي
              </p>
            </div>
            <div class="col-md-4 col-sm-6 mb-5 mb-lg-0 text-center text-sm-left"><a href="#"><img class="img-fluid" src="assets/img/team/3.png" alt="" style="width:299px; height: 354px; border-radius: 20px;" /></a>
              <h1 class="fs-3 mt-3">Mohammed Musa</h1>
              <p class="fs-1">
                الامين الثقافي
              </p>
            </div>
            <div class="col-md-4 col-sm-6 mb-5 mb-lg-0 text-center text-sm-left"><a href="#"><img class="img-fluid" src="assets/img/team/3.png" alt="" style="width:299px; height: 354px; border-radius: 20px;" /></a>
              <h1 class="fs-3 mt-3">Muzan Yousif</h1>
              <p class="fs-1">
                امينة العلاقات الخارجية
              </p>
            </div>
            <div class="col-md-4 col-sm-6 mb-5 mb-lg-0 text-center text-sm-left"><a href="#"><img class="img-fluid" src="assets/img/team/3.png" alt="" style="width:299px; height: 354px; border-radius: 20px;" /></a>
              <h1 class="fs-3 mt-3">Mubarak Mahmoud</h1>
              <p class="fs-1">
              الامين الرياضي
              </p>
            </div>
            <div class="col-md-4 col-sm-6 mb-5 mb-lg-0 text-center text-sm-left"><a href="#"><img class="img-fluid" src="assets/img/team/3.png" alt="" style="width:299px; height: 354px; border-radius: 20px;" /></a>
              <h1 class="fs-3 mt-3">Ahmed Abd Al-lateif</h1>
              <p class="fs-1">
               الامين المقرر
              </p>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="" style="  background: linear-gradient(to left, rgb(0, 255, 223), rgb(83, 0, 255));
" >
        <div class="container">
          <div class="px-xl-8 px-md-5 px-3">
            <p class="text-light fs-1">Our values</p>
            <h1 class="text-white fs-lg-6 fs-md-4 fs-3 my-lg-4 my-3">Things in we believe</h1>
            <p class="text-light w-lg-75 fs-1">We work in a very serious manners and we care for every little detail.</p>
            <div class="row mt-5">
              <div class="col-md-3"><img class="img-fluid" src="assets/img/values/1.png" alt="" /></div>
              <div class="col-md-9 mt-2 mb-md-0">
                <h1 class="text-white fs-2 fs-lg-3 my-2">We are commited.</h1>
                <p class="text-light fs-1">Nothing goes well without commitment,and we are all committed to what we do.</p>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-md-3"><img class="img-fluid" src="assets/img/values/2.png" alt="" /></div>
              <div class="col-md-9 mt-2 mb-md-0">
                <h1 class="text-white fs-2 fs-lg-3 my-2">We are responsible.</h1>
                <p class="text-light fs-1">We take our work seriously, we belive that everyone is responsible for his actions.</p>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-md-3"><img class="img-fluid" src="assets/img/values/3.png" alt="" /></div>
              <div class="col-md-9 mt-2 mb-md-0">
                <h1 class="text-white fs-2 fs-lg-3 my-2">We aim for progress.</h1>
                <p class="text-light fs-1">We started with very small things and we have been progressing ever since.</p>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

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