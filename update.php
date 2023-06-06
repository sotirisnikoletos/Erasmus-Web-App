<?php


session_start();
$id=$_SESSION['user_id'];
// Retrieve form data
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];

$email = $_POST['mail'];
$tel = $_POST['tel'];
$username1 = $_POST['username'];
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


    

// Insert the form data into the database
$query = "UPDATE users SET fname= '$firstname',lname = '$lastname', email = '$email',tel = '$tel', username = '$username1', password = '$password1' WHERE email= '$id'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));    
if ($conn->query($query) === TRUE) {
        echo "Profile updated successfully.";
        $_SESSION['user_id']=$firstname;
        header('location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

// Close the database connection
$conn->close();
?>
