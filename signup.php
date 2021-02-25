<!DOCTYPE html>
<html>
<head>
  <title>Sign up page | Ericode</title>

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


<div class="sform">
  <div id="lftext">
    <h2 id="formtitle">Sign-up</h2>
  </div>
<form action="signupvalidate.php" method="post">
<div id="ffield">
  <input type="text" required="required" placeholder="first name" name="fname">
  <br><br>
  <input type="text" required="required" placeholder="last name" name="lname">
  <br><br>
  <input type="email" required="required" placeholder="email" name="email">
  <br><br>
  <label for="dob">Date of Birth</label>
   <input type="date" id="dob" required="required" placeholder="date of birth" name="dob">
  <br><br>

  <label for="male">Male</label><input type="radio" id="male" required="required" name="gender" value="Male">
  &nbsp;
 <label for="female">Female</label><input type="radio" id="female" required="required" name="gender" value="Female">
  <br><br>


  <input type="text" required="required" placeholder="create user i.d" name="user">
  <br><br>
  <input type="password" name="password" id="password" required="required" placeholder="create password">
  <br><br>
  <input type="password" name="conpassword" required="required" placeholder="confirm password" >
  <br><br>
  <input type="submit" onclick="caseAlert()" value="Sign-up">

<div class="shaveaccount">
Have an account? <a href="client.php">Login!</a>
</div>
  </div>


</form>
</div>



</div><!--Row div-->

<br><br>
<!--import footer-->


</body>
</html>