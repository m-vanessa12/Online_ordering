<?php
include './users/db.php';

//user making an order 

if(isset($_POST['submit'])){

    $drinks = $_POST['drinks'];
    $drinks_quant = $_POST['drink_quantity'];
    $food = $_POST['food'];
    $food_quant = $_POST['food_quantity'];
    $phone = $_POST['phone'];
    $address = $_POST['street_no'];

    $insert="INSERT INTO orders (drinks,drink_quantity,food,food_quantity,phone,street_no)
    VALUES('$drinks','$drinks_quant','$food','$food_quant','$phone','$address')";
    $query=mysqli_query($conn, $insert);

    if($query){
        
    }
    else{
        echo"Not added";
}
}
?>