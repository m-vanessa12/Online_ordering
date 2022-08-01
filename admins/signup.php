<?php
include 'db.php';

if(isset($_POST['submit'])){

    $names = $_POST['names'];
    $pass = $_POST['passwordd'];
    $phone = $_POST['phone'];

    $insert="INSERT INTO admin_login (names,passwordd,phone)
    VALUES('$names','$pass','$phone')";
    $query=mysqli_query($conn, $insert);

    if($query){
        header ('location:admin_login.php');
    }
    else{
        echo"Not work";
}

}

?>