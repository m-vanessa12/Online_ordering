<?php
include './users/db.php';
//display data from db

$select="select * from orders";
$query=mysqli_query($conn,$select);

if(mysqli_num_rows($query) > 0){

    ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clients Orders</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
    <link rel="stylesheet" type="text/css" href="css/orders.css">
</head>
<body>
	<div class="table">
	

    <table border="1" cellspacing="0">

      <h1>Clients Orders</h1>

        <tr>
            <th>Id</th>
            <th>drinks</th>
            <th>Quantity</th>
            <th>Food</th>
            <th>Quantity</th>
            <th>Phone No</th>
            <th>Address</th>
            <th>Time</th>
        </tr>
        
        <?php 
        while($rows= mysqli_fetch_assoc($query)) {	        
        ?>

        <tr>
            <td><?php echo $rows['order_id'];?> </td> 
            <td><?php echo $rows['drinks'];?></td>
            <td><?php echo $rows['drink_quantity'];?></td>
            <td><?php echo $rows['food'];?></td>
            <td><?php echo $rows['food_quantity'];?></td>
            <td><?php echo $rows['phone'];?></td>
            <td><?php echo $rows['street_no'];?></td>
            <td><?php echo $rows['Time'];?></td>
        </tr>

        <?php } }?>
    </table>
</div>
</body>
</html>


