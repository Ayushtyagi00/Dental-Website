<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "mydentalhealth";
$conn = new mysqli($server, $username, $password, $db_name,  3307);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
// echo "Connection successfull!";
?>