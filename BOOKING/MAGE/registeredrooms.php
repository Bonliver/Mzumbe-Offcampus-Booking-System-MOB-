<html>
<body>
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
                $room=$result['room'];
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
</body>
</html>