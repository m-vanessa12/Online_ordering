<?php
require './users/commands.php';
// require './users/check_users.php';
?>

<html>
    <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Delivery</title>
    <link rel="stylesheet" type="text/css" href="css/orders.css">
    </head>
    <body>  
   <div class="gradient_overlay">
     <div class="menu">
        <!-- <?php  echo"Welcome ".$_SESSION['names'];  ?>   -->

        <h1> Make your order</h1>

        <form action="" method="POST">
            <Label>Drinks</Label>
            <select name='drinks' required="">
                <option>Soda</option>
                <option>Milk shake</option>
                <option>Juice</option>
                <option>Wines</option>
            </select>

            <Label>Quantity</Label>
            <select name='drink_quantity' required="">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select><br>

            <Label>Food</Label>
            <select name='food' required="">
                <option>Pizza</option>
                <option>Burger</option>
                <option>Rolex</option>
            </select>

            <Label>Quantity</Label>
            <select name='food_quantity' required="">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select><br>
            <input type="text" name="phone" placeholder="Enter Your Phone Number" required=""><br>
            <input type="text" name="street_no" placeholder="Enter Your Street Code" required=""><br>

            <input type="submit" name="submit" value="SEND">
            <!-- <p><?php echo "Thanks for making ur order"; ?>  </p> -->
    </form>
  </div>
</div>
</body>
</html>