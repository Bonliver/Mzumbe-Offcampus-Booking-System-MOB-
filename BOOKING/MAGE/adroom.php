<html>
<head>
	<title>MOB</title>
	<link rel="stylesheet" type="text/css" href="css/mob.css">
</head>
<body>
	<?php if (isset($_GET['register'])) { ?>
 <center><h3 style="color: red"> a room registered succesifully</h3></center>
	<?php  }  ?>
<center><h1>please register here</h1></center>
<center><form action="adroomconnection.php" method="POST">
<pre>
<input type="text" name="room" placeholder="room number"><br>
<input type="text" name="gender" placeholder="gender"><br>
<input type="text" name="capacity" placeholder="capacity"><br>
<input type="text" name="price" placeholder="price"><br>
<input class="in" type="submit" name="submit" value="register">
</pre>
</form></center>
</body>
</html>