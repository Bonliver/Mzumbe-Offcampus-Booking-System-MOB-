<?php  
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$sex=$_POST['sex'];
$date=$_POST['date'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$uname=$_POST['uname'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

$sex=strtoupper($sex);
if($password==$cpassword){

   $hpassword=md5($password);
   
$connect=mysqli_connect("localhost","root","","mob_db");
$sql="INSERT INTO registration (first_name,middle_name,last_name,gender,DOB,mobile_no,email,user_name,password,status) VALUES ('$fname','$mname','$lname','$sex','$date','$mobile','$email','$uname','$hpassword','customer')";
$query=mysqli_query($connect,$sql);

if (!$query){

	die(mysqli_error($connect));
}
else {
	header("location:login.php");
}
}
else{
	header("location:mobAccount.php?match=1");
}
?>