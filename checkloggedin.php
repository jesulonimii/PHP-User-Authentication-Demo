<?php

   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
    }
   else{
      header("location: client.php"); // redirects if user is not logged in
   }
   $user = $_SESSION['user']; //assigns user value
   $dob = $_SESSION['dob']; //assigns date of birth value
   $fname = $_SESSION['fname']; //assigns first name value
   $lname = $_SESSION['lname']; //assigns last name value
   $email = $_SESSION['email']; //assigns email value
   $gender = $_SESSION['gender']; //assigns gender value

   $password = $_SESSION['password']; //assigns password value

  

?>