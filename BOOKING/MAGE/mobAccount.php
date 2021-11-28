<!DOCTYPE html>
<html>
<head>
	<title>Create account</title>
<link rel="stylesheet" type="text/css" href="css/mob.css">
</head>
<body style="background-color: #150517">
	<div id="navigation">
	<a href="home.html"><h1>MZUMBE OFFCAMPUS BOOKING</h1></a>
</div>
<div id="login">
	<br>
	<div class="login-form">
	<h1>SIGN UP</h1>

		<?php if (isset($_GET['match'])) { ?>
		<center><h4 style="color: red;background: #F08080; padding: 10px ">password is not match</h4></center>
		<?php } ?> 
	   <form action="connection.php" method="POST">
		<center><p><input type="text" name="fname" placeholder="enter first name" required></label></p>
		<p><input class="one" type="text" name="mname" placeholder="enter middle name"></p>
		<p><input class="one" type="text" name="lname" placeholder="enter last name" required></p>
		<p><label>Gender:</label><br><input type="radio" name="sex" value="male"><label class="two">Male:</label>
		<input type="radio" name="sex" value="female" ><label class="two">Female:</label></p>
		<p><input type="date" name="date" placeholder="dd/mm/" max="2002-12-1"></p>
		<p><input type="text" name="mobile" placeholder="enter you mobile number" required></p>
		<p><input type="email" name="email" placeholder="enter your email" required></p>
		<p><label><input type="text" name="uname" placeholder="user name" required></p>
		<p><input type="password" name="password" placeholder="enter your password" required></p>
		
		<p><input type="password" name="cpassword" placeholder="confirm your password" required ></p><br>
		<P><input type="submit" name="submit" value="Register">
		<input type="reset" name="reset" value="Cancel"></P>
		</center>
	     <br><hr>	
	</form><br><br>
	</div><br><br>
</div>
</body>
</html>