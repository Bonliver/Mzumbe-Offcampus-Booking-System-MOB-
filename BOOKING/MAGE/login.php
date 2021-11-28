<!DOCTYPE html>
<html>
<head>
	<title>Mzumbe Offcompus Booking</title>
	<link rel="stylesheet" type="text/css" href="css/mob.css">
</head>
<body style="background-color: #150517">
<div id="navigation">
	<a href="home.html"><h1>MZUMBE OFFCAMPUS BOOKING</h1></a>
</div>
<div id="login"><br>
	<div class="login-form">
	<h1>LOG IN</h1>
	<center><p>please fill your information</p>
		<hr>
	<form action="action.php" method="POST">
		<?php if (isset($_GET['fail'])) { ?>
		<h3 style="color: red;background: #F08080; padding: 10px ">wrong password or username</h3>
		<?php } ?>
		<p><input type="text" name="username" placeholder="username"></p>
		<p><input type="password" name="password" placeholder="password"></p>

		<p><a href="">Forgot Password?</a></p>
		<P><input type="submit" name="submit" value="login"></P>
	</center>
	
		<br><br><hr>
		<center>Not a member? <a href="mobaccount.php">Create Acount</a></center>	
	</form><br><br>
</div><br><br>
</div>
</body>
</html>