<?php
session_start();
include 'config.php';
$username1 = $_POST['mail'];
$password1 = $_POST['password'];

// Create a connection to the database
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "erasmus"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM users WHERE email='$username1' AND password='$password1'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['user_id'] = $username1;
	  $_SESSION['fname'] = $username1;
  	  header('location: index.php');
   }

   else {

	header('location: login.html');
	echo 'wrong creds';


   }

// Close the database connection
$conn->close();
?>
