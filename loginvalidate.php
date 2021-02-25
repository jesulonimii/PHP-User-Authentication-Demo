<?php

require_once 'includes/db.php';


//getting the inputted values
if (isset($_POST["user"]) and isset($_POST["password"])){

	//declaring variables

$user= htmlspecialchars($_POST["user"]);
$password= htmlspecialchars($_POST["password"]);
$adminuser="admin@ericode";
$adminpassword="admin2003@ericode";


if ($user==$adminuser  and $password==$adminpassword) {

   session_start();
   $_SESSION["adminloggedin"] = true;
   $_SESSION["adminusername"] = $adminuser;


   header("location: adminpanel.php");
} else{

   $query= "SELECT*FROM `login` WHERE username ='$user' and password ='$password'";

   $result= mysqli_query($connection,$query) or die(mysqli_connect($connection));

   
   $success= mysqli_num_rows($result);

   if($success == 0){
      print'<script type="text/javascript"> alert("Unable to identify account with given credentials. Please check and try again"); </script>';
      print '<script type="text/javascript"> window.location.assign("client.php"); </script>';
     } else{ 



      for ($j = 0 ; $j < $success ; ++$j){
      $row = mysqli_fetch_row($result);


      session_start();
      $_SESSION["loggedin"] = true;
      $_SESSION["id"] = $id;
      $_SESSION["lname"] = $row[1];
      $_SESSION["fname"] = $row[2];
      $_SESSION["dob"] = $row[3];
      $_SESSION["email"]= $row[4];
      $_SESSION["user"] = $row[5];
      $_SESSION["password"] = $row[6];
      $_SESSION["gender"] = $row[7];

    }
      header("location: homepage.php");


       }
       
   
}
}

?>