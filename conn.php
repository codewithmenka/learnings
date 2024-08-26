<?php
$host = 'localhost';
$dbname = 'menka';
$username = 'root';
$password = '';

$conn = mysqli_connect($host,$username,$password,$dbname);

if(!$conn){
    die("connection failed: " .mysqli_connect_error());
}else{
    echo"succesfully build connection";
}

?>