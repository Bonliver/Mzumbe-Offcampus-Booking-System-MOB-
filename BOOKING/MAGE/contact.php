<?php
 $name=$_POST['name'];
 $email=$_POST['email'];
 $number=$_POST['number'];
 $message=$_POST['message'];

$connect=mysqli_connect("localhost","root","","mob_db");
$sql="INSERT INTO contact (name,email,contact,message) VALUES ('$name','$email','$number','$message')";
$query=mysqli_query($connect,$sql);

if (!$query){

	die(mysqli_error($connect));
}
?>