<?php 
$connect=mysqli_connect("localhost","root","","mob_db");

$id=$_GET['delete'];

$sql="delete from registration where id='$id'";
$del=mysqli_query($connect,$sql);

if($del){
	mysqli_close($connect);
	herder("location:admin.php");
	exit;
}
else{
	echo "Error deleteng record";
}
?>