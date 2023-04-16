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
              
          <h1 style="margin-left:320px; margin-top:10px;">Add news :</h1>
<button type="button" class="btn btn-outline-dark" style="margin-left:355px; margin-top:10px;" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen2">Add</button>
                  
                    
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
<!-- -------------------------side bar--------------------------- -->



















<!-- ----------------------------Main Modal------------------------------ -->

        <div class="modal fade" id="exampleModalFullscreen2" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" style="display: none;" aria-hidden="true">
          <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
            <div class="modal-content">
             <div class="modal-header">
              <h1 class="modal-title fs-4" id="exampleModalFullscreenLabel">Add New cbc test</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body" >

    <!-- --------------------------------modal body-------------------------------- -->
    <form class="row g-3" action="functions.php" method="POST">
          <div class="col-md-4">
            <label  class="form-label">title</label>
            <input type="text" class="form-control " id="validationServer01"  required="" name="fname">
          </div>
          <div class="col-md-4">
            <label  class="form-label">type</label>
            <input type="text" class="form-control " id="validationServer01"  required="" name="fname">
          </div>

          <div class="col-md-4">
            <label  class="form-label">Detail title</label>
            <input type="text" class="form-control " id="validationServer02"  required="" name="ESR">          
          </div>
          <div class="col-md-4">
            <label  class="form-label">Date</label>
            <input type="text" class="form-control " id="validationServer02"  required="" name="WBCs">          
          </div>
          <div class="col-md-4">
            <label  class="form-label">minor info</label>
            <input type="text" class="form-control " id="validationServer02"  required="" name="RBCs">          
          </div>
          <div class="col-md-4">
            <label  class="form-label">tutorial benifit 1</label>
            <input type="text" class="form-control " id="validationServer02"  required="" name="Haemoglobin">          
          </div>
          <div class="col-md-4">
            <label  class="form-label">tutorial benifit 2</label>
            <input type="text" class="form-control " id="validationServer02"  required="" name="Haematerit_pcv">          
          </div>
          <div class="col-md-4">
            <label  class="form-label">tutorial benifit 3</label>
            <input type="text" class="form-control " id="validationServer02"  required="" name="MCV">          
          </div>
          <div class="col-md-4">
            <label  class="form-label">Preview title</label>
            <input type="text" class="form-control " id="validationServer02"  required="" name="MCH">          
          </div>
          <div class="col-md-4">
            <label  class="form-label">Preview</label>
            <input type="text" class="form-control " id="validationServer02"  required="" name="MCHC">          
          </div>
          <div class="col-md-4">
            <label  class="form-label">Team 1</label>
            <input type="text" class="form-control " id="validationServer02"  required="" name="Plateless">          
          </div>
          <div class="col-md-4">
            <label  class="form-label">Team 2</label>
            <input type="text" class="form-control " id="validationServer02"   name="Plateless">          
          </div>
          <div class="col-md-4">
            <label  class="form-label">Team 3</label>
            <input type="text" class="form-control " id="validationServer02"   name="Plateless">          
          </div>
          <div class="col-md-4">
            <label  class="form-label">Team Profissions 1</label>
            <input type="text" class="form-control " id="validationServer02"   name="Neutrophils">          
          </div>
          <div class="col-md-4">
            <label  class="form-label">Team Profissions 2</label>
            <input type="text" class="form-control " id="validationServer02"   name="Neutrophils">          
          </div>
          <div class="col-md-4">
            <label  class="form-label">Team Profissions 3</label>
            <input type="text" class="form-control " id="validationServer02"   name="Neutrophils">          
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
          </div>
        </form>

  <!-- --------------------------------modal body-------------------------------- -->

      </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
       </div>
      </div>
    </div>

  <!-- ----------------------------Main Modal------------------------------ --> 

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script language="JavaScript" type="text/javascript" src="scripts22.js"></script> 
<script type="text/javascript" src="scripts.js"></script>
<script src="bootstrap.bundle.js"></script>
</body>
</html>


 <?php 
}else{
     header("Location: ./adminAuth/adminlogin.php");
     exit();
}
 ?>
















