<?php
//Conecting to the the database
$connect=mysqli_connect('localhost','root','','petcare');

if(!$connect){
    die("Couldnot not connect".mysqli_error());
}


?>