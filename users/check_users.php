<?php
include 'db.php';

if(isset($_POST['submit'])){
    $names=$_POST['names'];
    $pass=$_POST['passwordd'];

    $sql = "select * from user_login where names='$names' AND passwordd='$pass'";
    $result =mysqli_query($conn,$sql) or die("Data retrieval Error");

    if(mysqli_num_rows($result) > 0){
        
        $rows=mysqli_fetch_assoc($result);

        $_SESSION['user_id']=$rows['user_id'];
        $_SESSION['names']=$rows['names'];
        $_SESSION['email']=$rows['email'];
        $_SESSION['passwordd']=$rows['password'];
    
        header("location:orders.php");
    }

    else{
       echo "<p style = 'color:red'>Invalid inputs</p>";
    }

}

?>