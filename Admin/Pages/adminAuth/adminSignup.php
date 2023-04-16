<!DOCTYPE html>
<html>
<head>
	<title>SignUp Now!</title>
	<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" href="bootstrap.css" />
	<link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
</head>
<body>

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="111.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form onsubmit="return validateForm()" method="POST" action="adminSignupfunctions.php" name="myForm">
          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">SignUp</p>
          </div>

          
          <!-- name input -->
          <div class="form-outline mb-4">
            <label class="form-label">User Name</label>
            <input type="text" name="userName" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter @username"  />
          </div>


          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label">Email address</label>
            <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter your email address" />
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" >Password</label>
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
          </div>


          <!-- confirm Password input -->
          <div class="form-outline mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="confirm password" name="confirm" />
          </div>

          <!-- code input -->
          <div class="form-outline mb-3">
            <label class="form-label">owener code</label>
            <input type="password" class="form-control form-control-lg"
              placeholder="please enter owener code" name="code" />
          </div>


          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-dark btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">SignUp</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="adminlogin.php "
                class="link-danger">Login</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section> 



<script src="jsValidateMyForm.js"></script>


</body>
</html>