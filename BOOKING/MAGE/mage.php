<?php
session_start();

$uname=$_POST['uname'];
$password=$_POST['password'];

$conn=mysqli_connect("localhost","root","","zoezi");
$password=sha1($password);

$sql="SELECT * FROM registration where user_name='$uname' and password='$password'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
	while ($row=mysqli_fetch_assoc($result)) {
		$_SESSION['user_name']=$uname;

		if ($row['status']=="admin") {
			header("location:admin.php");
		}
		elseif ($row['status']=="customer") {
			header("location:hostel.php");
		}
	}
}
else
{
	$_SESSION['user_name']=$uname;
		header("location:mobAccount.php");
}