<?php
session_start();

?>
<html>
<head>
	<title>Off-campus booking</title>
	<link rel="stylesheet" type="text/css" href="css/mob.css">
</head>
<body style="background-color: #150517">
	<div id="content">
		<div id="navigator">
  			<div id="list">
  				<ul>	
  			<li style="color:red;"><a href="home.html">Home</a></li>
				<h3 class="wel">logged in: <?php  echo $_SESSION['first']. "  ".$_SESSION['last']; ?> </h3>
				<a class="log" href="logout.php">logout</a>
			</ul>
		</div>
    </div>
		<div class="side">
			<h2>HOSTEL LIST</h2>
			<ul>
			<li><a href="#" style="color:red;">Wasafi Hostel</a></li>
			<li><a href="#">Adonai hostel</a></li>
			<li><a href="#">Kweka hostel</a></li>
			<li><a href="#">Mbilinyi hostel</a></li>
			<li><a href="#">Glory To God</a></li>
			<li><a href="#">Getlisa hostel</a></li>
			<li><a href="#">Dunga hostel</a></li>
			<li><a href="#">Hope hostel</a></li>
			<li><a href="#">Anfield hostel</a></li>
			<li><a href="#">GTB hostel</a></li>
			<li><a href="#">Kivulini hostel</a></li>
			<li><a href="#">Vigae Hostel</a></li>
			<li><a href="#">Neema Hostel</a></li>
			<li><a href="#">Vikenge Hostel</a></li>
			<li><a href="#">Hostel ya kwanza</a></li>
			<li><a href="#">Hood Hostel</a></li>
			<li><a href="#">Gatuso Hostel</a></li>
			<li><a href="#">Zuberi Hostel</a></li>
			</ul>
		</div>
		<div id="mid2">
			<h1 style="color: blue;">WASAFI HOSTEL</h1>
			<div class="hostel-description">
				<p><u>HOSTEL NAME:</u> WASAFI</p>
				<p><u>OWNER:</u> BONIPHACE JACKSON</p>
				<p><u>PHONE NUMBER:</u> 0712-334455</p>
				<p><u>LOCATION:</u> CHANGALAWE</p>
				<p><u>DISTANCE:</u> 7km from mzumbe gate</p>
				<h2>Hostel Description</h2>
				<p>Hostel hii ni hostel ya kisasa ambayo inatoa huduma bora na yenye mazingira rafiki kwa wanafunzi kusomea na safi kwa kurinda afya. yenye huduma za bei nafuu na kutoa offer ya maji bure na umeme ukikatka unawashiwa generator</p>
				<h3>Services provided</h3>
				<ul>
					<li>Clean Water</li>
					<li>Free WIFI</li>
					<li>2 chair + 1 table</li>
					<li>Security</li>
					<li>Free rooms and Toilet cleaning</li>
				</ul>
			</div>
			<div class="hostel-image">
				<h2>photos</h2>
				<a href="images/moja.jpg" target="_self" ><img src="images/moja.jpg" height="200px" width="300px"></a>
				<a href="images/mbili.jpg" target="_self" ><img src="images/mbili.jpg" height="200px" width="300px"></a>
				<a href="images/tatu.jpeg" target="_self" ><img src="images/tatu.jpeg" height="200px" width="300px"></a>
				<a href="images/nne.jpeg" target="_self" ><img src="images/nne.jpeg" height="200px" width="300px"></a>
			  <a href="images/tano.jpg" target="_self" ><img src="images/tano.jpg" height="200px" width="300px"></a>
			  <a href="images/sita.jpg" target="_self" ><img src="images/sita.jpg" height="200px" width="300px"></a>
			</div>
			<h2>Rooms To Book</h2>
			<form action="book.php" method="POST">
			<table border="1">
				<thead>
				<tr>
					<th>sn</th>
					<th>Room No</th>
					<th>Gender</th>
					<th>Capacity</th>
					<th>price</th>
					<th>Action</th>
				</tr>
			  </thead>
				<?php
				$conn=mysqli_connect("localhost","root","","mob_db");

                $sex=$_SESSION['sex'];
                       
                if($sex=="male"){
                $sql="SELECT * from room WHERE gender='MALE'";
                }
                else{
                $sql="SELECT * from room WHERE gender='FEMALE'";
                }
                $query=mysqli_query($conn,$sql);
                if (!$query) 
                    {
	                die(mysqli_error($conn));
                    } 

                    $number=mysqli_num_rows($query);
                    while ($result=mysqli_fetch_array($query)) {
                  
                    	$sn=$result['sn'];
                    	$room=$result['room_no'];
                    	$gender=$result['gender'];
                    	$capacity=$result['capacity']; 
                    	$price=$result['price']; 

                    	strtoupper($gender);
                    	?>
                    	<tbody>
                    	<tr>
    										<td><input type="hidden" name="sn" value="<?php echo$sn;?>"><?php echo$sn;?></td>
    										<td><input type="hidden" name="rom" value="<?php echo$room;?>"><?php echo$room;?></td>
    										<td><?php echo $gender;?></td>              		
                    		<td><?php echo$capacity;?></td>
                    		<td><?php echo$price;?></td>
                    		<td>
                    		<input type="submit" name="book" value="book"></td></form>
                    	</tr>
                    	
                      </tbody>
                    	<?php } ?>
			</table>
		</form><br>
		</div>
	</div>
</body>
</html>