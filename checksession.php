<?php

session_start();
if(isset($_SESSION["user"])){

if($_SESSION["user"]){
  header("location: homepage.php");
}
 else{}
}
?>
