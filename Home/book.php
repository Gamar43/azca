<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>  دوراتك علينا  </title>
    <link rel="stylesheet" type="text/css" href="book.css">
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.css">




</head>
<body style="  background: linear-gradient(to left, rgb(0, 255, 223), rgb(83, 0, 255));
 ">

<section class="vh-100" >
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <h1 style="text-align: center; color:white;">   خدمة دوراتك علينا  </h1>
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form >


          <div class="divider d-flex align-items-center my-4">
            <a href="index.php" class="text-center fw-bold mx-3 mb-0" style="color:white; font-size: 2vw;">Home</a>
            
          </div>

          
          <form>
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Name</label>
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter your name" style="background-color: white;" />
            
          </div>

          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Phone Number</label>
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter your Whatsapp Number" style="background-color: white;" />
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password</label>
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter your password" style="background-color: white;" />
            
          </div>

          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Specialty</label>
            <input type="text" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter Your Batch and Specialty" style="background-color: white;" />
          </div>
            <label>Tutorial</label>
          <select class="form-select form-select-lg" aria-label=".form-select-lg example">
            <option selected="">Open this select menu</option>
            <option value="1">one</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>


          <div class="text-center text-lg-start mt-4 pt-2" style="margin-bottom: 3vw;">
              <input type="submit" name="" class="btn btn-primary btn-lg" value="Send Request">    
          </div>
        </form>


</section> 

<script src="book.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</body>
</html>

<?php 
}else{
     header("Location: ../auth/login.php");
     exit();
}
 ?>