<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>SignUp Now!</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
</head>
<body style="  background: linear-gradient(to left, rgb(0, 255, 223), rgb(83, 0, 255));
 ">

<section class="vh-100" >
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <h1 style="text-align: center; color:white;">Join Al-zaiem Al-azhari Computer Association</h1>
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form >


          <div class="divider d-flex align-items-center my-4">
            <a href="index.php" class="text-center fw-bold mx-3 mb-0" style="color:white; font-size: 2vw;">Home</a>
            <p class="text-center fw-bold mx-3 mb-0" style="color:white; font-size: 2vw;">JoinUs</p>
          </div>

          

          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Name</label>
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter your name" />
            
          </div>



          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Email address</label>
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter your email address" />
            
          </div>

          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Phone Number</label>
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter your email address" />
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password</label>
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
            
          </div>


          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Office</label>
            <input type="text" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter The Office Name You Want" />
            
          </div>



          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Specialty</label>
            <input type="text" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter Your Batch and Specialty" />
            
          </div>


          <div class="text-center text-lg-start mt-4 pt-2" style="margin-bottom: 3vw;">
            <a href="" style="text-decoration:none;color: white;"><button type="button" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Send Form</button></a>
            <!-- <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="#"
                class="link-danger">Login</a></p> -->
          </div>

        </form>
      </div>
    </div>
  </div>
  
</section> 

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>


<?php 
}else{
     header("Location: ../auth/login.php");
     exit();
}
 ?>