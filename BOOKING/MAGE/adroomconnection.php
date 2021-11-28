<?php  
$room=$_POST['room'];
$gender=$_POST['gender'];
$capacity=$_POST['capacity'];
$price=$_POST['price'];


$connect=mysqli_connect("localhost","root","","mob_db");
$sql="INSERT into room (room_no,gender,capacity,price) values ('$room','$gender','$capacity','$price')";
$query=mysqli_query($connect,$sql);

if (!$query){

	die(mysqli_error($connect));
}
else {
	header("location:admin.php?adroom=1");
}

?>