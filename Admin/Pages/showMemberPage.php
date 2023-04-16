<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="../styleSheets/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="showUsersPage.css">
  <link rel="stylesheet" type="text/css" href="showMemberPage.css">  
<!--   <link rel="stylesheet" type="text/css" href="../styleSheets/cheatsheet.css"> -->
	<title>Admin</title>
</head>
<body>


<!-- -------------------------side bar--------------------------- -->

<div id="wrapper">
   <div class=" overlay"></div>
    
        <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
     <ul class="nav sidebar-nav">
       <div class="sidebar-header">
       <div class="sidebar-brand">
         <a href="#">Brand</a></div></div>
             <li><a href="showUsersPage.php">Users</a></li>
             <li><a href="showMemberPage.php">Azca Members</a></li>
             <li><a href="blockedUsers.php">Blocked Users</a></li>
             <li><a href="membershipRequests.php">Membership Requests</a></li>
             <li><a href="newsManage.php">News</a></li>
             <li><a href="tutorialsRequests.php">Tutorials</a></li>
             <li><a href="addSingleNew.php">Add news</a></li>
             <li><a href="adminLogout.php">Logout</a></li>
      </ul>
  </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>
        <div class="container">
          <div class="row">
              
           <table class="table table-hover">
          <thead>
          <tr >
            <th scope="col">First Name</th>
            <th scope="col">Second Name</th>
            <th scope="col">Email</th>
            <th scope="col">Batch</th>
            <th scope="col">Phone</th>
            <th scope="col">Major</th>
          </tr>
          </thead>
          <tbody>
          
          <tr class="table-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen2">

            <td>Mohammed</td>
            <td>Gamar</td>
            <td>bbsi40054@gmail.com</td>
            <td>IT (28)</td>
            <td>0118173797</td>
            <td>Flutter</td>
          </tr>

          <tr class="table-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen2">

            <td>Mubarak</td>
            <td>Ahmed</td>
            <td>Mbbarak40054@gmail.com</td>
            <td>CS (28)</td>
            <td>0123456789</td>
            <td>Data Scince</td>
          </tr>

          <tr class="table-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen2">

            <td>Abd Allah</td>
            <td>Fadul</td>
            <td>Abdallah40054@gmail.com</td>
            <td>IS (29)</td>
            <td>0987654321</td>
            <td>IOS Developer</td>
          </tr>
          <tr class="table-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen2">

            <td>Mohammed</td>
            <td>Gamar</td>
            <td>bbsi40054@gmail.com</td>
            <td>IT (28)</td>
            <td>0118173797</td>
            <td>Flutter</td>
          </tr>

          <tr class="table-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen2">

            <td>Mubarak</td>
            <td>Ahmed</td>
            <td>Mbbarak40054@gmail.com</td>
            <td>CS (28)</td>
            <td>0123456789</td>
            <td>Data Scince</td>
          </tr>

          <tr class="table-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen2">

            <td>Abd Allah</td>
            <td>Fadul</td>
            <td>Abdallah40054@gmail.com</td>
            <td>IS (29)</td>
            <td>0987654321</td>
            <td>IOS Developer</td>
          </tr>
          <tr class="table-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen2">

            <td>Mohammed</td>
            <td>Gamar</td>
            <td>bbsi40054@gmail.com</td>
            <td>IT (28)</td>
            <td>0118173797</td>
            <td>Flutter</td>
          </tr>

          <tr class="table-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen2">

            <td>Mubarak</td>
            <td>Ahmed</td>
            <td>Mbbarak40054@gmail.com</td>
            <td>CS (28)</td>
            <td>0123456789</td>
            <td>Data Scince</td>
          </tr>

          <tr class="table-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen2">

            <td>Abd Allah</td>
            <td>Fadul</td>
            <td>Abdallah40054@gmail.com</td>
            <td>IS (29)</td>
            <td>0987654321</td>
            <td>IOS Developer</td>
          </tr>
          <tr class="table-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen2">

            <td>Mohammed</td>
            <td>Gamar</td>
            <td>bbsi40054@gmail.com</td>
            <td>IT (28)</td>
            <td>0118173797</td>
            <td>Flutter</td>
          </tr>

          <tr class="table-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen2">

            <td>Mubarak</td>
            <td>Ahmed</td>
            <td>Mbbarak40054@gmail.com</td>
            <td>CS (28)</td>
            <td>0123456789</td>
            <td>Data Scince</td>
          </tr>

          <tr class="table-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen2">

            <td>Abd Allah</td>
            <td>Fadul</td>
            <td>Abdallah40054@gmail.com</td>
            <td>IS (29)</td>
            <td>0987654321</td>
            <td>IOS Developer</td>
          </tr>
          </tbody>
        </table>                       
                    
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
<!-- -------------------------side bar--------------------------- -->






<!-- ------------------------------------------------------------Modals---------------------------------------------------------------- -->


      <!-- ----------------------------Main Modal------------------------------ -->

        <div class="modal fade" id="exampleModalFullscreen2" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" style="display: none;" aria-hidden="true">
          <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
            <div class="modal-content">
             <div class="modal-header">
              <h1 class="modal-title fs-4" id="exampleModalFullscreenLabel">Full screen modal rock it</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body bg-primary" >

    <!-- --------------------------------modal body-------------------------------- -->
    <div class="container">
      <div class="main-body">
          <div class="row gutters-sm" >
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle"  width="150">

                    <div class="mt-3">
                      <h4>John Doe</h4>
                      <p class="text-secondary mb-1">Full Stack Developer</p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                    <span class="text-secondary">https://bootdey.com</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <span class="text-secondary">@bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Kenneth Valdez
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">specialty</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Full Stack Developer
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      fip@jukmuh.al
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (239) 816-9029
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (320) 380-4539
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Bay Area, San Francisco, CA
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                  </div>
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-9 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3">Actions : </h6>



                        <a href="#sendNoteModal" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#sendNoteModal"> Send Notefication</a>



                       <a href="#DeleteMemberModal" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#DeleteMemberModal" > Delete Membership</a>


                       <a href="#DeleteAccountModal" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#DeleteAccountModal"> Delete Account</a>


                       <a href="#BlockModal" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#BlockModal"> Block Member</a>

                      
                      
                      
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
    </div>

  <!-- --------------------------------modal body-------------------------------- -->

      </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save Changes</button>
        </div>
       </div>
      </div>
    </div>

  <!-- ----------------------------Main Modal------------------------------ -->



  <!-- ---------------------------------------------send Note Modal----------------------------------------------- -->

 <div class="modal fade" id="sendNoteModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Send Note too this user</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- ----------------------------------send Note Modal body------------------------ -->
      <div class="modal-body">
        <textarea style="width: 100%;"></textarea>
      </div>
      <!-- ----------------------------------send Note Modal body------------------------ -->
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-target="#exampleModalFullscreen2" data-bs-toggle="modal">Back</button>
        <button class="btn btn-primary">Send</button>

      </div>
    </div>
  </div>
 </div>

  <!-- ---------------------------------------------send Note Modal----------------------------------------------- -->




  <!-- ---------------------------------------------Delete Member Modal------------------------------------------- -->

 <div class="modal fade" id="DeleteMemberModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Delete Membership?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- -----------------------------------Delete Member Modal body------------------------ -->
      <div class="modal-body">
        This user will no longer be a member of azca and will be a normal user,delete Membership?
      </div>
      <!-- -----------------------------------Delete Member Modal body------------------------ -->
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-target="#exampleModalFullscreen2" data-bs-toggle="modal">Back</button>
        <button class="btn btn-primary">Delete</button>

      </div>
    </div>
  </div>
 </div>

  <!-- ---------------------------------------------Delete Member Modal------------------------------------------- -->



  <!-- ---------------------------------------------delete account modal------------------------------------------ -->

 <div class="modal fade" id="DeleteAccountModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Delete Account?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- -----------------------------------delete account modal body------------------------ -->
      <div class="modal-body">
        This Account will be permantly deleted and will not be restored again,Delete Account?
      </div>
      <!-- -----------------------------------delete account modal body------------------------ -->
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-target="#exampleModalFullscreen2" data-bs-toggle="modal">Back</button>
        <button class="btn btn-primary">Delete</button>

      </div>
    </div>
  </div>
 </div>

  <!-- ---------------------------------------------delete account modal------------------------------------------ -->



  <!-- ---------------------------------------------block modal -------------------------------------------------- -->

 <div class="modal fade" id="BlockModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Block User?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- -----------------------------------block modal body------------------------ -->
      <div class="modal-body">
        User will not be able to access his Accont until you unblock him,Block user?
      </div>
      <!-- -----------------------------------block modal body------------------------ -->
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-target="#exampleModalFullscreen2" data-bs-toggle="modal">Back</button>
        <button class="btn btn-primary">Block</button>

      </div>
    </div>
  </div>
 </div>

  <!-- ---------------------------------------------block modal--------------------------------------------------- -->

<!-- --------------------------------------------Modals---------------------------------------------------------------- -->



<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script language="JavaScript" type="text/javascript" src="scripts22.js"></script> 
<script src="bootstrap.bundle.js"></script>
<script src="cheatsheet.js"></script>
</body>
</html>


 <?php 
}else{
     header("Location: ./adminAuth/adminlogin.php");
     exit();
}
 ?>
















