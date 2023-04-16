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
  <link rel="stylesheet" type="text/css" href="showMemberPage.css">
  <link rel="stylesheet" type="text/css" href="showUsersPage.css">


<!--   <link rel="stylesheet" type="text/css" href="../styleSheets/cheatsheet.css"> -->
	<title>Admin</title>
</head>
<body >


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
              
          <table class="table table-dark table-hover">
          <thead>
          <tr >
            <th scope="col">First Name</th>
            <th scope="col">Second Name</th>
            <th scope="col">Email</th>
            <th scope="col">Batch</th>
            <th scope="col">Phone</th>
            <th scope="col">Major</th>
            <th scope="col">Action</th>
          </tr>
          </thead>
          <tbody>
          
          <tr class="table-primary" >

            <td>Mohammed</td>
            <td>Gamar</td>
            <td>bbsi40054@gmail.com</td>
            <td>IT (28)</td>
            <td>0118173797</td>
            <td>Flutter</td>
            <td><a href="#" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen2">Send Reply</a></td>
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







<!-- ----------------------------------Modals-------------------------------------------- -->


      <!-- ----------------------------Main Modal------------------------------ -->

        <div class="modal fade" id="exampleModalFullscreen2" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" style="display: none;" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
             <div class="modal-header">
              <h1 class="modal-title fs-4" id="exampleModalFullscreenLabel">Send reply</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body " >

    <!-- --------------------------------modal body-------------------------------- -->
    <div class="container">
      <div class="main-body">
            
        <form>
          <label>dear : </label><br>
          <input type="text" name="" required><br>
          <label>Meassage : </label><br>
          <input type="text" name="" required><br>
          <label>Note : </label><br>
          <input type="text" name="" ><br><br>
          <input type="submit" name="" class="btn btn-primary" value="Send Reply">                    
        </form>


        </div>
    </div>

  <!-- --------------------------------modal body-------------------------------- -->

      </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
       </div>
      </div>
    </div>

  <!-- ----------------------------Main Modal------------------------------ -->



  <!-- ------------------------------send Note Modal------------------------------------ -->

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

  <!-- -------------------------------send Note Modal-------------------------------------- -->




  <!-- ----------------------------------Delete Member Modal------------------------------------------- -->

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

  <!-- ------------------------------------Delete Member Modal------------------------------------ -->



  <!-- ------------------------------------delete account modal------------------------------------- -->

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

  <!-- ---------------------------------delete account modal-------------------------------------- -->



  <!-- --------------------------------------block modal ------------------------------------------ -->

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

  <!-- -----------------------------------------block modal--------------------------------------------- -->

<!-- ----------------------------------------------Modals------------------------------------------------------ -->




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

















