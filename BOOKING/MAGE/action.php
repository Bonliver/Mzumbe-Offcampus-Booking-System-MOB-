<?php session_start();
$_SESSION;?>

<?php
$uname=$_POST['username'];
$pass=$_POST['password'];

$hpass=md5($pass);

$conn=mysqli_connect("localhost","root","","mob_db");
$sql="SELECT * from registration where user_name='$uname' and password='$hpass' limit 1";
$query=mysqli_query($conn,$sql);
if (!$query) 
{
	die(mysqli_error($conn));
}

//check the number of user found
$number=mysqli_num_rows($query);
if ($number==0) {
	header("location:login.php?fail=1");
}
else{
    //assign the values from database to variables
    $result=mysqli_fetch_array($query);
    $id=$result['id'];
    $user=$result['user_name'];
    $status=$result['status'];
    $sex=$result['gender'];
    $fname=$result['first_name'];
    $lname=$result['last_name'];

    //create session variable for id, username and status
    $_SESSION['identity']=$id;
    $_SESSION['name']=$user;
    $_SESSION['title']=$status;
    $_SESSION['sex']=$sex;
    $_SESSION['first']=$fname;
    $_SESSION['last']=$lname;

    //check the status of admin
    if ($status=="admin") {
      header("location:admin.php");
    }
    else{
      header("location:hostel.php");
    }
  }
?>