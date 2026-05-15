<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "escape_game";
$con = mysqli_connect("$server","$username","$password","$dbname");

if(!$con){
	die("Connection error: " . mysqli_connect_error());
}
?>