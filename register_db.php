<?php
// Retrieve form data
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$studentId = $_POST['am'];
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


$query1 = "SELECT COUNT(*) as count FROM users WHERE username = '$username1' AND user_type_id ='1'";
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($result1);

// Check if the query returned any rows with the username
if ($row1['count'] > 0) {
    // Username already exists, display an error message or take appropriate action
    echo '<script type="text/javascript">alert("Username already exists, try again!");history.go(-1);</script>';

} else {
    

// Insert the form data into the database
    $sql = "INSERT INTO users (fname,lname,a_m,tel,email, username,password, user_type_id) VALUES ('$firstname', '$lastname', '$studentId','$tel','$email', '$username1', '$password1','1')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully.";
        header('location: login.html');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
// Close the database connection
$conn->close();
?>
