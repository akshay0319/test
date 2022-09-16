<?php
session_start();
ini_set('display_errors', 1);
include 'configd.php';
database_conection();


$vote=$_POST["candi"];
$person_id=$_SESSION["person_id"];


$sql="select * from vote where person_id = $person_id";
if ($conn->query($sql) === TRUE) 
    {
        echo "<script>alert('Your Record Sucessfully Inserted.Now Login');window.location.href = 'http://localhost/online_voter/Index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
if($conn->query($sql) === True)
?>