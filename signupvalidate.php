<?php

require_once 'includes/db.php';

//getting the inputted values
if (isset($_POST["user"]) and isset($_POST["password"]) and isset($_POST["conpassword"]) and isset($_POST["email"]) and isset($_POST["fname"]) and isset($_POST["lname"]) and isset($_POST["dob"]) and isset($_POST["gender"])){

	//declaring variables
$lname= htmlspecialchars($_POST["lname"]);
$fname= htmlspecialchars($_POST["fname"]);
$user= htmlspecialchars($_POST["user"]);
$password= htmlspecialchars($_POST["password"]);
$conpassword= htmlspecialchars($_POST["conpassword"]);
$email= htmlspecialchars($_POST["email"]);
$dob= htmlspecialchars($_POST["dob"]);
$gender= htmlspecialchars($_POST["gender"]);


if ($password == $conpassword){

	global $connection;

	$query= "INSERT INTO `login` (`surname`, `other-names`, `username`, `email`, `password`, `gender`, `dob`)
	 VALUES ('$lname', '$fname', '$user', '$email', '$password', '$gender', '$dob')";


	$result = mysqli_query($connection, $query);
         if ($result){
            //echo "user created successfully";
            
            session_start();
            $_SESSION["loggedin"]= true;
            $_SESSION["id"]= $id;
            $_SESSION["lname"] = $lname;
            $_SESSION["fname"] = $fname;
            $_SESSION["dob"] = $dob;
            $_SESSION["email"]= $email;
            $_SESSION["user"] = $user;
            $_SESSION["gender"] = $gender;

             header("location: homepage.php");
              } else{

            echo "An error occured please try again";
            mysqli_error($connection);
         }


} else{
	echo "passwords do not match";
}











}

?>