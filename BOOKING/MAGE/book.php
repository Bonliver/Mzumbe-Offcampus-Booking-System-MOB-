<?php session_start(); ?>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="css/mob.css">
</head>
<body style="background-color: #ddd;">
   <div id="content">
      <div id="navigator">
         <div id="list">
            <ul> 
            <h3 class="wel">logged in: <?php  echo $_SESSION['first']. "  ".$_SESSION['last']; ?> </h3>
            <a class="log" href="logout.php">logout</a>
         </ul>
      </div>
    </div>
      <div class="side">
         
      </div>

      <div class="sidec">
   <h2>BOOKING</h2>
<p>Dear customer, congratation for successful Registration to this system. You are about to make booking of accomodation at your choosen room. pleas not that room alocation is first come first served. Once you make booking for room, you have to pay within 24 hours or else the room will allocated to another customer. Remember do not make booking for room if you are not interested wit specific room. </p>
<h2>GUIDE LINE</h2>
<ol type="A">
   <li>You are not allowed to book not more than 3 times including cancering of room,field booking</li>
   <li>When field to secure a room due to payment fairule, your booking will be invalid and will be required to book again</li>
   <li>After booking room you will be required to make pyment on-time required</li>
</ol>
<?php
if(isset($_POST['book'])){
    $sn=$_POST['sn'];
    $hostel=$_POST['rom'];

    $userId=$_SESSION['identity'];
    $username=$_SESSION['name'];
      }
   ?>
      <h3>Place OK to continue, You book for </h3>
      <li><?php echo $userId ?></li>
         <li> HOSTEL: WASAFI</li>
         <li>Room Number: <?php echo "$hostel" ?></li>
         <li>Room ID: <?php echo "$sn";?></li>
      </ul><br>
      <?php 
            $conn=mysqli_connect("localhost","root","","mob_db");
            $sql="INSERT INTO book(room,customer) values('$sn','$userId');";
            $query=mysqli_query($conn,$sql);

             if(!$query){
               die(mysqli_error($conn));
             } 
       ?>
   <form action="control.php" method="POST">
   <input type="submit" name="continue" value="OK">
   </form>  
</div>
</div>
</body>
</html>
