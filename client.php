<?php
require_once "checksession.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page - Ericode</title>

<!--import personal css-->
  <link rel="stylesheet" type="text/css" href="css/ericode.css">
  <link rel="stylesheet" type="text/css" href="css/eriphone.css"  media="screen and (max-width: 600px)" />
  <link rel="stylesheet" type="text/css" href="css/forms.css">
  <link rel="stylesheet" type="text/css" href="css/formsphone.css" media="screen and (max-width: 600px)">

<!--import font and icons-->
 <?php require_once 'includes/icons-font.php'; ?>
  
  <!--import meta file-->
 <?php require_once 'includes/metainfo.php'; ?>

<!--import javascript-->
<script type="text/javascript" src="javascript/ericode.js"></script>

</head>
<body>


<br><br><br><br>
<div class="row">


<div class="lform">
  <div id="lftext">
    <h2 id="formtitle">Login</h2>
  </div>
<form action="loginvalidate.php" method="post">
<div id="ffield">
  <input type="text" required="required" placeholder="user i.d" name="user">
  <br><br>
  <input type="password" name="password" id="password" required="required" placeholder="password">
  <br><br>
  <input type="checkbox" id="showpassword" onclick="showPassword()" >&nbsp;Show Password
  <br><br>
  <input type="submit" onclick="caseAlert()" value="Login">
  </div>


</form>

<div class="lhaveaccount">
Not Registered? <a href="signup.php">Sign-up here!</a> | <a href="#"> Forgot Password?</a>
</div>
</div>



</div><!--Row div-->

<br><br>
<!--import footer-->


</body>
</html>