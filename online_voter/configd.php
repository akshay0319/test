<?php  

function database_conection()
{
$host = 'localhost:3306';  
$user = 'root'; 
$pass = 'Pass@1234'; 
$dbname = "online_voter";
global $conn;


 $conn = mysqli_connect($host, $user, $pass, $dbname);  
if(! $conn )  
{  
  die('Could not connect:' . mysqli_connect_error());  
}  
// echo "connected sucessfully";
}

?> 