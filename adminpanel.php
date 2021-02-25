<?php

 session_start(); //starts the session
   if($_SESSION['adminusername']){ // checks if the admin is logged in  
    }
   else{
      header("location: index.php"); // redirects if admin is not logged in
   }



?>