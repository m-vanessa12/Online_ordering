<!-- db connections -->

<?php

session_start();

$dbserver = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "restaurant";


$conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbname);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

// echo "connection successfully";

?>

