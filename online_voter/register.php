<?php
// include 'configd.php';
// database_conection();
ini_set('display_errors', 1);

$host = 'localhost:3306';
$user = 'root';
$pass = 'Pass@1234';
$dbname = "online_voter";

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$userid = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phonenumber = $_POST['phone_num'];

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die('Could not connect:' . mysqli_connect_error());
} 
if (!empty($firstname) && !empty($lastname) && !empty($userid) && !empty($email) && !empty($password) && !empty($phonenumber)) 
{
    $sql = "insert into user (first_name, last_name, user_id, email, password, phone_number) values ('$firstname','$lastname', '$userid', '$email','$password', $phonenumber)";
    if ($conn->query($sql) === TRUE) 
    {
        echo "<script>alert('Your Record Sucessfully Inserted.Now Login');window.location.href = 'http://localhost/online_voter/Index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else
{
    echo "data is empty";
}

?>