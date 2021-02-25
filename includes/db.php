<?php

//update database info here
$db_servername='localhost';
$db_user='root';
$db_password='';
$db_dbname='login';

//connection here
$connection = mysqli_connect($db_servername, $db_user, $db_password, $db_dbname);

//check connection error
if (!$connection){
die("Database Connection Failed" .mysqli_error($connection));
} else{
//echo("Database connection successful");
}

?>

