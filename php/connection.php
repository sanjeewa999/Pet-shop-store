<?php

$host="localhost";
$user="root";
$password="";
$dbname="petcare";

$con=mysqli_connect($host,$user,$password,$dbname);
$db_connection=mysqli_select_db($con,$dbname);

?>