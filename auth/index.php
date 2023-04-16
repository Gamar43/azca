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
    <title>AZCA</title>

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
   
<?php
print_r($_SESSION);
?>

  </body>

</html>


<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>



































 <!-- ============================================-->
    <!-- <section> begin ============================-->
    <!---->
    <!-- <section>
      <div class="container  overflow-hidden rounded-1" style="  background: linear-gradient(to left, rgb(0, 255, 223), rgb(83, 0, 255));
">
        <div class="bg-holder" style="background-image:url(assets/img/promo/promo-bg.png);"></div>
        /.bg-holder
        <div class="px-5 py-7 position-relative">
          <h1 class="text-center w-lg-75 mx-auto fs-lg-6 fs-md-4 fs-3 text-white">An enterprise template to ramp up your company website</h1>
          <div class="row justify-content-center mt-5">
            <div class="col-auto w-100 w-lg-50"><input class="form-control mb-2 border-light fs-1" type="email" placeholder="Your email address" /></div>
            <div class="col-auto mt-2 mt-lg-0"><button class="btn btn-success text-dark fs-1">Start now</button></div>
          </div>
        </div>
      </div>
      end of .container
    </section> -->
    <!-- -->
    <!-- <section> close ============================-->
    <!-- ============================================-->