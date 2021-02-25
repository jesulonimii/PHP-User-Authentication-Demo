<?php

require_once "checkloggedin.php";

?>

<!DOCTYPE html>
<html>
<head>
  <title>Welcome <?php echo "$fname"; ?> | Ericode</title>

<!--import personal css-->
  <link rel="stylesheet" type="text/css" href="css/ericode.css">
  <link rel="stylesheet" type="text/css" href="css/eriphone.css"  media="screen and (max-width: 600px)" />
  <link rel="stylesheet" type="text/css" href="css/userpage.css">
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

<!--import header-->

<br><br><br><br>
<div class="row">

	<section class="col-4 links">
		<ul>
			<li><a href="homepage.php"><i class="fa fa-home"></i> Home</a></li>

			<li><a href="profile.php"><i class="fa fa-user-circle-o"></i> Profile</a></li>

			<li class="active"><a href="settings.php"><i class="fa fa-cog"></i> Settings</a></li>

			<li><a href="logout.php"><i class="fa fa-sign-out"></i> Log Out</a></li>


			<li><a href="javascript:void(0)"><i class="fa fa-clock-o"></i> Today</a>&nbsp&nbsp&nbsp<?php echo date("l  d/m/Y"); echo "&nbsp" .date("h  : i a").""; ?></li>

		</ul>

	</section>

<section class="col-8 main">

<div class="lform1">
  <div id="lftext">
    <h2 id="formtitle">Change Account Info</h2>
  </div>
<form action="#" method="post">
<div id="ffield">

	<input type="text" name="chfname" required="required" placeholder="Change Firstname" value="<?php echo $fname; ?>" disabled>
	<br><br>
	<input type="text" name="chlname" required="required" placeholder="Change Lastname" value="<?php echo $lname; ?>" disabled>
	<br><br>
	<input type="text" name="chusername" required="required" placeholder="Change Username" value="<?php echo $user; ?>">
	<br><br>
	<input type="email" name="chemail" required="required" placeholder="Change Email" value="<?php echo $email; ?>">
	<br><br>
	<input type="password" id="password" name="oldpassword" required="required" placeholder="Old Password">
  <br><br>
  <input type="password" id="password1" name="chpassword" required="required" placeholder="New Password (put old password if not changing)">
  <br><br>
  <input type="checkbox" id="showpassword" onclick="showPassword()" >&nbsp;Show Passwords
  <br><br>
  <input type="submit" value="Update Info">
  </div>


</form>

</div>

</section>
</div><!--Row div-->

<br><br>
<!--import footer-->


</body>
</html>