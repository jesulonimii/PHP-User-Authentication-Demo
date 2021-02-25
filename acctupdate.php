<?
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

if(isset($_SESSION["id"]) and isset($_SESSION["lname") and isset($_SESSION["fname") and isset($_SESSION["dob"]) and isset($_SESSION["email"]) and isset($_SESSION["user"]) and isset($_SESSION["password"])  and
 isset($_SESSION["gender"]))
require_once 'includes/db.php'

if(isset($_POST["chusername"]) and isset($_POST["chemail"]) and isset($_POST["oldpassword"]) and isset($_POST["chpassword"])){

$chusername = $_POST["chusername"];
$chemail = $_POST["chemail"];
$oldpassword = $_POST["oldpassword"];
$chpassword = $_POST["chpassword"];


if($oldpassword == $password){
	$query= "UPDATE login SET email= '$chemail', username = '$chusername',password= '$chpassword' WHERE surname = '$lname' and `other-names` = '$fname'";


	$result = mysqli_query($connection, $query)  or die(mysqli_connect($connection));

	if($result){
		echo 'Update Successful;';
	} else {
		echo 'failed';
	}
	
} else{

	echo 'old password wrong';
}

}

?>