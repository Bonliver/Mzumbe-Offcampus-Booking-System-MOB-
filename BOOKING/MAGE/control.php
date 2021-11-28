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
      <div class="sidee"> 

      </div>
      <br><br><br><br>
      <div class="login-form">
            <?php 
            $conn=mysqli_connect("localhost","root","","mob_db");
            $let="select * from book";
            $data=mysqli_query($conn,$let);
            $see=mysqli_fetch_array($data);
            $room=$see['room'];
            $customer=$see['customer'];

            $sql="SELECT bookID FROM book where room='$room' AND customer='$customer'";
            $query=mysqli_query($conn,$sql);

             if(!$query){
               die(mysqli_error($conn));
             } 
             $id=mysqli_fetch_array($query);
             $num=$id['bookID'];
       ?>
         <h1>Your control number is <br><br><span style="color: black;background: #F08080; padding: 10px 30px;"><?php echo "$num"; ?></span></h1>
          <br><br>
         <h1>Time remain:  </h1>
</div>
</body>
</html>
