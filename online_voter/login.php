<?php
session_start();
ini_set('display_errors', 1);
include 'configd.php';
 database_conection();

$user_id=$_POST['user_id'];
$password=$_POST['password'];
$submit=$_POST['submit1'];


    $sql = "SELECT * FROM user WHERE user_id = '$user_id' AND password = '$password' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
      $row = $result->fetch_assoc();
  
      $_SESSION["user_login"] = 1;
      $_SESSION["person_id"] = $row['person_id'];
      header("Location:http://localhost/online_voter/vote.php");
      } 
    else 
      {
        $_SESSION["user_login"] = 0;
        echo "inserted incorrect details ,pls check credintials";
      
      }

?>