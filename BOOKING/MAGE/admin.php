<?php session_start(); ?>
<html>
<head>
	<title>Admin account</title>
	<link rel="stylesheet" type="text/css" href="css/mob.css">
</head>
<body>
	<div id="navigator">
  			<div id="list">	
			<h2 class="wel">Welcome <?php echo$_SESSION['name']?> you logged as an admin </h2>
			<a class="log" href="logout.php">logout</a>
			</ul>
		</div>
	</div>
	<div class="sideb">
		<br>
		<button><a href="?adroom=2"> Add Rooms</a></button>
		<br><br><br>
		<button><a href="?room=2">View Rooms</a></button>
		<br><br><br>
		<button><a href="?booked=2">People Booked</a></button>
		<br><br><br>
		<button><a href="?delete=2">Delete customer</a></button>
		<br><br><br>
		<button><a href="?change=2">Edit customer</a></button>
		<br><br><br>
		<button><a href="?comment=2">View Comment</a></button>
	</div>
	<div id="mid2">
		<br>
		<?php 
          if(isset($_GET['adroom'])){
          	?>
			<div id="login"><br>
				<div class="login-form">
					<center>
			<h2>Please Register Here</h2>
			<hr>
			<form action="adroomconnection.php" method="POST">
			<input type="text" name="room" placeholder="room number"><br><br>
			<input type="text" name="gender" placeholder="gender"><br><br>
			<input type="text" name="capacity" placeholder="capacity"><br><br>
			<input type="text" name="price" placeholder="price"><br><br><br>
			<input class="in" type="submit" name="submit" value="register">
			</form>
			<?php } ?>

		<?php 
          if(isset($_GET['room'])){
          	?>
		<table border="1">
		<tr>
			<th>sn</th>
			<th>Room No</th>
			<th>Gender</th>
			<th>Capacity</th>
			<th>price</th>		
		</tr>
		<?php
		    $conn=mysqli_connect("localhost","root","","mob_db");
            $sql="SELECT * from room";
            $query=mysqli_query($conn,$sql);
             if (!$query){ 
	            die(mysqli_error($conn));
                } 
            $number=mysqli_num_rows($query);
            while ($result=mysqli_fetch_array($query)) {
                $sn=$result['sn'];
                $room=$result['room_no'];
                $gender=$result['gender'];
                $capacity=$result['capacity']; 
                $price=$result['price']; 
        ?>
        <tr>
           	<td><?php echo$sn;?></td>
            <td><?php echo$room;?></td>
            <td><?php echo$gender;?></td>
            <td><?php echo$capacity;?></td>
            <td><?php echo$price;?></td>
        </tr>
        <?php } ?>
    </table>


          	<?php } ?>


         	<?php 
          if(isset($_GET['booked'])){
          	?>
		<table border="1">
		<tr>
           <th>NAME</th>
           <th>HOSTEL</th>
           <th>ROOM NUMBER</th>		
		</tr>
		<?php
		    $conn=mysqli_connect("localhost","root","","mob_db");

           $sql="SELECT R.first_name,RO.sn FROM book as B LEFT JOIN registration as R ON B.bookID=R.id LEFT JOIN room as RO ON B.bookID=RO.sn";
		  
            $query=mysqli_query($conn,$sql);
             if (!$query){ 
	            die(mysqli_error($conn));
                } 
            $number=mysqli_num_rows($query);
            while ($result=mysqli_fetch_array($query)) {
                $name=$result['first_name'];
                $rom=$result['room_no'];
        ?>
        <tr>
           	<td><?php echo $name;?></td>
           	<td>WASAFI</td>
            <td><?php echo $rom;?></td>

        </tr>
        <?php } ?>
    </table>
          	<?php } ?>



       		<?php 
          if(isset($_GET['delete'])){
          	?>
          	<form>
		<table border="1">
		<tr>
			<th>id</th>
			<th>first_name</th>
			<th>last_name</th>
			<th>User_name</th>
			<th>choose</th>		
		</tr>
		<?php
		    $conn=mysqli_connect("localhost","root","","mob_db");
            $sql="SELECT * from registration";
            $query=mysqli_query($conn,$sql);
             if (!$query){ 
	            die(mysqli_error($conn));
                } 
            $number=mysqli_num_rows($query);
            while ($result=mysqli_fetch_array($query)) {
                $id=$result['id'];
                $fname=$result['first_name'];
                $lname=$result['last_name'];
                $user=$result['user_name'];  
        ?>
        <tr>
           	<td><?php echo$id;?></td>
            <td><?php echo$fname;?></td>
            <td><?php echo$lname;?></td>
            <td><?php echo$user;?></td>
            <td><a href="delete.php">delete</a></td>
        </tr>
        <?php } ?>
    </table>
</form>

          	<?php } ?>


          			<?php 
          if(isset($_GET['comment'])){
          	?>
		<table border="1">
		<tr>
			<th>name</th>
			<th>Email</th>
			<th>contact</th>
			<th>message</th>		
		</tr>
		<?php
		    $conn=mysqli_connect("localhost","root","","mob_db");
            $sql="SELECT * from contact";
            $query=mysqli_query($conn,$sql);
             if (!$query){ 
	            die(mysqli_error($conn));
                } 
            $number=mysqli_num_rows($query);
            while ($result=mysqli_fetch_array($query)) {
                $name=$result['name'];
                $email=$result['email'];
                $contact=$result['contact'];
                $message=$result['message']; 
        ?>
        <tr>
           	<td><?php echo$name;?></td>
            <td><?php echo$email;?></td>
            <td><?php echo$contact;?></td>
            <td><?php echo$message;?></td>
        </tr>
        <?php } ?>
    </table>
    <?php } ?>
	</center>
	</div>
	</div>
</div>
</body>
</html>