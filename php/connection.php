<?php
/*
 * conection with database
 * username -> root
 * password -> Arihant
 * dbname -> attendanceManager */

$severName = "localhost";
$username = "root";
$password = "arihant";
$dbname = "attendanceManager";
// connection variable
$conn = new mysqli($severName, $username, $password, $dbname);

// check for the connection
if ($conn->connect_error){
    die("connection Failed" + $conn->connect_error);
}
//session_start();
//echo "connection succesful";
?>
