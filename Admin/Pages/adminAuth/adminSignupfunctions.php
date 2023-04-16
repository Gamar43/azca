<?php

  


  include "conn.php";




    $userName           = $_REQUEST['userName'];
    $email          = $_REQUEST['email'];
    $password             = $_REQUEST['password'];

    



    $sql = "INSERT INTO admins (user_name, Email, Password) VALUES ('$userName', '$email', '$password')";



    if(mysqli_query($conn, $sql)){
      echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

      
    } else{
      echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    }


    mysqli_close($conn);
    header("location: adminlogin.php");

  