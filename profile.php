<?php

require_once "checkloggedin.php";

?>

<!DOCTYPE html>
<html>
<head>
  <title>Profile - <?php echo "$fname"; ?> | Ericode</title>

<!--import personal css-->
  <link rel="stylesheet" type="text/css" href="css/ericode.css">
  <link rel="stylesheet" type="text/css" href="css/eriphone.css"  media="screen and (max-width: 600px)" />
  <link rel="stylesheet" type="text/css" href="css/userpage.css">
  <link rel="stylesheet" type="text/css" href="css/userpagephone.css" media="screen and (max-width: 600px)">


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

	<section class="col-4 links">
		<ul>
			<li><a href="homepage.php"><i class="fa fa-home"></i> Home</a></li>

			<li class="active"><a href="profile.php"><i class="fa fa-user-circle-o"></i> Profile</a></li>

			<li><a href="settings.php"><i class="fa fa-cog"></i> Settings</a></li>

			<li><a href="logout.php"><i class="fa fa-sign-out"></i> Log Out</a></li>


			<li><a href="javascript:void(0)"><i class="fa fa-clock-o"></i> Today</a>&nbsp&nbsp&nbsp<?php echo date("l  d/m/Y"); echo "&nbsp" .date("h  : i a").""; ?></li>

		</ul>

	</section>

<section class="col-8 main">

	<section class="col-3 profilepic">
		<i class="fa fa-user-circle"></i>

	</section>

	<section class="col-5 info">
		<h3>Name</h3>
		<p><?php echo "$fname $lname "; ?></p>
		
		<h3>Date of Birth</h3> 
		<p><?php echo "$dob "; ?></p>
		
		<h3>Gender</h3>
		<P><?php echo "$gender"; ?></P>
		
		<h3>Email</h3>
		<p><?php echo "$email "; ?></p>

		<h3>Username</h3>
		<p><?php echo "$user "; ?></p>
	</section>


</section>
</div><!--Row div-->

<br><br>
<!--import footer-->


</body>
</html>