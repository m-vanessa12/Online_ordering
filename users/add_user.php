<?php
include 'db.php';

if(isset($_POST['submit'])){

    $names = $_POST['names'];
    $emails = $_POST['email'];
    $pass = $_POST['passwordd'];

    $insert="INSERT INTO user_login (names,email,passwordd)
    VALUES('$names','$emails','$pass')";
    $query=mysqli_query($conn, $insert);

    if($query){
        header ('location:user_login.php');
    }
    else{
        echo"Not work";
}

}

?>